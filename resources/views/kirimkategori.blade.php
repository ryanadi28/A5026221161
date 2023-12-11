@extends('master2')

@section('Title','Data Pegawai')

@section('konten')


	<h3>Anda Telah Mengirim Kategori Dengan Kode : {{ $k->kategori }} </h3>


	<br/>


    {{ $kategori->links() }}
    @endsection
