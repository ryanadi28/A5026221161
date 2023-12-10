@extends('master2')

@section('Title','Data Pegawai')

@section('konten')


	<h3>Data Mobili</h3>

	<a href="/mobil/tambahh" class="btn btn-primary"> + Tambah Merk Mobil</a>


	<br/>
    <p>Cari Merk Mobil :</p>
	<form action="/mobil/carii" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Mobil . ." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode_Mobil</th>
			<th>Merk_Mobil</th>
			<th>Stock_Mobil</th>
			<th>Status_Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($mobil as $m)
		<tr>
			<td>{{ $m->kodemobil }}</td>
			<td>{{ $m->merkmobil }}</td>
			<td>{{ $m->stockmobil }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>

				<a href="/mobil/vieww/{{ $m->kodemobil }}" class="btn btn-success">View</a>
                |
				<a href="/mobil/editt/{{ $m->kodemobil }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mobil/hapuss/{{ $m->kodemobil }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $mobil->links() }}
    @endsection
