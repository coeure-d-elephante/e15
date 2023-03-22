{{-- /resources/views/books/create.blade.php --}}
@extends('layouts/main')

@section('title')
   Discount Price Calculator
@endsection

@section('content')
<h1>Discount Price Calculator</h1>

    <p>Find out what the discounted price of an item!</p>

    <form method='POST' action='/'>
        <div class='details'>* Required fields</div>
        
        {{ csrf_field() }}

        <label for='price'>*Price</label>
        <input type='number' name='price' id='price' value='' >

       <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="discount" name="discount">
        <option selected>*Select Discount</option>
        <option value=".01">10%</option>
        <option value=".02">20%</option>
        <option value=".03">30%</option>
        <option value=".04">40%</option>
        <option value=".05">50%</option>
        </select>
        
        <div>
         <label for='sales_tax'>7.25% Sales Tax (California)</label>
            <input class="form-check-input" type="checkbox" id="sales_tax" value=".0725" name="sales_tax"
             {{-- {{ ($price == '') ? 'checked' : '' }} --}}
            >  
        </div>

        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>


    @if(!is_null($net_total))

        <div class='results alert alert-warning'>
            Please enter appropriate values.
        </div>
    @else
        <div class='results alert alert-primary'>
            <div>
                <label for='net_total'>Net Total</label>
                <input type='number' name='net_total' id='net_total' value='{{ $net_total }}'>
            </div>
        </div>
    @endif
   
@endsection