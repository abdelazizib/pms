<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    const Product_PATH = 'uploaded/products/images/';
    use HasFactory;
    use SoftDeletes;
    protected $dates = [ 'deleted_at' ];
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
        'price',
        'slug'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
