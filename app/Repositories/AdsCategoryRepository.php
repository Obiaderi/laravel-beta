<?php


namespace App\Repositories;


use App\Exceptions\GeneralJsonException;
use App\Models\AdsCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdsCategoryRepository extends BaseRepository
{

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return DB::transaction(function () use ($attributes) {

            // check if theres image
            if (data_get($attributes, 'imageUrl')) {
                // upload image
                $image = data_get($attributes, 'imageUrl');
                $imageName = 'beta' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/categories'), $imageName);
                $imagePath = 'images/categories/' . $imageName;
                $attributes['imageUrl'] = $imagePath;
            }

            // dd($attributes);

            $created = AdsCategory::query()->create([
                'name' => data_get($attributes, 'name'),
                'image_url' => data_get($attributes, 'imageUrl'),
            ]);

            throw_if(!$created, GeneralJsonException::class, 'Failed to create model.');
            // event(new UserCreated($created));
            return $created;
        });
    }

    /**
     * @param AdsCategory $adsCategory
     * @param array $attributes
     * @return mixed
     */
    public function update($adsCategory, array $attributes)
    {
        return DB::transaction(function () use ($adsCategory, $attributes) {

            // check if theres image and delete old one
            if (data_get($attributes, 'imageUrl')) {
                // upload image
                $image = data_get($attributes, 'imageUrl');
                $imageName = 'beta' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/categories'), $imageName);
                $imagePath = 'images/categories/' . $imageName;
                $attributes['imageUrl'] = $imagePath;

                // delete old image
                $oldImage = $adsCategory->image_url;
                if (file_exists(public_path($oldImage))) {
                    unlink(public_path($oldImage));
                }
            }

            $updated = $adsCategory->update([
                'name' => data_get($attributes, 'name', $adsCategory->name),
                'image_url' => data_get($attributes, 'imageUrl', $adsCategory->image_url),
            ]);

            throw_if(!$updated, GeneralJsonException::class, 'Failed to update Model.');
            // event(new UserUpdated($user));

            return $adsCategory;

        });
    }

    /**
     * @param AdsCategory $adsCategory
     * @return mixed
     */
    public function forceDelete($adsCategory)
    {
        return DB::transaction(function () use ($adsCategory) {

            // delete image
            $oldImage = $adsCategory->image_url;
            if (file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }

            $deleted = $adsCategory->forceDelete();

            throw_if(!$deleted, GeneralJsonException::class, 'Cannot delete user.');
            // event(new UserDeleted($user));
            return $deleted;
        });


    }
}