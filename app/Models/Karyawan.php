<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan
{
    private static $data_karyawan = [
        [
            "nomor"             => '12',
            "nama_karyawan"     => 'Andung',
            "slug"              => 'karyawan-andung-12',
            "foto_karyawan"     => 'assets/uploads/andung.jpeg',
            "status"            => 'active'
        ],[
            "nomor"             => '11',
            "nama_karyawan"     => 'Isna',
            "slug"              => 'karyawan-isna-11',
            "foto_karyawan"     => 'assets/uploads/isna.jpg',
            "status"            => 'active'
        ]
    ];

    public static function all(){
        return collect(self::$data_karyawan);
    }

    public static function find($slug){
        $data_karyawans = static::all();
        // $karyawan       = [];
        // foreach ($data_karyawans as $karyawans) {
        //     if ($karyawans["slug"] === $slug) {
        //         $karyawan = $karyawans;
        //     }
        // }
        return $data_karyawans->firstWhere('slug',$slug);
    }
}
