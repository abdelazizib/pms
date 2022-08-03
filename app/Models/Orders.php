<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'apartment',
        'country',
        'state',
        'zip',
        'total',
        'payment_method',
        'payment_status',
        'order_date',
        'status',
        'user_id'
];
    use HasFactory;
    public function product(){
        return $this->belongsToMany(Product::class)->withPivot('qty');
    }
    
    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
