<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/53fe2192d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <title>Islamic FunLearning</title>
    @yield('style')
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
                <form class="d-flex mx-auto" action="">
                    <input class="form-control border rounded-start" placeholder="Cari produk pembelajaran"
                        style="width: 400px; border-top-right-radius: 0; border-bottom-right-radius: 0;" type="text"
                        name="course_search" id="course_search">
                    <button type="submit" class="btn btn-success border border-0 rounded-end"
                        style="background-color: #95de64; border-top-left-radius: 0; border-bottom-left-radius: 0;">
                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    </button>
                </form>
                <div class="navbar-nav d-flex align-items-center">
                    <div class="console d-flex me-3">
                        <i class="fa-solid fa-cart-shopping" style="color: #b0b6bf;"></i>
                        <i class="fa-regular fa-bell ms-2" style="color: #b0b6bf;"></i>
                    </div>
                    <div class="vr my-auto" style="height: 28px; border-left: 1px solid #b0b6bf; margin-right: 15px;">
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="my-auto mx-auto">Halo, {{ $user->name }}</p>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/img/user1.jpg') }}" alt="" width="28px"
                                    height="28px" style="border-radius: 50%; object-fit: cover;">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><a class="dropdown-item" href="#">Setting</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- Footer --}}
    <footer class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <img class="mb-3" src="{{ asset('assets/img/logo_brand.png') }}" alt="FunLearning Logo">
                    <p class="text-secondary w-75">
                        Produk pembelajaran FunLearning merupakan produk digital untuk siswa/i dan guru kelas 5 dan 6
                        SD,
                        dengan menerapkan teknologi terkini seperti Augmented Reality (AR), Virtual Reality (AR), Game
                        dan
                        Animasi.
                    </p>
                </div>
                <div class="col-12 col-md-5">
                    <div class="d-flex flex-column flex-lg-row justify-content-between">
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
            <div class="d-flex flex-column flex-lg-row justify-content-between">
                <p>&copy2023 FunLearning Islamic, All Rights Reserved</p>
                <div class="link">
                    <a href="/" class="link-unstyled me-2 text-black">Pemberitahuan Privasi</a>
                    <a href="/" class="link-unstyled text-black">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @yield('script')
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
