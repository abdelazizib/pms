<?php

namespace App\Http\Traits;

use Intervention\Image\Facades\Image;


trait Upload
{

    protected function uploadImage($data , $defualt , $path)
    {
        if (isset($data['image'])) {

            $image = $data['image']->hashName();

            Image::make($data['image'])->save(public_path($path.$image));

            return $image;

        } else {
            return $image = $defualt;
        }
    }
}