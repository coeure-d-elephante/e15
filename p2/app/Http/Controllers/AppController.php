<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* All App functions are written in Controllers;
* Controllers control
*/

class AppController extends Controller
{
    public function index()
    {
        return view('pages/index')->with([
            'total' => session('total', null)
        ]);
    }

    public function calculate(Request $request)
    {
        $request->validate([
         'price'=> 'required'
        ]);

        $price = $request->input('price');
        $discount = floatval($request->input('discount'))/100;
        $include_tax= $request->has('include_tax');
     
        $total = $price;

        if($discount > 0) {
            $total = $price - ($price * $discount);
        }

        if($include_tax) {
            $total = $total + ($total * .0725);
        }

        return redirect('/')->with([
            'total' => $total,
        ])->withInput();
    }
}
