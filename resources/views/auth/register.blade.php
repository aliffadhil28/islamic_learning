<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
        * {
            font-family: 'Roboto';
        }
    </style>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-white border border-bottom-1 px-5 sticky-top">
        <div class="container-fluid mx-auto px-5 pt-1">
            <a class="navbar-brand " href="/"><img src="{{ asset('assets/img/logo_brand.png') }}"
                    alt="logo brand"></a>
            <a href="{{ route('login') }}" class="btn btn-success border-0 px-3"
                style="background-color: #95de64; width : 100px">Masuk</a>
        </div>
    </nav>

    <div class="container my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pt-5 pe-md-4">
                    <h1>Mulai Daftar</h1>
                    <p class="text-secondary mb-4 mt-2">Buat akun untuk melanjutkan!</p>
                    <form action="{{ url('/register') }}" method="post">

                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="text" name="fullname" id="fullname"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" name="username" id="username"
                                placeholder="Nama Panggilan">
                        </div>
                        <div class="mb-3">
                            <select name='category'class="form-select text-secodanry"
                                aria-label="Default select example">
                                <option selected>Pilih Siswa/i atau Guru</option>
                                <option value="Siswa">Siswa</option>
                                <option value="Siswi">Siswi</option>
                                <option value="Guru">Guru</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="email" name="email" id="email"
                                placeholder="Alamat Email">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="password" name="password" id="password"
                                placeholder="Masukkan Password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success border-0 w-100"
                                style="background-color:#95de64">Daftar</button>
                        </div>
                    </form>
                    <div class="d-flex">
                        <hr class="flex-grow-1">
                        <p class="text-secondary mx-4 pt-1">ATAU</p>
                        <hr class="flex-grow-1">
                    </div>
                    <div class="d-flex flex-column flex-md-row w-100 mb-4">
                        <a href="{{ route('google.login') }}" class="btn btn-light w-100 mb-2 mb-md-0 me-md-2"><img
                                class="me-3" src="{{ asset('assets/img/logo_google.png') }}"
                                alt="logo Google">Google</a>
                        <a href="{{ route('facebook.login') }}" class="btn btn-light w-100"><img class="me-3"
                                src="{{ asset('assets/img/logo_facebook.png') }}" alt="logo Facebook">Facebook</a>
                    </div>
                    <div class="">
                        Sudah Punya Akun ? <a href="{{ route('login') }}" style="color: #95de64">Masuk</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('assets/img/gambar_login.png') }}" alt="Gambar Login">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
