@extends('layouts.app')
@section('style')
    <style>
        .background{
            background-color: #FAFAFA;
        }
        .custom-link {
            border-color: #000; /* Warna border default */
            transition: border-color 0.3s ease; /* Efek transisi warna */
        }

        .custom-link.active {
            border-width: 2px!important;
            border-color: #95de64!important; /* Warna border saat aktif */
        }
    </style>
@endsection
@section('content')
<div class="background">
    <div class="container mb-5">
        <h3 class="fw-bold mb-3">
            Pembayaran
        </h3>
        <div class="row">
            <div class="col-12 col-lg-6 bg-white p-4">
                <h5 class="fw-bold mb-3">Produk Pembelajaran</h5>
                <p class="text-secondary mb-3">Augmented Reality (AR) - Apa itu Tata Surya dan Ada Apa Saja di Sana?</p>
                <h5 class="fw-bold mb-3">Deskripsi</h5>
                <p class="text-secondary mb-3">
                    Lorem ipsum dolor sit amet consectetur. Sit nunc tempus sed suspendisse ornare velit etiam. Consectetur sit aliquet nam semper tempus risus adipiscing velit. Accumsan elit morbi a nec in aenean enim et. Sit ullamcorper sed orci scelerisque ultrices ultricies pulvinar sagittis. Habitant odio eleifend et luctus sed ipsum sagittis. Convallis non feugiat enim diam amet tellus id rhoncus tristique. Aliquam sit iaculis orci ultricies in. Aenean convallis eget morbi sed nisi habitasse aliquet adipiscing justo. In sodales in eu quis quis elementum aliquet molestie. Tortor nunc aliquam pharetra semper leo lacus. Eget lectus donec fringilla facilisis.
                </p>
                <h5 class="fw-bold mb-3">Total Pembayaran</h5>
                <div class="price d-flex mb-3 w-100">
                    <h3 style="color: #95de64">Rp. 100.000</h3>
                    <h3 class="ms-3 text-secondary text-decoration-line-through">Rp. 190.000</h3>
                </div>
                <h5 class="fw-bold mb-3">Pilih Metode Pembayaran</h5>
                <div class="d-flex flex-wrap justify-content-between mb-3">
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/gopay.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/shopee.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/dana.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/ovo.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/bca.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/mandiri.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/bni.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                    <a href="#" class="custom-link bg-white border border-1 rounded-2 d-flex px-3 mb-3" style="width: 126.5px"><img style="object-fit: contain; width: 50px; height:34px" src="{{asset('assets/img/bri.png')}}" alt="gopay" class="img-fluid mx-auto"></a>
                </div>
                <button type="button" class="btn btn-success border-0 rounded w-100" style="background-color:#95de64;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Beli Sekarang
                </button>
            </div>
            <div class=" ms-3 col-12 col-lg-5">
                <img src="{{asset('assets/img/detail-img.png')}}" alt="checkout-img" class="img-fluid d-blok">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body container d-flex flex-column">
            <img src="{{asset('assets/img/modal-check.png')}}" alt="modal-check" class="img-fluid d-blok mx-auto mb-3">
            <h3 class="fw-bold mb-3 text-center">Pembayaran Berhasil</h3>
            <p class="text-secondary mb-3 text-center">Terima kasih telah melakukan pembayaran. Untuk mengakses produk pembelajaran Anda, silahkan klik tombol download.</p>
            <button type="button" class="btn btn-success border-0 rounded w-100" style="background-color:#95de64;">
                Download
            </button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const links = document.querySelectorAll(".custom-link");

      links.forEach(function (link) {
        link.addEventListener("click", function (event) {
          event.preventDefault();

          // Hapus kelas 'active' dari semua elemen
          links.forEach(function (resetLink) {
            resetLink.classList.remove("active");
          });

          // Tambahkan kelas 'active' pada elemen yang diklik
          this.classList.add("active");
        });
      });
    });
</script>
@endsection
