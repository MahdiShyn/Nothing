<?php
namespace App\Http\Controllers;

use App\Models\Factor;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function newServiceFormHandle(Request $request)
    {
        dd($request);
    }

    public function uploadReceiptPictureHandle(Request $request)
    {
        dd($request);
        // 
        return ;
    }

    public function newCarFormHandle(Request $request)
    {
        dd($request);
        // $input = $request->all();
        // $brand = $input['brand'];
        // $model = $input['model'];
        // $plate = $input['plate'];
        // $color = $input['color'];
        // $description = $input['description'];
        // return ;
    }

    public function confirmDidService(Request $request, $factorId, $status)
    {
        dd($request);
        $factor = Factor::find($factorId);
        if($status){
            // 
        }else{
            // 
        }
        $factor->save();
        return response('',200);
    }
}
