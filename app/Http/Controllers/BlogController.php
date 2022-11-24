<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use DB;

class BlogController extends Controller
{
    public function show()
   {
      $page = DB::table('pages')->where('slug', 'home')->first();
      $pages = json_decode( json_encode($page), true);
      return view('index',['pages'=>$pages]);
   }
}
