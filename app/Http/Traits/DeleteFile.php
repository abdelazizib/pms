<?php

namespace App\Http\Traits;
use Illuminate\Support\Facades\File;


trait DeleteFile {

  // remove file if exist 
  protected function removeImage($imagePath){

        if(File::exists(public_path($imagePath))){
            File::delete(public_path($imagePath));
        }
    }
}