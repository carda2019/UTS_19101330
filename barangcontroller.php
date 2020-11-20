<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class BarangController extends Controller
{
    
    public function index() {
        
       // $barang = DB::table('tb_barang')->insert([
        //  [
        //      'id'     => 'B-03',
        //      'nama_barang'   => 'Komputer',
        //      'stok_barang'   => '3',
        //      
        //  ]
        // ]);

        $barang = DB::table('tb_barang')->get();

        return view('halaman/barang', compact('barang'));
    }
}
