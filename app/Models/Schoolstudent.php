<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolstudent extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function schoolclass(){
        return $this->belongsTo(Schoolclass::class,'class');
    }
}
