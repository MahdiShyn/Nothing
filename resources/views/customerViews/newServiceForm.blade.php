@extends('master')

@section('content')
<form action="{{ route('newServiceFormHandle') }}" method="post" style="margin: 23px;">
    @csrf
    <div class="form-group col">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="fullName" placeholder=" " value="{{ @Auth::user()->name }}"
                disabled readonly>
            <label for="floatingInput">Full Name</label>
        </div>
    </div>

    {{--  --}}

    <div class="form-group col">
        <label for="customerId">Customer id</label>
        <input type="text" class="form-control mb-3" id="customerId" placeholder="12345">
    </div>

    {{--  --}}

    <div class="form-group col">
        <label for="secondPhoneNumber">Second Phone Number</label>
        <input type="text" name="secondPhoneNumber" class="form-control mb-3" id="secondPhoneNumber" placeholder="+98 9123456789">
    </div>

    {{--  --}}

    <div class="form-row">
        <label for="selectService">Select A Service</label>
        <div class="form-group col-md-4 mb-3">
            <select class="form-control" id="selectService" >
                <option>Basic</option>
                <option>Economic</option>
                <option>Standard</option>
                <option>Full</option>
                <option>Luxury</option>
                <option>Anti Wrinkle</option>
            </select>
        </div>
    </div>

    {{--  --}}

    <div class="form-row">
        <label for="carSelect">Select A Car</label>
        <div class="form-group col-md-4 mb-3">
            <select class="form-control" id="carSelect">
                {{-- @foreach (@Auth::user()->customer->carModels as $car)
                    <option>{{ $car['brandName'] }}  {{ $car['modelName'] }} ({{ $car['plateNumber'] }}) </option>
                @endforeach() --}}
            </select>
        </div>
    </div>

    {{--  --}}

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea name="description" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    {{--  --}}

    <div class="form-row">
        <div class="form-group col-md-4 mb-3">
            <label for="Discount">Date</label>
            <input name="serviceDate" type="date" class="form-control" id="Discount" required>
        </div>
    </div>

    {{--  --}}

    <div class="form-row">
        <div class="form-group col-md-4 mb-3">
            <label for="Discount">Date</label>
            <input name="" type="time" class="form-control" id="Discount" required>     {{-- name --}}
        </div>
    </div>

    {{--  --}}

    <div class="form-row">
        <div class="form-group col-md-4 mb-3">
            <label for="Discount">Discount Code</label>
            <input type="text" name="discountCode" class="form-control" id="Discount">
        </div>
    </div>

    {{--  --}}

    <div class="my-3">
        <label for="PaymentMethod">Payment Method</label>
        <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
            <label class="form-check-label" for="credit">Credit Card (Presence)</label>
        </div>
        <div class="form-check">
            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
            <label class="form-check-label" for="debit">Cart to Cart</label>
        </div>
        <div class="form-check">
            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
            <label class="form-check-label" for="paypal">Online Payment</label>
        </div>
    </div>

    {{--  --}}
    <div class="form-group col">
        <input class="form-check-input mb-2 mr-3" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            I Agree to our Privacy Policy & Cookie Policy.
        </label>
    </div>

    {{--  --}}
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn mt-5 btn-outline-primary btn-lg" style="padding:10px 100px; border-radius: 30px;">Sign in</button>
    </div>
</form>

@endsection
