<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Moodo Website</title>

    <link rel="icon" href="moodo logo.png" type="image/icon type">
</head>

<body id="page-top">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <img src="moodo logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                Moodo
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item js-scroll-trigger">
                        <a class="nav-link active" aria-current="page" href="#jurnal">Jurnal</a>
                    </li>
                    <li class="nav-item js-scroll-trigger">
                        <a class="nav-link" href="#saran">Saran</a>
                    </li>
                    <li class="nav-item js-scroll-trigger">
                        <a class="nav-link" href="#profil">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- JUMBOTRON -->
    <div class="bg-light p-5 rounded-lg m-0" id="jumbotron">
        <div class="container">
            <h1 class="display-4">Start Your Day with Moodo</h1>
            <p class="lead">Doa for Your Daily Mood</p>
            <hr class="my-4">
            <p>Let's make your own journal</p>

            {{-- ANCHOR START jangan dihapus --}}
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a class="btn btn-primary btn-lg" href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 underline">Jadi ini namanya tombol yang kalau tombol ini ditakan
                            akan mengarah ke halaman jurnal (kalai dia udah login sebelumnua) atau mengarah ke halaman login
                            (kalau dia belom punya akun)</a>
                    @else
                        <a class="btn btn-primary btn-lg" href="{{ route('dashboard') }}"
                            class="text-sm text-gray-700 underline">Jadi ini namanya tombol yang kalau tombol ini ditakan
                            akan mengarah ke halaman jurnal (kalai dia udah login sebelumnua) atau mengarah ke halaman login
                            (kalau dia belom punya akun)</a>

                        @if (Route::has('register'))
                            {{-- <a class="btn btn-primary btn-lg" href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 underline">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif

            {{-- END jangan dihapus --}}
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
