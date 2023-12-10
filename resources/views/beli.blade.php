@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <title>Tambah Data Pegawai</title>

    <table class=" table table-hover">
        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Tambah Data Pegawai</h3>

        <a href='/keranjangbelanja' class="btn btn-secondary"> Kembali</a>

        <form action='/keranjangbelanja' method="post" class="form-horizontal">
            {{ csrf_field() }}
            <tr>

            <tr>
                <div class="form-group row">
                    <td><label for="kodebarang" class="col-xs-3 col-form-label mr-2">Kode Barang</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="KodeBarang" name="Kode_Barang">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td><label for="jumlah" class="col-xs-3 col-form-label mr-2">Jumlah Barang</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="Jumlah" name="Jumlah_Barang">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td> <label for="harga" class="col-xs-3 col-form-label mr-2">Harga Barang</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="Harga" name="Harga_Per_item">
                        </div>
                    </td>
                </div>
            </tr>

            </tr>
            <tr>
                <td><input type="submit" value="Save Data" class="btn btn-success"> <br /></td>
            </tr>

        </form>
    </table>

@endsection
