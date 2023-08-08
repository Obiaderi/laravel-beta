<?php


namespace App\Repositories;


use App\Models\Ads;
use App\Services\CloudinaryService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\GeneralJsonException;
use Illuminate\Support\Facades\Validator;

class AdsRepository extends BaseRepository
{

    private $cloudinaryService;
    // crate a constructor to initialize object
    public function __construct(CloudinaryService $cloudinaryService)
    {
        $this->cloudinaryService = $cloudinaryService;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return DB::transaction(function () use ($attributes) {

            // Check if slug already exists
            $slug = Str::slug(data_get($attributes, 'name'));

            $validator = Validator::make(['slug' => $slug], [
                'slug' => 'unique:ads,slug',
            ]);

            $imgData = [];

            if (data_get($attributes, 'imageUrl')) {

                $imageUrls = [];
                $imagePublicIds = [];

                foreach (data_get($attributes, 'imageUrl') as $image) {
                    $uploadedImage = $this->cloudinaryService->upload($image->getRealPath(), 'ads');
                    $imageUrls[] = $uploadedImage['url'];
                    $imagePublicIds[] = $uploadedImage['public_id'];
                }

                $imgData['image_urls'] = $imageUrls;
                $imgData['image_public_ids'] = $imagePublicIds;
            }

            dd($imgData);

            $ads = Ads::create([
                'name' => data_get($attributes, 'name'),
                'slug' => $validator->fails() ? $slug . '-' . Str::random(5) : $slug,
                'description' => data_get($attributes, 'description'),
                'image_url' => $imgData['image_urls'] ?? null,
                'image_public_ids' => $imgData['image_public_ids'] ?? null,
                'price' => data_get($attributes, 'price'),
                'user_id' => data_get($attributes, 'userId'),
                'ads_category_id' => data_get($attributes, 'adsCategoryId'),
            ]);

            throw_if(!$ads, GeneralJsonException::class, 'Failed to create model.');

            return $ads;


        });
    }

    /**
     * @param Ads $ads
     * @param array $attributes
     * @return mixed
     */
    public function update($ads, array $attributes)
    {
        return DB::transaction(function () use ($ads, $attributes) {

            // Check if slug already exists
            $slug = Str::slug(data_get($attributes, 'name'));

            $validator = Validator::make(['slug' => $slug], [
                'slug' => 'unique:ads,slug,' . $ads->id,
            ]);

            $imgData = [];

            if (data_get($attributes, 'imageUrl')) {

                $imageUrls = [];
                $imagePublicIds = [];

                // Delete old images from Cloudinary using their public IDs
                foreach ($ads->image_public_ids as $publicId) {
                    $this->cloudinaryService->destroy($publicId);
                }

                foreach (data_get($attributes, 'imageUrl') as $image) {
                    $uploadedImage = $this->cloudinaryService->upload($image->getRealPath(), 'ads');

                    $imageUrls[] = $uploadedImage['url'];
                    $imagePublicIds[] = $uploadedImage['public_id'];
                }

                $imgData['image_urls'] = $imageUrls;
                $imgData['image_public_ids'] = $imagePublicIds;
            }

            $ads->update([
                'name' => data_get($attributes, 'name'),
                'slug' => $validator->fails() ? $slug . '-' . Str::random(5) : $slug,
                'description' => data_get($attributes, 'description'),
                'image_url' => $imgData['image_urls'] ?? null,
                'image_public_ids' => $imgData['image_public_ids'] ?? null,
                'price' => data_get($attributes, 'price'),
                'user_id' => data_get($attributes, 'userId'),
                'ads_category_id' => data_get($attributes, 'adsCategoryId'),
            ]);

            throw_if(!$ads, GeneralJsonException::class, 'Failed to update model.');

            return $ads;

        });
    }

    /**
     * @param Ads $ads
     * @return mixed
     */
    public function forceDelete($ads)
    {
        return DB::transaction(function () use ($ads) {

            // Delete old images from Cloudinary using their public IDs
            foreach ($ads->image_public_ids as $publicId) {
                $this->cloudinaryService->destroy($publicId);
            }

            $ads->forceDelete();

            throw_if(!$ads, GeneralJsonException::class, 'Failed to delete model.');

            return $ads;


        });


    }
}