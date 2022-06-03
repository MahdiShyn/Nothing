<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\Factor;

class AccountantController extends Controller
{
    public function dashboard()
    {
        $newPayment = Factor::where('paid',true)
            ->where('confirm',false)
            ->where('status','accountantAnswer')
            ->get();

        $notePayment = Factor::where('paid',true)
            ->where('confirm',false)
            ->where('status','accountantAnswer')
            ->where('status','deskClerkAnswer')
            ->get();

        $confirmPayment = Factor::where('paid',true)
            ->where('confirm',true)
            ->get();

        $cancelPayment = Factor::where('status','canceled')->get();

        return view('dashboard')
            ->with('newPayment',$newPayment)
            ->with('notePayment',$notePayment)
            ->with('confirmPayment',$confirmPayment)
            ->with('cancelPayment',$cancelPayment);
    }
}