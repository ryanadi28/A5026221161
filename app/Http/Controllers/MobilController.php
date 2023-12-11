<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
	public function indexmobil()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $mobil = DB::table('mobil')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('indexmobil',['mobil' => $mobil]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahh()
	{

		// memanggil view tambah
		return view('tambahh');

	}

	// method untuk insert data ke table pegawai
	public function storee(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mobil')->insert([
			'merkmobil' => $request->Merk_Mobil,
			'stockmobil' => $request->Stock_Mobil,
			'tersedia' => $request->Status_Tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');

	}

	// method untuk edit data pegawai
	public function editt($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editt',['mobil' => $mobil]);

	}

	// update data pegawai
	public function updatee(Request $request)
	{
		// update data pegawai
		DB::table('mobil')->where('kodemobil',$request->id)->update([
            'kodemobil' => $request->Kode_Mobil,
			'merkmobil' => $request->Merk_Mobil,
			'stockmobil' => $request->Stock_Mobil,
			'tersedia' => $request->Status_Tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

	// method untuk hapus data pegawai
	public function hapuss($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mobil')->where('kodemobil',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

    public function carii(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexmobil',['mobil' => $mobil,'cari' => $cari]);

	}

    public function vieww($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $mobil = DB::table('mobil')
        ->where('kodemobil',$id)
        ->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('vieww',['mobil' => $mobil]);

}
}
