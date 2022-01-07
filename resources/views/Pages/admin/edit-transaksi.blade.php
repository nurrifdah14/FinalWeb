@extends('layout.admin')
@section('title')
    Edit Transaksi
@endsection
@section('content')
<div class="container-fluid mt-2">
    <h3 style="text-align: center">Edit Data Transaksi</h3>
    <form action="{{ route('update-transaksi', $tb_transaksi->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" id="nama" value="{{ $tb_transaksi->nama }}" name="nama">
        </div>
        <div class="mb-3">
            <label for="">Golongan</label>
            <input type="text" class="form-control" id="golongan" value="{{ $tb_transaksi->golongan}}" name="golongan">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" class="form-control" id="alamat" value="{{ $tb_transaksi->alamat }}" name="alamat">
        </div>
        <div class="mb-3">
            <label for="">Harga Tiket</label>
            <input type="double" class="form-control" id="harga" value="{{ $tb_transaksi->harga }}" name="harga">
        </div>
        <div class="mb-3">
            <label for="">Waktu Transaksi</label>
            <input type="date" class="form-control" id="waktu" value="{{ $tb_transaksi->waktu }}" name="waktu">
        </div>
        <div class="mb-3">
            <label for="">Status Transaksi</label>
            <input type="text" class="form-control" id="waktu" value="{{ $tb_transaksi->status }}" name="status">
        </div>
        
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
