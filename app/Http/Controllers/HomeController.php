<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function privacy() {
        return view('privacy');
    }

    public function aboutUs() {
        return view('aboutUs');
    }

// -------------------------------------- should be remove
    public function tester()
    {
        $user = User::find(1);
        $car = CarModel::find(1);
        dd($user->customer->carModels);
        // $customer = Customer::find(1);
        // $c = $customer->user;
        // dd($c);
    }
// -------------------------------------- end should be remove
}