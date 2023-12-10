@extends('master2')

@section('taitel', 'Data Pegawai')

@section('konten')

<h2 class="text-center">View Mobil</h2>

<br>


@foreach($mobil as $m)
<div class="container p-3 my-3 border">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 d-flex justify-content-center">
        <img src="https://placehold.it/300x400" class="rounded-rectangle img-thumbnail" alt="Pegawai Photo">
      </div>
      <div class="col-md-6">
        <table class="table">
          <tbody>
            <tr>
              <th>Merk_Mobil</th>
              <td>{{ $m->merkmobil }}</td>
            </tr>
            <tr>
              <th>Stock_Mobil</th>
              <td>{{ $m->stockmobil}}</td>
            </tr>
            <tr>
              <th>Status_Tersedia</th>
              <td>{{ $m->tersedia }}</td>
            </tr>
          </tbody>
        </table>
        <a class="btn btn-success"href="/mobil">OK</a>
      </div>
    </div>
  </div>
	@endforeach

@endsection
