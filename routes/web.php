<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MailController;
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
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::post('/home',function(){
//     return view('home');
// })->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard/clients', [ClientController::class,'index'])->name('clients');

Route::get('/dashboard/clients/add-new',[ClientController::class,'add_form'])->name('client-new');

Route::post('/dashboard/clients/create',[ClientController::class,'create'])->name('client-create');

Route::get('/dashboard/client/edit/{id}',[ClientController::class,'edit']);

Route::post('/dashboard/client/update/{id}',[ClientController::class,'update']);

Route::get('/dashboard/client/delete/{id}',[ClientController::class,'delete']);

Route::get('/dashboard/client/show/{id}',[ClientController::class,'show'])->name('client.show');

Route::get('/dashboard/clients/create', [MailController::class,'send_email']);
//Route::get('sendemail', [MailController::class,'send_email']);

