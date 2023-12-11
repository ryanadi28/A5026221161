@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
<div> <h3>Pilih Kategori</h3>
<form action="/kategori/kirim" method="post">
    <select name="cars" class="custom-select">
      @foreach ($kategori as $k )
      <option value="volvo">{{$k->Nama}}</option>
      @endforeach
    </select>
    <br>
    <br>
    <input type="submit" value="Save Data" class="btn btn-success">
  </form>

@endsection
