@extends('layouts.app')
@section('content')
    <div class="bg pt-5" style="background-color: #FAFAFA;">
        <div class="container d-flex justify-content-start mb-3">
            <p class="text-secondary">Fun Learning > Siswa/i Kelas 5 SD > Virtual Reality (VR) >
            <div> Informasi Produk</div>
            </p>
        </div>
        <div class="container bg-white py-4 px-4 rounded mb-4">
            <div class="row">
                <div class="col-12 col-lg-5 mb-3 mb-lg-0">
                    <img src="{{ asset('assets/img/detail-img.png') }}" alt="detail-course-image" class="img-fluid mx-auto mx-lg-0">
                </div>
                <div class="col-12 col-lg-7">
                    <h3 class="fw-bold mb-3">
                        Virtual Reality (VR) - Belajar Dasar-Dasar Bahasa Arab dengan Mudah
                    </h3>
                    <div class="rating-sales d-flex w-75 mb-3 justify-content-between align-items-center">
                        <div class="stars d-flex align-items-baseline">
                            <p class="my-auto me-2">4.9</p>
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                        </div>
                        <div class="vr mx-2 my-auto" style="height: 20px;"></div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0">151 Penilaian</p>
                        </div>
                        <div class="vr mx-2 my-auto" style="height: 20px;"></div>
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
                            <button id="btn-min" type="button" class="btn btn-light" onclick="updateQty(-1)" style="width: 32px">-</button>
                            <input class="form-control bg-light border-0" type="number" name="qty" value="1" min="0" id="qty" style="-moz-appearance: textfield; appearance: none; width: 60px">
                            <button id="btn-max" type="button" class="btn btn-light" onclick="updateQty(1)" style="width: 32px">+</button>
                        </div>
                    </div>
                    <div class="checkout d-flex flex-column flex-lg-row">
                        <a href="/checkout" class="w-100 me-0 me-lg-2 btn btn-success border border-0"
                            style="background-color:#95de64">
                            Beli Sekarang
                        </a>
                        <a href="" class="w-100 btn btn-white border border-1 mt-2 mt-lg-0">
                            <i class="fa-solid fa-cart-shopping" style="color: #050505;"></i>
                            Masukkan Keranjang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 py-4 px-4 mb-4 rounded bg-white">
            <h4 class="fw-bold mb-3">Deskripsi</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur. Sit nunc tempus sed suspendisse ornare velit etiam. Consectetur sit aliquet nam semper tempus risus adipiscing velit. Accumsan elit morbi a nec in aenean enim et. Sit ullamcorper sed orci scelerisque ultrices ultricies pulvinar sagittis. Habitant odio eleifend et luctus sed ipsum sagittis. Convallis non feugiat enim diam amet tellus id rhoncus tristique. Aliquam sit iaculis orci ultricies in. Aenean convallis eget morbi sed nisi habitasse aliquet adipiscing justo. In sodales in eu quis quis elementum aliquet molestie. Tortor nunc aliquam pharetra semper leo lacus. Eget lectus donec fringilla facilisis.
            </p>
        </div>
        <div class="comment-rating container bg-white py-4 px-4 mb-4">
            <h4 class="fw-bold mb-3">Penilaian Produk</h4>
            <div class="d-flex rating border rounded-3 px-3 py-4 w-100 justify-content-between mb-3" style="border-color: #95de64!important;">
                <div class="py-auto total me-4 my-auto">
                    <div class="total  d-flex align-items-end">
                        <h5 class="fw-bold me-1 mb-0" style="color: #95de64;">4.9</h5>
                        <p class="mb-0 w-100" style="color: #95de64; white-space: nowrap;">dari 5</p>
                    </div>
                    <div class="stars d-flex align-items-baseline">
                        <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                        <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                        <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                        <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                        <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                    </div>
                </div>
                <div class="rating d-flex flex-wrap ms-4">
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1" style="border-color: #95de64!important; color: #95de64;">Semua</a>
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1">5 Bintang (144)</a>
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1">4 Bintang (7)</a>
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1">3 Bintang (1)</a>
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1">2 Bintang (0)</a>
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1">1 Bintang (0)</a>
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1">Dengan komentar (70)</a>
                    <a href="#" class="border link-unstyled mb-3 px-4 rounded mx-2 py-1">Dengan foto (0)</a>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="d-flex mb-3">
                    <img class="border me-3" src="https://api.dicebear.com/7.x/avataaars/svg?backgroundType=gradientLinear,solid" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover;">
                    <div class="d-flex flex-column">
                        <a href="#" class="link-unstyled mb-2">Acicumil</a>
                        <div class="stars d-flex align-items-baseline mb-2">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star-grey.png') }}" alt="star">
                        </div>
                        <p class="text-secondary mb-3">24-11-2023 12:11</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Sit nunc tempus sed suspendisse ornare velit etiam. Consectetur sit aliquet nam semper tempus risus adipiscing velit. Accumsan elit morbi a nec in aenean enim et. Sit ullamcorper sed orci scelerisque ultrices ultricies pulvinar sagittis. Habitant odio eleifend et luctus sed ipsum sagittis. Convallis non feugiat enim diam amet tellus id rhoncus tristique. Aliquam sit iaculis orci ultricies in. Aenean convallis eget morbi sed nisi habitasse aliquet adipiscing justo. In sodales in eu quis quis elementum aliquet molestie. Tortor nunc aliquam pharetra semper leo lacus. Eget lectus donec fringilla facilisis.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <img class="border me-3" src="https://api.dicebear.com/7.x/avataaars/svg?backgroundType=gradientLinear,solid" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover;">
                    <div class="d-flex flex-column">
                        <a href="#" class="link-unstyled mb-2">Ganta Alamsyah</a>
                        <div class="stars d-flex align-items-baseline mb-2">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                        </div>
                        <p class="text-secondary mb-3">24-11-2023 12:11</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Sit nunc tempus sed suspendisse ornare velit etiam. Consectetur sit aliquet nam semper tempus risus adipiscing velit. Accumsan elit morbi a nec in aenean enim et. Sit ullamcorper sed orci scelerisque ultrices ultricies pulvinar sagittis. Habitant odio eleifend et luctus sed ipsum sagittis. Convallis non feugiat enim diam amet tellus id rhoncus tristique. Aliquam sit iaculis orci ultricies in. Aenean convallis eget morbi sed nisi habitasse aliquet adipiscing justo. In sodales in eu quis quis elementum aliquet molestie. Tortor nunc aliquam pharetra semper leo lacus. Eget lectus donec fringilla facilisis.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <img class="border me-3" src="https://api.dicebear.com/7.x/avataaars/svg?backgroundType=gradientLinear,solid" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover;">
                    <div class="d-flex flex-column">
                        <a href="#" class="link-unstyled mb-2">Canti Cahril Cantika</a>
                        <div class="stars d-flex align-items-baseline mb-2">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star-grey.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star-grey.png') }}" alt="star">
                        </div>
                        <p class="text-secondary mb-3">24-11-2023 12:11</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Sit nunc tempus sed suspendisse ornare velit etiam. Consectetur sit aliquet nam semper tempus risus adipiscing velit. Accumsan elit morbi a nec in aenean enim et. Sit ullamcorper sed orci scelerisque ultrices ultricies pulvinar sagittis. Habitant odio eleifend et luctus sed ipsum sagittis. Convallis non feugiat enim diam amet tellus id rhoncus tristique. Aliquam sit iaculis orci ultricies in. Aenean convallis eget morbi sed nisi habitasse aliquet adipiscing justo. In sodales in eu quis quis elementum aliquet molestie. Tortor nunc aliquam pharetra semper leo lacus. Eget lectus donec fringilla facilisis.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <img class="border me-3" src="https://api.dicebear.com/7.x/avataaars/svg?backgroundType=gradientLinear,solid" alt="" width="40px" height="40px" style="border-radius: 50%; object-fit: cover;">
                    <div class="d-flex flex-column">
                        <a href="#" class="link-unstyled mb-2">Ibu Aang Hartini</a>
                        <div class="stars d-flex align-items-baseline mb-2">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                            <img width="18px" class="img-fluid my-auto" src="{{ asset('assets/img/star.png') }}" alt="star">
                        </div>
                        <p class="text-secondary mb-3">24-11-2023 12:11</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Sit nunc tempus sed suspendisse ornare velit etiam. Consectetur sit aliquet nam semper tempus risus adipiscing velit. Accumsan elit morbi a nec in aenean enim et. Sit ullamcorper sed orci scelerisque ultrices ultricies pulvinar sagittis. Habitant odio eleifend et luctus sed ipsum sagittis. Convallis non feugiat enim diam amet tellus id rhoncus tristique. Aliquam sit iaculis orci ultricies in. Aenean convallis eget morbi sed nisi habitasse aliquet adipiscing justo. In sodales in eu quis quis elementum aliquet molestie. Tortor nunc aliquam pharetra semper leo lacus. Eget lectus donec fringilla facilisis.</p>
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
