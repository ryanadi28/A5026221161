<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function keranjangbelanja()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('keranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai


	// method untuk insert data ke table pegawai


    public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

    public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}



    public function storeee(Request $requestt)
    {
        DB::table('keranjangbelanja')-> insert([
			'KodeBarang' => $requestt->Kode_Barang,
			'Jumlah' => $requestt->Jumlah_Pembelian,
			'Harga' => $requestt->Harga_per_item
        ]);
        return redirect('/keranjangbelanja');
    }
}
