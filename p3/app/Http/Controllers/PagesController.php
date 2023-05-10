<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function index()
    {  
      return view('pages/index');
    }

    public function contact()
    {
      return view('pages/contact');
    }

}
