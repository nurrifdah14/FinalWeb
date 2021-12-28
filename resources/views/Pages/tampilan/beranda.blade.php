@extends('layout.front')
@section('front-title')
    Home
@endsection
@section('Front-content')
<!-- Header-->
<header class="bg-success py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Mau Kemana Kamu Hari Ini?</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Silahkan pesan tiketmu melalui Tiketta</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-dark btn-lg px-4 me-sm-3" href="#about">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src={{ asset("frontend/images/kapal.png") }} alt="..." /></div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5" id="about">
    <div class="container mb-3">
        <div class="row justify-content-center text-center">
            <div class="col-lg mb-5"><h2 class="fw-bolder mb-0">Tentang Kami</h2></div>
        </div>
        <div class="row justify-content-center text-start">
            <div class="col-lg-10 mb-5 h-100">
                <h2 class="h5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum veniam quo error dolor quisquam, esse aliquid expedita, quidem a illum aspernatur vitae delectus fugiat, laborum voluptatem incidunt hic ducimus. Vel assumenda explicabo enim velit earum. Ad, nostrum, ab officia voluptates voluptas ratione, suscipit quis nisi obcaecati inventore laborum! Soluta, illo? Quas incidunt pariatur impedit hic assumenda et sunt qui, ducimus modi voluptates repellat nam porro est molestiae iusto ut! Hic, nihil, cumque repudiandae odit fugit voluptatem cupiditate tempore porro molestiae labore quia. Aut explicabo dolor provident deserunt, eum sit enim esse perferendis, sed a, voluptate eveniet aspernatur. Quod incidunt quia porro voluptatem alias debitis architecto atque similique suscipit tenetur, minima, error impedit? Ad totam nobis magni dignissimos ea sequi impedit delectus id, distinctio, tempora eum voluptates et? In voluptas voluptatibus, amet enim omnis, deleniti doloremque neque maxime, nostrum nihil eligendi delectus illum nobis suscipit? Alias quod impedit quibusdam ab cupiditate sit molestias aperiam. Quae dignissimos nostrum illo quibusdam, est aperiam minima quisquam, facere eveniet, hic velit aliquid ipsam. Est laudantium quisquam veritatis ullam modi ab minus officiis vero suscipit porro doloribus in neque ducimus aut omnis delectus totam, a ad ut eaque voluptates sapiente dicta? Praesentium quaerat obcaecati odio natus!</h2>
            </div>
        </div>
            </div>
        </div>
    </div>
</section>

<!-- Team members section-->
<section class="py-5 bg-light" id="anggota">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Anggota</h2>
            <p class="lead fw-normal text-muted mb-5">Kelompok 1 Pemrograman Web B</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-5 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="rounded-circle mb-4" src={{ asset("frontend/images/rifdah.jpg") }} width="150px" height="150px" alt="..." />
                    <h5 class="fw-bolder">Nur Rifdah</h5>
                    <div class="fst-italic text-muted">60900119009</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src={{ asset("frontend/images/pute.jpeg") }} alt="..." />
                    <h5 class="fw-bolder">Andi Engku Putri Buana</h5>
                    <div class="fst-italic text-muted">60900119016</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src={{ asset("frontend/images/reza.jpeg") }} alt="..." />
                    <h5 class="fw-bolder">Reza Ardiansyah</h5>
                    <div class="fst-italic text-muted">60900118043</div>
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="rounded-circle mb-4" src={{ asset("frontend/images/ayu.jpeg") }} width="150px" height="150px" alt="..." />
                    <h5 class="fw-bolder">Sri wahyuni</h5>
                    <div class="fst-italic text-muted">60900119015</div>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection