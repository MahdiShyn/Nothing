<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function newServiceFormHandle(Request $request)
    {
        $in = $request->all();
        // $secondPhoneNumber = $in['secondPhoneNumber'];
        // $selectService =
        // $selectCar = 
        // $description = 
        // $date = 
        // $time = 
        // $discountCode = 
        // $paymentMethod = 
        return ;
    }

    public function uploadReceiptPictureHandle(Request $request)
    {
        // 
        return ;
    }

    public function newCarFormHandle(Request $request)
    {
        $in = $request->all();
        $brand = $in['brand'];
        $model = $in['model'];
        $plate = $in['brand'];
        $color = $in['brand'];
        $description = $in['brand'];

        return ;
    }

    // public function
}
