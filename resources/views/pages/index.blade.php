@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
@endsection
@section('content')
    <div class="container my-5">
        <div>
            <img class="img-fluid mx-auto d-block" src="{{asset('assets/img/home_img.png')}}" alt="#">
            <div class="px-5 py-4 bg-dark rounded-3">
                <div class="d-flex flex-column flex-lg-row justify-content-around">
                    <div class="d-flex my-3 my-lg-auto mx-auto m-lg-0 align-items-center">
                        <p class="text-secondary my-auto me-3">Pilih Kelas :</p>
                        <div class="dropdown-center">
                            <button id="dropdownKelas" class="btn btn-dark border d-flex align-items-center justify-content-between dropdown-toggle border border-1 border-secondary text-secondary" style="width: 260px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Siswa/i Kelas 5-6 SD
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><a class="dropdown-item kelas-item" href="#">Kelas 5 SD</a></li>
                                <li><a class="dropdown-item kelas-item" href="#">Kelas 6 SD</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex my-3 my-lg-auto mx-auto m-lg-0 align-items-center my-3 ms-auto">
                        <p class="text-secondary my-auto me-3">Kategori :</p>
                        <div class="dropdown-center">
                            <button id="dropdownKategori" class="btn btn-dark d-flex align-items-center justify-content-between dropdown-toggle border border-1 border-secondary text-secondary" style="width: 260px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produk Pembelajaran
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><a class="dropdown-item kategori-item" href="#">Augmented Reality (AR)</a></li>
                                <li><a class="dropdown-item kategori-item" href="#">Virtual Reality (VR)</a></li>
                                <li><a class="dropdown-item kategori-item" href="#">Game</a></li>
                                <li><a class="dropdown-item kategori-item" href="#">Animasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fyp py-3">
        <h1 class="container my-4">Hanya Untukmu</h1>
        <div class="cards mt-4 mb-4 d-flex flex-wrap justify-content-center">
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Yuk Mengenal Lebih Dekat dengan Planet Bumi!</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 6 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Augmented Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Belajar Dasar-Dasar Bahasa Arab dengan Mudah</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 5 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Bahasa Arab</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Virtual Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Seperti Apa Bentuk Otak dan Bagaimana Bentuknya</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 6 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Augmented Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Apa itu tata surya dan Ada Apa Saja di Sana?</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 5 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Virtual Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="produk">
        <h1 class="container my-4">Produk Terbaru</h1>
        <div class="cards mt-4 mb-4 d-flex flex-wrap justify-content-center">
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Yuk Mengenal Lebih Dekat dengan Planet Bumi!</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 6 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Augmented Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Belajar Dasar-Dasar Bahasa Arab dengan Mudah</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 5 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Bahasa Arab</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Virtual Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Seperti Apa Bentuk Otak dan Bagaimana Bentuknya</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 6 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Augmented Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Apa itu tata surya dan Ada Apa Saja di Sana?</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 5 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Virtual Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Yuk Mengenal Lebih Dekat dengan Planet Bumi!</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 6 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Augmented Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Belajar Dasar-Dasar Bahasa Arab dengan Mudah</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 5 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Bahasa Arab</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Virtual Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Seperti Apa Bentuk Otak dan Bagaimana Bentuknya</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 6 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Augmented Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
            <div class="card shadow border-0 m-2" style="width: 18rem;">
                <img height="162px" style="object-fit: cover" src="{{ asset('assets/img/course_planet.png') }}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Apa itu tata surya dan Ada Apa Saja di Sana?</h5>
                    <div id="card-course" class="d-flex align-items-center justify-content-between">
                        <p class="card-text-small text-secondary my-auto">Kelas 5 SD </p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">IPA</p>
                        <div class="dot my-auto"></div>
                        <p class="card-text-small text-secondary my-auto">Virtual Reality</p>
                    </div>
                    <a href="/detail" class="btn btn-outline-success mt-auto border-1 w-100" style="border-color: #95de64">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
