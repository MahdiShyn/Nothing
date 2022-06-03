@extends('dashboard')

@section('dashboardContent')

<form action="{{ route('newCarHandle') }}" method="POST">
    @csrf

    <div class="form-group col">
        <label for="carBrand">Brand</label>
        <input type="text" class="form-control mb-3" id="carBrand" placeholder="example: BMW">
    </div>

    {{--  --}}

    <div class="form-group col">
        <label for="carModel">Model</label>
        <input type="text" class="form-control mb-3" id="carModel" placeholder="328 i">
    </div>

    {{--  --}}

    <div class="form-group col">
        <label for="carPlate">Plate</label>
        <div class="input-group mb-3" style="width: 250px !important;">
            <input type="text" class="form-control" id="carPlate1" placeholder="12">
            <input type="text" class="form-control" id="carPlate2" placeholder="a" aria-label="Server">
            <input type="text" class="form-control" id="carPlate3" placeholder="345" aria-label="Server">
            <input type="text" class="form-control" id="carPlate4" placeholder="67 IR" aria-label="Server">
        </div>
    </div>

    {{--  --}}

    <div class="form-group col">
        <label for="carColor">Color</label>
        <input type="text" class="form-control mb-3" id="carColor" placeholder="White">
    </div>

    <div class="form-group col">
        <label for="carDescription">Description</label>
        <textarea type="" class="form-control mb-3" id="carDescription"></textarea>
    </div>

    <div class="form-group col">
        <label for="carCardImage">Upload Card Card</label>
        <input type="file" class="form-control mb-3" id="carCardImage" accept="image/*" style="border-width:2px;border-radius:5px;padding:6px;">
    </div>

    <button type="submit" class="btn btn-success col-3 mt-3">Enter</button>
</form>

@endsection