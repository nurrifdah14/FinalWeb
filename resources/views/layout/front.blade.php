<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('front-title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{asset("frontend/css/styles.css")}} rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Tiketta</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-5 mb-lg-0">
                            <li class="nav-item "><a class="nav-link active" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="#anggota">Anggota</a></li>
                            <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
                            <li class="nav btn-dark btn-lg px-4 me-sm-3"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('Front-content')

        </main>
        <!-- Footer-->
        <footer class="bg-success py-4 mt-auto" id="footer">
            <div class="container px-5">

                <div class="row align-items-center justify-content-center flex-column flex-sm-row py-5">
                    <div class="col-auto"><div class="small m-0 text-white"> &copy; Kelompok 1-Tiketta</div></div>
                </div>

            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src={{ ("js/scripts.js") }}></script>
    </body>
</html>
