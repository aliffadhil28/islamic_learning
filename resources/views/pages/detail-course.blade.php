@extends('layouts.app')
@section('content')
    <div class="bg pt-5" style="background-color: #FAFAFA;">
        <div class="container d-flex justify-content-start mb-3">
            <p class="text-secondary">Fun Learning > Siswa/i Kelas 5 SD > Virtual Reality (VR) >
            <div> Informasi Produk</div>
            </p>
        </div>
        <div class="container bg-white py-4 px-3">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <img src="{{ asset('assets/img/detail-img.png') }}" alt="detail-course-image" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 d-flex flex-column jutify-content-between">
                    <h3 class="fw-bold mb-3">
                        Virtual Reality (VR) - Belajar Dasar-Dasar Bahasa Arab dengan Mudah
                    </h3>
                    <div class="rating-sales d-flex w-75 mb-3 justify-content-between align-items-center">
                        <div class="stars d-flex align-items-baseline">
                            <p class="my-auto me-2">4.9</p>
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}"
                                alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}"
                                alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}"
                                alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}"
                                alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}"
                                alt="star">
                        </div>
                        <div class="vr mx-2 my-auto" style="height: 20px;"></div> <!-- Sesuaikan tinggi sesuai kebutuhan -->
                        <div class="d-flex align-items-center">
                            <p class="mb-0">151 Penilaian</p>
                        </div>
                        <div class="vr mx-2 my-auto" style="height: 20px;"></div> <!-- Sesuaikan tinggi sesuai kebutuhan -->
                        <div class="d-flex align-items-center">
                            <p class="mb-0">309 Terjual</p>
                        </div>
                    </div>
                    <div class="price d-flex mb-3 w-50 justify-content-between">
                        <h3 style="color: #95de64">Rp. 100.000</h3>
                        <h3 class="text-secondary text-decoration-line-through">Rp. 190.000</h3>
                    </div>
                    <div class="qty d-flex mb-3 align-items-center">
                        <p class="me-2 my-auto">Kuantitas</p>
                        <div class="btn-group w-25" role="group" aria-label="Basic example">
                            <button id="btn-min" type="button" class="btn btn-light" onclick="updateQty(-1)"
                                style="width: 32px;">-</button>
                            <input class="form-control bg-light border-0" type="number" name="qty" id="qty"
                                value="1" style="-moz-appearance: textfield; appearance: none; width: 60px">
                            <button id="btn-max" type="button" class="btn btn-light" onclick="updateQty(1)"
                                style="width: 32px;">+</button>
                        </div>
                    </div>
                    <div class="checkout d-flex">
                        <a href="/transaksi" class="w-100 me-2 btn btn-success border border-0" style="background-color:#95de64">
                            Beli Sekarang
                        </a>
                        <a href="" class="w-100 btn btn-white border border-1">
                            <i class="fa-solid fa-cart-shopping" style="color: #050505;"></i>
                            Masukkan Keranjang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        // Fungsi untuk menambah atau mengurangi nilai input
        function updateQty(value) {
            var inputQty = document.getElementById('qty');
            var currentValue = parseInt(inputQty.value, 10) || 0; // Menggunakan parseInt untuk mendapatkan nilai angka

            // Menghindari nilai yang kurang dari 0
            if (currentValue + value >= 0) {
                inputQty.value = currentValue + value;
            }
        }
    </script>
@endsection
