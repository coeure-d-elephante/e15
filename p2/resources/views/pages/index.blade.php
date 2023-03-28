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
        <input type='number' name='price' id='price' value='{{ old('price') }}'>

        <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="discount" name="discount">
            <option {{ old('discount' == '0' ? 'selected' : '') }} value="0">*Select Discount</option>
            <option {{ old('discount' == '10' ? 'selected' : '') }} value="10">10%</option>
            <option {{ old('discount' == '20' ? 'selected' : '') }} value="20%">20%</option>
            <option {{ old('discount' == '30' ? 'selected' : '') }} value="30%">30%</option>
            <option {{ old('discount' == '40' ? 'selected' : '') }} value="40%">40%</option>
            <option {{ old('discount' == '50' ? 'selected' : '') }} value="50%">50%</option>
        </select>

        <fieldset>
            <div class="form-check">
                <input type="checkbox" name="include_tax" id="include_tax" {{ old('inlude_tax') ? 'checked' : '' }}>
                <label for="include_tax">7.25% Sales Tax (California)</label>
            </div>
        </fieldset>

        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>

    @if (count($errors) > 0)
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if (!is_null($total))
        <div class='results alert alert-primary'>
            <div>
                <label for='total'>Total</label>
                <input type='number' name='total' id='total' value='{{ $total }}'>
            </div>
        </div>
    @endif
@endsection
