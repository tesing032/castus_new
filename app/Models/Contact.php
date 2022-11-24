<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contact';  
    public $fillable = ['username','email','message','address','service','phone'];
}
