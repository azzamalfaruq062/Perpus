<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('login'); 
});
// Route::get('dashboard', function () { 
//     return view('dashboard'); 
// });
// Route::get('profile', function () { 
//     return view('profile'); 
// });

// Route::get('eror', function () { 
//     return view('eror'); 
// });

// Route::get('table', function () { 
//     return view('table'); 
// });

// Route::get('blank', function () { 
//     return view('blank'); 
// });

// Route::get('icon', function () { 
//     return view('icon'); 
// });

// Route::get('map', function () { 
//     return view('map'); 
// });
// Route::get('tampil', function () { 
//     $data = [
//         [
//         'nama' => 'rara',
//         'nim' => '2017',
//         ]
//     ];
//     return view('tampil', compact('data')); 
// });

// Route::get('tampil', [BarangController::class, 'index']);
// Route::resource('sewa', BarangController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('buku', BukuController::class)->middleware('auth');
    // Route::resource('sewa', BarangController::class)->middleware('auth');
    // Route::get('deletbarang/{id}', [BarangController::class, 'destroy'])->name('deletbarang');
    // Route::get('wilayah', [BarangController::class, 'wilayah'])->name('wilayah');
});

