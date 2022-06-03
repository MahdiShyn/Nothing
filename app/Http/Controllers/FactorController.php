<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Models\DiscountCode;
use App\Models\Factor;
use App\Models\Service;
use Illuminate\Http\Request;

class FactorController extends Controller
{

    public function newServiceByCustomer(Request $request)
    {
        dd($request);
        $factor = new Factor;
        $input = $request->all();
        $factor->secondPhoneNumber = $input['secondPhoneNumber'];
        $factor->service = Service::find($input['service'])->first();
        $factor->carModel = CarModel::find($input['carModel'])->first();
        $factor->description = $input['description'];
        $factor->date = $input['date'];
        $factor->time = $input['time'];
        $factor->discountCode = DiscountCode::find($input['discountCode'])->first();
        $factor->paymentMethod = $input['paymentMethod'];
        return response('',200);
    }

    public function newServiceByDeskClerk(Request $request)
    {
        dd($request);
        $factor = new Factor;
        $input = $request->all();
        $factor->secondPhoneNumber = $input['secondPhoneNumber'];
        $factor->service = Service::find($input['service'])->first();
        $factor->carModel = CarModel::find($input['carModel'])->first();
        $factor->description = $input['description'];
        $factor->date = $input['date'];
        $factor->time = $input['time'];
        $factor->discountCode = DiscountCode::find($input['discountCode'])->first();
        $factor->paymentMethod = $input['paymentMethod'];
        return response('',200);
    }

    public function uploadReciptPhoto(Request $request)
    {
        dd($request);
    }

    public function confirmPaymentByAccountant(Request $request, $factorId)
    {
        dd($request);
        $factor = Factor::find($factorId);
        $factor->confirm = true;
        $factor->save();
        return response('',200);
    }

    public function reportPaymentByAccountant(Request $request, $factorId)
    {
        dd($request);
        $factor = Factor::find($factorId);
        $factor->confirm = false;
        $factor->status = 'deskClerkAnswer';
        $factor->save();
        return response('',200);
    }

}
