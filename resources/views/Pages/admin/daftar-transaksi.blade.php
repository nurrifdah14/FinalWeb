@extends('layout.admin')
@section('title')
    Daftar-transaksi
@endsection
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-success">Tabel Data Tiket</h4>
    </div>
    <a href="{{ url('tambah-transaksi') }}"><button type="button" class="btn btn-success mt-2 mb-0">Tambah Data</button></a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Golongan</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Harga</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tb_transaksi as $tb_transaksi)
                    <tr>
                      <td>{{ $tb_transaksi->nama }}</td>
                      <td>{{ $tb_transaksi->golongan }}</td>
                      <td>{{ $tb_transaksi->nik }}</td>
                      <td>{{ $tb_transaksi->alamat }}</td>
                      <td>{{ $tb_transaksi->harga }}</td>
                      <td>{{ $tb_transaksi->waktu }}</td>
                      <td>{{ $tb_transaksi->status }}</td>
                      <td>
                        <a href="{{ route('edit-transaksi', $tb_transaksi->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="{{ route('hapus-transaksi', $tb_transaksi->id) }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection