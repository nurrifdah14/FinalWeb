@extends('layout.admin')
@section('title')
    Daftar-tiket
@endsection
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pesanan Tiket</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
                
                @error('nama')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            <div class="mb-3">
            <select class="form-control @error('golongan') is-invalid @enderror"" aria-label="Default select example" name="golongan">
                <option selected>Golongan</option>
                <option value="Golongan I">Golongan I</option>
                <option value="Golongan II">Golongan II</option>
                <option value="Golongan III">Golongan III</option>
                <option value="Golongan IV">Golongan IV</option>
                <option value="Golongan V">Golongan V</option>
                <option value="Golongan VI">Golongan VI</option>
                <option value="Golongan VII">Golongan VII</option>
                <option value="Golongan VIII">Golongan VIII</option>
                <option value="Golongan IX">Golongan IX</option>
            </select>
                @error('golongan')
                    <div class="alert alert-danger">
                            {{$message}}
                    </div>   
                @enderror
            </div>
            <div class="mb-3">
                <label for="">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan Nomor Induk Kependudukan" name="nik">
                
                @error('nik')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat Lengkap" name="alamat">
                @error('alamat')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            <div class="mb-3">
                <label for="">Harga</label>
                <input type="double" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga" name="harga">
                @error('harga')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            <div class="mb-3">
                <label for="">Waktu Transaksi</label>
                <input type="date" class=" form-control @error('waktu') is-invalid @enderror" id="waktu" placeholder="Masukkan Waktu Transaksi" name="waktu">
                @error('waktu')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            <div class="mb-3">
                <label for="">Status Transaksi</label>
                <input type="text" class=" form-control @error('status') is-invalid @enderror" id="waktu" placeholder="Masukkan Status Transaksi" name="status">
                
                @error('status')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
<!-- /.container-fluid -->
@endsection