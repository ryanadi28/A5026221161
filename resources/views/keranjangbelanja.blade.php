
@extends('master2')
@section('Title','Data Pembelian')

@section('konten')

<a href="/keranjangbelanja/beli" class="btn btn-succsess">Beli</a>
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Kode_Barang</th>
			<th>Jumlah_Pembelian</th>
			<th>Harga_Per_item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $kb)
		<tr>
			<td>{{ $kb->ID }}</td>
			<td>{{ $kb->KodeBarang }}</td>
			<td>{{ $kb->Jumlah }}</td>
			<td>{{ $kb->Harga }}</td>

			<td>
                {{ $kb->Harga*$kb->Jumlah }}
			</td>
            <td>
                <a href="/keranjangbelanja/batal/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
            </td>
		</tr>
		@endforeach
	</table>
@endsection
