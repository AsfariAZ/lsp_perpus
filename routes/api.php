<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('admin', function () {
    $admin = User::where('role' , 'admin')->get();
    return response()->json([
        'admin' => $admin
    ]);
});

Route::get('kategori', [App\Http\Controllers\API\ApiKategori::class, 'get']);
Route::get('kategori/{id}', [App\Http\Controllers\API\ApiKategori::class, 'get']);
Route::post('kategori', [App\Http\Controllers\API\ApiKategori::class, 'store']);
Route::put('kategori/{id}', [App\Http\Controllers\API\ApiKategori::class, 'update']);
Route::delete('kategori/{id}', [App\Http\Controllers\API\ApiKategori::class, 'destroy']);

Route::get('user', [App\Http\Controllers\API\ApiUser::class, 'get']);
Route::get('user/{id}', [App\Http\Controllers\API\ApiUser::class, 'get']);
Route::post('user', [App\Http\Controllers\API\ApiUser::class, 'store_user']);
Route::post('admin', [App\Http\Controllers\API\ApiUser::class, 'store_admin']);
Route::put('user/{id}', [App\Http\Controllers\API\ApiUser::class, 'update']);
Route::put('admin/{id}', [App\Http\Controllers\API\ApiUser::class, 'updateAdmin']);
Route::delete('user/{id}', [App\Http\Controllers\API\ApiUser::class, 'destroy']);
Route::delete('admin/{id}', [App\Http\Controllers\API\ApiUser::class, 'destroyAdmin']);

Route::get('buku', [App\Http\Controllers\API\ApiBuku::class, 'get']);
Route::get('buku/{id}', [App\Http\Controllers\API\ApiBuku::class, 'get']);
Route::post('buku', [App\Http\Controllers\API\ApiBuku::class, 'store']);
Route::put('buku/{id}', [App\Http\Controllers\API\ApiBuku::class, 'update']);
Route::delete('buku/{id}', [App\Http\Controllers\API\ApiBuku::class, 'destroy']);

Route::get('peminjaman', [App\Http\Controllers\API\ApiPeminjaman::class, 'get']);
Route::get('peminjaman/{id}', [App\Http\Controllers\API\ApiPeminjaman::class, 'get']);
Route::post('peminjaman', [App\Http\Controllers\API\ApiPeminjaman::class, 'store']);
Route::put('peminjaman/{id}', [App\Http\Controllers\API\ApiPeminjaman::class, 'update']);
Route::delete('peminjaman/{id}', [App\Http\Controllers\API\ApiPeminjaman::class, 'destroy']);

Route::get('penerbit', [App\Http\Controllers\API\ApiPenerbit::class, 'get']);
Route::get('penerbit/{id}', [App\Http\Controllers\API\ApiPenerbit::class, 'get']);
Route::post('penerbit', [App\Http\Controllers\API\ApiPenerbit::class, 'store']);
Route::put('penerbit/{id}', [App\Http\Controllers\API\ApiPenerbit::class, 'update']);
Route::delete('penerbit/{id}', [App\Http\Controllers\API\ApiPenerbit::class, 'destroy']);

Route::get('pesan', [App\Http\Controllers\API\ApiPesan::class, 'get']);
Route::get('pesan/{id}', [App\Http\Controllers\API\ApiPesan::class, 'get']);
Route::post('pesan', [App\Http\Controllers\API\ApiPesan::class, 'store']);
Route::put('pesan/{id}', [App\Http\Controllers\API\ApiPesan::class, 'update']);
Route::delete('pesan/{id}', [App\Http\Controllers\API\ApiPesan::class, 'destroy']);

Route::get('pemberitahuan', [App\Http\Controllers\API\ApiPemberitahuan::class, 'get']);
Route::get('pemberitahuan/{id}', [App\Http\Controllers\API\ApiPemberitahuan::class, 'get']);
Route::post('pemberitahuan', [App\Http\Controllers\API\ApiPemberitahuan::class, 'store']);
Route::put('pemberitahuan/{id}', [App\Http\Controllers\API\ApiPemberitahuan::class, 'update']);
Route::delete('pemberitahuan/{id}', [App\Http\Controllers\API\ApiPemberitahuan::class, 'destroy']);

Route::get('identitas', [App\Http\Controllers\API\ApiIdentitas::class, 'get']);
Route::get('identitas/{id}', [App\Http\Controllers\API\ApiIdentitas::class, 'get']);
Route::post('identitas', [App\Http\Controllers\API\ApiIdentitas::class, 'store']);
Route::put('identitas/{id}', [App\Http\Controllers\API\ApiIdentitas::class, 'update']);
Route::delete('identitas/{id}', [App\Http\Controllers\API\ApiIdentitas::class, 'destroy']);