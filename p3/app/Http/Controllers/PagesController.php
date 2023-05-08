<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function index()
    {  
      return view('pages/index');
    }

    // public function login()
    // {
    //   return view('auth/login');
    // }

    // public function register()
    // {
    //   return view('auth/register');
    // }

    public function contact()
    {
      return view('pages/contact');
    }
}
