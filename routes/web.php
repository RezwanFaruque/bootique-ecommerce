<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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
    if(Auth::user()){
        return redirect('/dashboard');
    }else{ 
    return view('welcome');
    
   }
})->name('login');


Route::controller(AuthController::class)->group(function(){

    Route::get('/register','registerview');

    Route::post('/loginuser','logingUser')->name('user.login');
    

});



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
       
        return view('dashboard.index');
    });

    Route::controller(AuthController::class)->group(function(){
        Route::post('/logout','userlogout')->name('logout');
    });

    
});


