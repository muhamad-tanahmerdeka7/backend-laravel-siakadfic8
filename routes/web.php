<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;







Route::get('/', function () {
    return view('pages.auth.auth-login', ['type_menu' => '']);
});




Route::middleware(['auth'])->group(function () {

    Route::get('home', function () {
        return view('pages.app.dashboard-siakad', ['type_menu' => '']);
    })->name('home');

    ///
    Route::resource('user',  UserController::class);
});







// ini saat setting fortify di comment

// Route::get('/', function () {
//     return view('pages.app.dashboard-siakad', ['type_menu' => '']);
// });


// Route::get('/login', function () {
//     return view('pages.auth.auth-login', ['type_menu' => '']);
// })->name('login');


// Route::get('/register', function () {
//     return view('pages.auth.auth-register', ['type_menu' => '']);
// })->name('register');



// Route::get('/forgot', function () {
//     return view('pages.auth.auth-forgot', ['type_menu' => '']);
// })->name('forgot');


// Route::get('/reset-password', function () {
//     return view('pages.auth.auth-reset-password', ['type_menu' => '']);
// })->name('reset-password');
