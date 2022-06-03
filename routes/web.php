<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// --------------------------------------------------------------------------
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/About-us', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/privacy',function () {
    return view('privacy');
})->name('privacy');

// --------------------------------------------------------------------------

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('customerViews.dashboard');
    })->name('dashboard');
});

Route::get('receipt/{id}',function($id){
    if(Auth::user())
        return response()->file(storage_path().'/app/receipt/'.$id.'.jpg');
    else
        abort(403);
})->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);

// --------------------------- Customers route ---------------------------

Route::get('/form',function(){ 
    return view('customerViews.newServiceForm');
});

Route::get('/t',[HomeController::class,'tester']);

Route::post('/submit-new-service',[CustomerController::class,'newServiceFormHandle'])
    ->name('newServiceFormHandle');

Route::get('my-cars',function () {
    return view('myCars');
})->name('myCars');

Route::get('customers',function () {
    return view('customers');
})->name('customers');

Route::get('new-car',function(){
    return view('customerViews.newCarForm');
})->name('newCarForm');

Route::post('new-car-handle',[CustomerController::class,'newCarFormHandle'])
    ->name('newCarHandle');


// --------------------------- Accountant route ---------------------------

// Route::get('',function(){
//     // 
// })->name('');

Route::post('confirm-payment',[FactorController::class,'confirmPaymentByAccountant'])
    ->name('confirmPayment');


Route::post('report-payment',[FactorController::class,'reportPaymentByAccountant'])
    ->name('reportPayment');


// Route::post('',[''])
//     ->name('');


// --------------------------- Desk clerk route ---------------------------

Route::post('confirm-car',[CarModelController::class,'confirmCarByDeskClerk'])
    ->name('confirmCar');

Route::post('new-service-DC',[FactorController::class,'newServiceByDeskClerk'])
    ->name('newServiceDeskClerk');

Route::post('service-volume',[ServiceController::class,'setServiceVolume'])
    ->name('setServiceVolume');

// Route::post('',[''])
//     ->name('');

// Route::post('',[''])
//     ->name('');


// --------------------------- Workers route ---------------------------

// Route::post('',[WorkerController::class,'reportDidService'])
//     ->name('');

// Route::post('',[WorkerController::class,'reportPeresentCustomer'])
//     ->name('');