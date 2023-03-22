<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Log\Logger;
/**
* All App functions are written in Controllers;
* Controllers control
*/

class AppController extends Controller {
   
    public function index() {
        return view('pages/index');      
    }

    public function calculate(Request $request) {
       $request->validate([
        'price'=> 'required',
        'discount'=>'required'
       ]);

     $price = $request->input('price', '');
     $discount = $request->input('discount', '');
     $sale_tax = .0725;

    //  dump($price, $discount, $sale_tax);
    
    $float = floatval($discount);

      $multiply = $price * $float;

      $gross_total = $price - $multiply;

      $tax_total = $gross_total * $sale_tax;
       
      $net_total = $gross_total + $tax_total;

    //   dump($net_total);
    
       return redirect('/')->with([
        'net_total' => $net_total
       ]);

    //    $price = $request->input('price', '');
    //    $discount = $request->input('discount', '');

    //    error_log($price, $discount);
    //$price x $discount in decimal form = total
    //total + 7.25%(total) = actual total
     

    }
}