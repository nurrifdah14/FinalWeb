<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href={{asset("backend/vendor/fontawesome-free/css/all.min.css") }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ asset("backend/css/sb-admin-2.min.css") }} rel="stylesheet">

</head>

<body id="page-top">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Transaksi</h6>
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
                <label for="">Golongan</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="jenis_transaksi" placeholder="Masukkan Jenis Transaksi" name="jenis_transaksi">
                
                @error('jenis_transaksi')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            <div class="mb-3">
                <label for="">Nominal Transaksi</label>
                <input type="double" class="form-control @error('nominal') is-invalid @enderror" id="nominal" placeholder="Masukkan Nominal" name="nominal">
                @error('nominal')
                <div class="alert alert-danger">
                          {{$message}}
                </div>   
               @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<!-- /.container-fluid -->
 <!-- Bootstrap core JavaScript-->
 <script src={{ asset("backend/vendor/jquery/jquery.min.js") }}></script>
 <script src={{ asset("backend/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>

 <!-- Core plugin JavaScript-->
 <script src={{ asset("backend/vendor/jquery-easing/jquery.easing.min.js") }}></script>

 <!-- Custom scripts for all pages-->
 <script src={{ asset("backend/js/sb-admin-2.min.js") }}></script>

 <!-- Page level plugins -->
 <script src={{ asset("backend/vendor/chart.js/Chart.min.js") }}></script>

 <!-- Page level custom scripts -->
 <script src={{ asset("backend/js/demo/chart-area-demo.js") }}></script>
 <script src={{ asset("backend/js/demo/chart-pie-demo.js") }}></script>

</body>

</html>