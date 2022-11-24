<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  
     public static function findBySlug($slug)
     {

        return static::where('slug', $slug)->first();
     }
}
