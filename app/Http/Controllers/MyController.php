<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{


    public function service()
{
    return view('/vendor/voyager/service');
}
}
