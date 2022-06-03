@extends('dashboard')
@section('dashboardContent')
<div class="align-content-between">
    <div class="m-2">
        @if(@Auth::user()->customer->carModels != null)
        You have<b class="text-danger"> {{ count(@Auth::user()->customer->carModels) }} </b>cars.
        @else
        You have<b class="text-danger"> 0 </b>cars.
        @endif
    </div>
    @if(@Auth::user()->customer->carModels == null)
    <div class="m-3">
        <a href="{{ route('newCarForm') }}" class="btn btn-primary" >
            Enter new car
        </a>
    </div>
    @else
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Name</th>
                    <th scope="col">Plate Number</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @for($i=0;$i<5;$i++) <tr>
                    <th scope="row">{{ $i+1 }}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <button class="btn btn-danger">
                            Uploud Document
                        </button>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection