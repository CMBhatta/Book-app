<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolclass extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // defines a relationship between two database tables. 
    public function students(){
        return $this->hasMany(Schoolstudent::class,'class');
    }
}
