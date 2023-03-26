<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Translation\Provider\NullProvider;

/**
* All App functions are written in Controllers;
* Controllers control
*/

class AppController extends Controller
{
    public function index()
    {
        return view('pages/index')->with([
            'net_total' => session('net_total', null),
            'sales_tax' => session('sales_tax', null),
            'gross_total' => session('gross_total', null),
            'tax'=> session('tax', null)
        ]);
    }

    public function calculate(Request $request)
    {
        $request->validate([
         'price'=> 'required',
         'discount'=>'required'
        ]);

        $price = $request->input('price', '');
        $discount = $request->input('discount', '');
        $tax= $request->input('tax', 'include_tax');
        

        dump($tax);
       
        $sales_tax = .0725;

        // //  dump('inputs:', $price, $discount, $sales_tax);
        
        // //convert percent to decimal
        $float = floatval($discount)/100;

        $apply_discount_price = $price * $float;
     
        $gross_total = $price - $apply_discount_price;   

        $tax_amount = $gross_total * $sales_tax;

        $net_total = $gross_total + $tax_amount;

        // dump([
        //     'Price after discount:',$gross_total, 
        //     'Tax amount for item:',
        //     $tax_amount, 
        //     'Grand total with discount and tax:', $net_total
        // ]);

        return redirect('/')->with([
         'net_total' => $net_total,
         'gross_total' => $gross_total,
         'price' => $price,
         'tax'=>$tax
        ]);
    }
}
