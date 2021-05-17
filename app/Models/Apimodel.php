<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apimodel extends Model
{
    use HasFactory;

   public $timestaps = false;
   public $hidden = ['created_at', 'updated_at'];
   public $fillable = ['name', 'email', 'created_at'];
   
}
