<?php

// app/Services/CloudinaryService.php
namespace App\Services;

use Cloudinary\Cloudinary;

class CloudinaryService
{
    private $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary(config('cloudinary'));
    }

    public function upload($imagePath, $folder)
    {
        // Use the Cloudinary instance to upload the image
        $uploadedImage = $this->cloudinary->uploadApi()->upload($imagePath, [
            'folder' => $folder,
            'resource_type' => 'auto', // jpeg, png, gif, etc
        ]);

        // Return the uploaded image's URL and public ID as an array
        return ['url' => $uploadedImage['secure_url'], 'public_id' => $uploadedImage['public_id']];
    }

    public function destroy($publicId)
    {
        // Use the Cloudinary instance to destroy the image
        return $this->cloudinary->uploadApi()->destroy($publicId);
    }
}