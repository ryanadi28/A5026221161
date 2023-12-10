@extends('master2')

@section('taitel', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a class="btn btn-danger"href="/mobil"> Kembali</a>

	<br/>
	<br/>

	<form action="/mobil/storee" method="post" class="form-horixontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="Merk_Mobil" class="col-sm-2 col-form-label">Merk_Mobil</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="merkmobil" name="Merk_Mobil" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Stock_Mobil" class="col-sm-2 col-form-label ">Stock_Mobil</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="stockmobil" name="Stock_Mobil" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="Status_Tersedia" class="col-sm-2 col-form-label">Status_Tersedia</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="tersedia" name="Status_Tersedia" min="1" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
	</form>



@endsection
