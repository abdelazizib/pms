<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    protected $dates = [ 'deleted_at' ];
    const Employee_PATH = "uploaded/employees/images/";
    protected $fillable = ['name','image','job','description','phone'];
   

    use HasFactory;
}
