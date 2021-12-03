<?php

use App\Jobs\RegistrationConfirm;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');
// })->middleware(['auth'])->name('dashboard');



Route::get('email-test', function(){
  
    $details['email'] = 'towhidhasang1@gmail.com';
  
    dispatch(new RegistrationConfirm($details));
  
    dd('done');
});

require __DIR__.'/auth.php';
