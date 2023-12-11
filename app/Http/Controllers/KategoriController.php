<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function indexkategori()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $kategori = DB::table('kategori')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('indexkategori',['kategori' => $kategori]);

	}

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $kategori = DB::table('kategori')
            ->where('kategori',$id)
            ->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('kirimkategori',['kategori' => $kategori]);

    }

}
