<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;


class PagesController extends Controller
{
    public function show($slug)
   {
      $page = Page::findBySlug($slug);
      return view('pages.service',['page'=>$page]);
   }
}
