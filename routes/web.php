<?php

use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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
    return view('template.admin.beranda_gorenganku',[
        "nama"          => "Administrator",
        "email"         => "admin@gorenganku.com",
        "foto_profil"   => "assets/images/faces/1.jpg",
        "judul"         => "Home"
    ]);
});

// route penjualan
Route::get('/entry_penjualan', function () {
    return view('template.admin.entry_penjualan',[
        "nama"          => "Administrator",
        "email"         => "admin@gorenganku.com",
        "foto_profil"   => "assets/images/faces/1.jpg",
        "judul"         => "Entry Penjualan"
    ]);
});

Route::get('/master_data_entry_penjualan', function () {
    $data   = [
        [
            "nomor"             => '12',
            "nama_pegawai"      => 'Andung',
            "lokasi_store"      => 'Galaxy Mall',
            "hasil_penjualan"   => '50',
            "tanggal_penjualan" => '19/09/2022',
            "bukti_pendukung"   => 'assets/uploads/andung.jpeg',
            "tanggal_input"     => '19/09/2022',
            "status"            => 'active'
        ],[
            "nomor"             => '13',
            "nama_pegawai"      => 'Isna',
            "lokasi_store"      => 'Pasar Atom',
            "hasil_penjualan"   => '10',
            "tanggal_penjualan" => '19/09/2022',
            "bukti_pendukung"   => 'assets/uploads/isna.jpg',
            "tanggal_input"     => '19/09/2022',
            "status"            => 'inactive'
        ]
    ];
        
    return view('template.admin.master_data_entry_penjualan',[
        "nama"          => "Administrator",
        "email"         => "admin@gorenganku.com",
        "foto_profil"   => "assets/images/faces/1.jpg",
        "judul"         => "Master Data Entry Penjualan",
        "master_data"   => $data   
    ]);
});

//route Karyawan
Route::get('/entry_karyawan',[KaryawanController::class,'tambah_karyawan']);
Route::get('/master_data_entry_karyawan',[KaryawanController::class,'index']);
Route::get('/master_data_entry_karyawan/{slug}',[KaryawanController::class,'detail_karyawan']);

//route store
Route::get('/entry_store', function () {
    return view('template.manager.entry_Store',[
        "nama"          => "Administrator",
        "email"         => "admin@gorenganku.com",
        "foto_profil"   => "assets/images/faces/1.jpg",
        "judul"         => "Entry Store"
    ]);
});

Route::get('/master_data_entry_store', function () {
    $data   = [
        [
            "nomor"             => '12',
            "nama_store"        => 'galaxy mall',
            "foto_store"        => 'assets/uploads/andung.jpeg',
            "alamat"            => 'jl. surabayaa',
            "status"            => 'active'
        ],[
            "nomor"             => '11',
            "nama_store"        => 'Plaza mall',
            "foto_store"        => 'assets/uploads/andung.jpeg',
            "alamat"            => 'jl. bronggalan',
            "status"            => 'active'
        ]
    ];
        
    return view('template.manager.master_data_entry_store',[
        "nama"          => "Administrator",
        "email"         => "admin@gorenganku.com",
        "foto_profil"   => "assets/images/faces/1.jpg",
        "judul"         => "Master Data Entry Store",
        "master_data"   => $data   
    ]);
});

//route laporan
Route::get('/laporan_penjualan', function () {
    return view('template.admin.laporan_penjualan',[
        "nama"          => "Administrator",
        "email"         => "admin@gorenganku.com",
        "foto_profil"   => "assets/images/faces/1.jpg",
        "judul"         => "Laporan Penjualan"
    ]);
});

Route::get('/laporan_gaji', function () {
    return view('template.manager.laporan_gaji',[
        "nama"          => "Administrator",
        "email"         => "admin@gorenganku.com",
        "foto_profil"   => "assets/images/faces/1.jpg",
        "judul"         => "Laporan Gaji"
    ]);
});