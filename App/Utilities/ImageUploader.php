<?php

namespace App\Utilities;

use Bulletproof\Image;

class ImageUploader
{
    public static function upload($file, string $path, string $image_name = null)
    {
        $image = new Image($file);

        $image->setLocation('uploads/images/' . ltrim($path, '/'));

        if(!is_null($image_name)){
            $image_name = str_replace(['.jpeg', '.jpg', '.png', '.bmp', '.jfif', '.gif'], '', $image_name);

            $image->setName($image_name);
        }

        $upload = $image->upload();

        if ($upload) {
            return $upload->getFullPath();
        } else {
            return $image->getError();
        }
    }
}
