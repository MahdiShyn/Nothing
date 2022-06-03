<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarModelController extends Controller
{
    public function newCar(Request $request)
    {
        dd($request);
        $car = New CarModel();
        $car->brandName = $request->get('brandName');
        $car->modelName = $request->get('modelName');
        $car->plateNumber = $request->get('plateNumber');
        $car->color = $request->get('color');
        $car->description = $request->get('description');
        $car->customer = Auth::user();
        $car->save();
        return response('',200);
    }

    public function confirmCarByDeskClerk(Request $request, $carId, $status)
    {
        dd($request);
        $car = CarModel::find($carId);
        if($status){
            $car->confirm = true;
        }else{
            $car->confirm = false;
        }
        $car->save();
        return response('Submited!',200);
    }

}
