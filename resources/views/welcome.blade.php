<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/53fe2192d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <title>Islamic FunLearning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white border border-bottom-1 px-3 sticky-top w-100">
        <div class="container-fluid mx-auto px-3 pt-1">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo_brand.png') }}"
                    alt="logo brand"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark active" aria-current="page" href="#about_us">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Pilih Kelas</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Kelas 5 SD</a></li>
                            <li><a class="dropdown-item" href="#">Kelas 6 SD</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#daftar-member">Daftar Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#contact-us">Hubungi Kami</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <a href="{{ route('login') }}" class="btn btn-success border-0 px-3"
                        style="background-color: #95de64;">Masuk</a>
                    <a href="{{ route('register') }}" class="btn border border-1 ms-2 px-3">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-12 col-md-5">
                    <h1 class="text-break mb-4">
                        Bangun Suasana Belajar Jadi <p class="d-inline" style="color : #95de64;">Menyenangkan</p>,
                        Nikmati Belajar Sambil Bermain dengan Produk Pembelajaran dari FunLearning!
                    </h1>
                    <p class="text-secondary w-75 mb-4">
                        FunLearning hadir untuk siswa/i kelas 5 dan 6 SD. Dapatkan proses pembelajaran yang interaktif
                        dengan sentuhan digital dan teknologi terkini hanya di FunLearning!
                    </p>
                    <div class="d-flex w-75 mb-4">
                        <a href="{{ route('login') }}" class="btn btn-success border-0 px-3"
                            style="background-color: #95de64;"><i class="fa-solid fa-magnifying-glass me-2"
                                style="color: #ffffff;"></i>Cari Produk</a>
                        <a href="{{ route('register') }}" class="btn border border-1 ms-2 px-3">Daftar
                            Member</a>
                    </div>
                    <div class="testimoni d-flex flex-column flex-lg-row align-items-center">
                        <div class="img-testimoni d-flex align-items-center">
                            <div class="profil">
                                <img class="border border-2 border-light" src="{{ asset('assets/img/soft-red.png') }}"
                                    alt="testimoni_img">
                            </div>
                            <div class="profil">
                                <img class="border border-2 border-light" src="{{ asset('assets/img/soft-orange.png') }}"
                                    alt="testimoni_img">
                            </div>
                            <div class="profil">
                                <img class="border border-2 border-light" src="{{ asset('assets/img/lilac.png') }}"
                                    alt="testimoni_img">
                            </div>
                            <div class="profil">
                                <img class="border border-2 border-light" src="{{ asset('assets/img/sky-blue.png') }}"
                                    alt="testimoni_img">
                            </div>
                            <div class="profil">
                                <img class="border border-2 border-light" src="{{ asset('assets/img/soft-green.png') }}"
                                    alt="testimoni_img">
                            </div>
                        </div>
                        <div class="me-auto mt-3">
                            <div class="stars d-flex align-items-baseline mb-0">
                                <img width="18px" class="img-fluid" src="{{ asset('assets/img/star.png') }}"
                                    alt="star">
                                <img width="18px" class="img-fluid" src="{{ asset('assets/img/star.png') }}"
                                    alt="star">
                                <img width="18px" class="img-fluid" src="{{ asset('assets/img/star.png') }}"
                                    alt="star">
                                <img width="18px" class="img-fluid" src="{{ asset('assets/img/star.png') }}"
                                    alt="star">
                                <img width="18px" class="img-fluid" src="{{ asset('assets/img/star.png') }}"
                                    alt="star">
                                <p>5.0</p>
                            </div>
                            100++ Testimoni
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 ms-auto">
                    <img class="img-fluid" src="{{ asset('assets/img/gambar_login.png') }}" alt="Gambar Login">
                </div>
            </div>

        </div>
    </div>
    {{-- About Us --}}
    <div class="about-us mt-4 text-center" id="about_us">
        <div class="header mx-auto">
            <h5 class="text-center" style="color:#95de64">TENTANG KAMI</h5>
            <h1 class="my-4">Sentuhan Digital & Teknologi Terkini</h1>
            <p class="text-secondary w-75 mx-auto">
                Produk pembelajaran FunLearning merupakan produk digital dengan menerapkan teknologi terkini
                seperti Augmented Reality (AR), Virtual Reality (AR), Game dan Animasi
            </p>
        </div>
        <div class="cards mt-4 mb-4 d-flex flex-wrap justify-content-center">
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.jpg') }}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-start">Yuk Mengenal Lebih Dekat dengan Planet Bumi!</h5>
                    <p class="my-2 card-text-small text-secondary text-truncate py-auto">Kelas 5 SD ◦ IPA ◦ Augmented Reality</p>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_otak.jpg') }}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-start">Seperti Apa Bentuk Otak dan Apa Saja Bagiannya?</h5>
                    <p class="my-2 card-text-small text-secondary text-truncate py-auto">Kelas 5 SD ◦ IPA ◦ Augmented Reality</p>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_tata_surya.jpg') }}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-start">Apa itu Tata Surya dan Ada Apa Saja di Sana?</h5>
                    <p class="my-2 card-text-small text-secondary text-truncate py-auto">Kelas 5 SD ◦ IPA ◦ Virtual Reality</p>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-start">Belajar Dasar-Dasar Bahasa Arab dengan Mudah</h5>
                    <p class="my-2 card-text-small text-secondary text-truncate py-auto">Kelas 6 SD ◦ Bahasa Arab ◦ Virtual Reality</p>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-outline-secondary w-25 mt-4">Lihat Produk Lainnya</a>
    </div>

    {{-- Daftar Member --}}
    <div class="row mt-5">
        <div class="col-12 col-lg-5">
            <img src="{{ asset('assets/img/3d_glasses.png') }}" alt="#" class="img-fluid">
        </div>
        <div class="col-12 col-lg-7 my-4">
            <h5 id="daftar-member" class="text-success text-uppercase text-lg-start text-center mb-4">
                Daftar Member
            </h5>
            <h1 class="text-center text-lg-start my-4">Apa Saja Keuntungan FunMember?</h1>
            <ul id="list-benefit" class="list-unstyled">
                <li class="d-flex mb-3">
                    <img class="benefit me-3" src="{{ asset('assets/img/user.png') }}" alt="user"
                        width="40px">
                    <div class="text">
                        <h6>Special Event Khusus FunMember</h6>
                        <p class="text-secondary">Undangan ekslusif untuk setiap special event baik secara online
                            maupun offline</p>
                    </div>
                </li>
                <li class="d-flex mb-3">
                    <img class="benefit me-3" src="{{ asset('assets/img/agreement.png') }}" alt="user"
                        width="40px">
                    <div class="text">
                        <h6>Dapatkan potongan harga sebesar 10%</h6>
                        <p class="text-secondary">Potongan harga sebesar 10% dapat digunakan setiap bulan untuk satu
                            transaksi </p>
                    </div>
                </li>
                <li class="d-flex mb-3">
                    <img class="benefit me-3" src="{{ asset('assets/img/hourglass.png') }}" alt="user"
                        width="40px">
                    <div class="text">
                        <h6>Informasi produk pembelajaran terbaru</h6>
                        <p class="text-secondary">Nikmati penawaran produk pembelajaran terbaru FunLearning sebelum
                            launching</p>
                    </div>
                </li>
            </ul>
            <a href="/" class="btn btn-success border-0 px-3 mt-4 w-50 mx-lg-0 mx-auto"
                style="background-color: #95de64; display: block;">Ayo Gabung Sekarang!</a>
        </div>
    </div>


    {{-- Contact Us --}}

    <div class="container">
        <div class="contact-us p-5 row rounded-4">
            <div class="content mx-auto col-12 col-md-6">
                <h5 id="contact-us">
                    <p class="text-uppercase text-center" style="color: #95de64;">Hubungi Kami</p>
                </h5>
                <h1 class="text-center text-white">Informasi Terbaru</h1>
                <p class="text-center text-white mb-5">Dapatkan informasi eksklusif produk pembelajaran terbaru
                    FunLearning dan raih kesempatan mendapatkan bonus</p>
                <form action="" method="post">
                    <div class="wrapper">
                        <input class="form-control py-3 w-100" type="email" name="email"id="email"
                            placeholder="Masukkan email kamu di sini...">
                        <button id="subscribe" class="btn text-white px-3" style="background-color:#95de64"
                            type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-7">
                <img class="mb-3" src="{{ asset('assets/img/logo_brand.png') }}" alt="FunLearning Logo">
                <p class="text-secondary w-75">
                    Produk pembelajaran FunLearning merupakan produk digital untuk siswa/i dan guru kelas 5 dan 6 SD,
                    dengan menerapkan teknologi terkini seperti Augmented Reality (AR), Virtual Reality (AR), Game dan
                    Animasi.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Pilih Kelas</h5>
                        <ul class="ps-0" style="list-style-type: none;">
                            <li><a href="#" class="link-unstyled">Kelas 5 SD</a></li>
                            <li><a href="#" class="link-unstyled">Kelas 6 SD</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Produk Pembelajaran</h5>
                        <ul class="ps-0" style="list-style-type: none;">
                            <li><a href="#" class="link-unstyled">Augmented Reality (AR)</a></li>
                            <li><a href="#" class="link-unstyled">Virtual Reality (VR)</a></li>
                            <li><a href="#" class="link-unstyled">Game Edukasi</a></li>
                            <li><a href="#" class="link-unstyled">VIdeo Animasi</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Media Sosial</h5>
                        <ul class="ps-0" style="list-style-type: none;">
                            <li><a href="#" class="link-unstyled">Instagram</a></li>
                            <li><a href="#" class="link-unstyled">Youtube</a></li>
                            <li><a href="#" class="link-unstyled">Tiktok</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-4">
        <div class="d-flex justify-content-between">
            <p>&copy2023 FunLearning Islamic, All Rights Reserved</p>
            <div class="link">
                <a href="/" class="link-unstyled me-2 text-black">Pemberitahuan Privasi</a>
                <a href="/" class="link-unstyled text-black">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var testimoniItems = document.querySelectorAll('.testimoni .profil');

            testimoniItems.forEach(function(item, index) {
                var transformValue = index * -12; // Penyesuaian nilai transform berdasarkan indeks
                item.style.transform = 'translateX(' + transformValue + 'px)';
            });
        });
    </script>
</body>

</html>
