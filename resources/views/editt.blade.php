@extends('master2')

@section('taitel', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a class="btn btn-danger"href="/mobil">Kembali</a>

	<br/>
	<br/>

	@foreach($mobil as $m)
	<form action="/mobil/updatee" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="kodemobil" value="{{ $m->kodemobil }}"> <br/>

		<div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Merk_Mobil</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="merkmobil" name="Merk_Mobil" required value="{{ $m->merkmobil }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Stock_Mobil</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="stockmobil" name="Stock_Mobil" required value="{{ $m->stockmobil }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Status_Tersedia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tersedia" name="Status_Tersedia" required value="{{ $m->tersedia }}">
            </div>
          </div>


          <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
          </div>
        </form>
	@endforeach

@endsection
