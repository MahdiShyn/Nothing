@extends('dashboard')

@section('dashboardContent')

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Customer</th>
            <th scope="col">Plate Number</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
{{-- @foreach($cars as $car) --}}
@for($i=0;$i<30;$i++)
    <tr>
        <th scope="row">{{ $i }}</th>
        <td>Brand{{ $i }}</td>
        <td>Model{{ $i }}</td>
        <td>Customer{{ $i }}</td>
        <td>plateNumber{{ $i }}</td>
        <td>description{{ $i }}</td>
    </tr>
@endfor
{{-- @endforeach --}}
    </tbody>
</table>

@endsection