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
        <input type='number' name='price' id='price' value=''>

        <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="discount" name="discount">
            <option selected>*Select Discount</option>
            <option value="10%">10%</option>
            <option value="20%">20%</option>
            <option value="30%">30%</option>
            <option value="40%">40%</option>
            <option value="50%">50%</option>
        </select>

        <fieldset>
            <label>7.25% Sales Tax (California)</label>
                <input 
                type="radio" 
               name="tax"  
               id="include_tax" 
               value="include_tax"
               {{(!isset($price) OR is_null($tax)) ? 'checked' : '' }}
                >
                <br>
            <label>Exclude Sales Tax</label>
                <input 
                type="radio" 
                name="tax" 
                id="exclude_tax"      
                value="exclude_tax"
                {{ ($tax = 'exclude_tax') ? 'checked' : '' }}
                >
        </fieldset>

        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>

    @if (!isset($price) or $price = 0)
        <div class='results alert alert-warning'>
            Please enter appropriate values.
        </div>
    @else
        @if ($tax == 'include_tax')
        <div class='results alert alert-primary'>
            <div>
                <label for='net_total'>$ Net Total</label>
                <input type='number' name='net_total' id='net_total' value='{{ $net_total }}'>
            </div>
        </div>
            @else
             <div class='results alert alert-primary'>
            <div>
                <label for='net_total'>$ Gross Total</label>
                <input type='number' name='gross_total' id='gross_total' value='{{ $gross_total }}'>
            </div>
        </div>
        @endif
    @endif
@endsection
