<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

// ROUTE CRUD INDEX
Route::get('/pegawai', [PegawaiController::class, 'index']);
//ROUTE CRUD TAMBAH PEGAWAI
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
//ROUTE CRUD PEGAWAI-->STORE
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
//ROUTE CRUD EDIT PEGAWAI
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
//ROUTE CRUD UPDATE PEGAWAI
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
//ROUTE CRUD HAPUS PEGAWAI
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);