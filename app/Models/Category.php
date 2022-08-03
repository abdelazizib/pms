<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    const Category_PATH = "uploaded/categories/images/";
    protected $fillable = [
        'name',
        'description',
        'image'
    ];
    protected $dates = [ 'deleted_at' ];
    // protected ;
    public function products()
    {
        return $this->hasMany(Product::class,'category_id');

    }
}
