<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory,SoftDeletes;
    const Category_PATH = "uploaded/slider/images/";
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
    protected $dates = [ 'deleted_at' ];
}
