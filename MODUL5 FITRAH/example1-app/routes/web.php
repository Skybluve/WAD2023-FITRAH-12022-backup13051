<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Buatlah 4 Routing, route pertama (/) untuk mengarahkan user
ke halaman Home, route kedua (/showroom) untuk
menghubungkan controller index(), route ketiga
(/showroom/create) untuk menghubungkan controller create(),
dan route terakhir (/showroom/store) untuk menghubungkan
controller index(). (Screenshot seluruh kode routing yang sudah
dibuat dan tampilan website tiap routenya)
Tips: Buatlah routing di dalam file “routes/web.php”. Gunakan
GET untuk route yang hanya akan menampilkan sebuah view,
dan gunakan POST untuk route yang akan menangani request
6
yang dikirim lewat sebuah form. Berikan name pada setiap
route untuk mempermudah pemanggilan route, sesuaikan nama
route yang sudah ada di dalam file template untuk menghindari
error
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});

Route::get('/showroom', function () {
    return view('showroom.index');
    })->name('showroom.index');

Route::get('/showroom/create', function () {
    return view('showroom.create');
    })->name('showroom.create');
    
Route::post('/showroom/store', function () {
    return view('showroom.index');
    })->name('showroom.store');

    







