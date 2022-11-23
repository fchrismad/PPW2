<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GreetController;

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
    // return view('welcome');
    echo asset('storage/file.txt');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/education', function () {
    return view('educations');
});

Route::get('/halo-dunia', function () {
    return '<h1>Halo Dunia</h1>';
});

Route::get('/halo/{nama}', function($nama) {
    return '<h1>Halo ' . $nama . '</h1>';
});
   
Route::get( '/halo/{nama?}' , function($nama = 'Kosongan Lur') {
    return '<h1>Halo ' . $nama . '</h1>';
});
   
Route::get('/ppw2', function () {
    return view('ppw2');
});

Route::get('/halo-blade', function() {
    return view('ppw2', ['data' =>
   'Contoh data']);
});
   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 
'App\Http\Controllers\PostController');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');

// Route::get('/send-email',function(){
//     $data = [
//     'name' => 'Nama Anda',
//     'body' => 'Testing Kirim Email'
//     ];
    
//     Mail::to('fachrisa.meivito0703@mail.ugm.ac.id')->send(new SendEmail($data));
    
//     dd("Email Berhasil dikirim.");
// });

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

Route::resource('gallery', 'App\Http\Controllers\GalleryController');
Route::get('/gallery2', [GreetController::class, 'gallery'])->name('gallery');

Route::get('/greet', [GreetController::class, 'greet'])->name('greeting');