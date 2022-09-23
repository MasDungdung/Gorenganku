<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
       return view('template.manager.master_data_entry_karyawan',[
            "nama"          => "Administrator",
            "email"         => "admin@gorenganku.com",
            "foto_profil"   => "assets/images/faces/1.jpg",
            "judul"         => "Master Data Entry Karyawan",
            "master_data"   => Karyawan::all()    
        ]);
    }

    public function tambah_karyawan()
    {
        return view('template.manager.entry_karyawan',[
            "nama"          => "Administrator",
            "email"         => "admin@gorenganku.com",
            "foto_profil"   => "assets/images/faces/1.jpg",
            "judul"         => "Entry Karyawan"
        ]);
    }

    public function detail_karyawan($slug)
    {
        return view('template.admin.detail_karyawan',[
            "nama"              => "Administrator", 
            "email"             => "admin@gorenganku.com",
            "foto_profil"       => "assets/images/faces/1.jpg",
            "judul"             => "Master Data Entry Karyawan",
            "detail_karyawan"   => Karyawan::find($slug)   
        ]);
    }
}
