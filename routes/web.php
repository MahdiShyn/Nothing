<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/About-us', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/privacy',function () {
    return view('privacy');
})->name('privacy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
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


Route::get('/form',function(){ 
    return view('customerViews.newServiceForm');
});

Route::get('/t',[HomeController::class,'tester']);


// Route::get()