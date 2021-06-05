<<<<<<< HEAD
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Moodo Welcome !</title>

    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body id="page-top">
    <!-- JUMBOTRON -->
    <div class="bg-white p-5 rounded-lg m-0" id="jumbotron">
        <div class="container">
            <h1 class="display-1 text-center" style="color:#41a7a5;">Moodo</h1>
            <p class="lead text-center">Doa for Your Daily Mood</p>
            <hr class="my-4" style="width:25%;margin: auto;">

            <h5 class="text-center" style="color:#1f5150;">Tulis jurnal harianmu bersama Moodo</h5>

            {{-- ANCHOR START jangan dihapus --}}
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block text-center">
                    @auth
                        <a class="btn text-white shadow" style="border-radius: 25px; padding: 10px 25px 10px 25px;
                                                    background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);"
                            href="{{ route('notes.index') }}" class="text-sm text-gray-700 underline">Yuk Mulai</a>
                    @else
                        <a class="btn text-white shadow" style="border-radius: 25px; padding: 10px 25px 10px 25px; 
                                                    background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);"
                            href="{{ route('notes.index') }}" class="text-sm text-gray-700 underline">Yuk Mulai</a>

                        @if (Route::has('register'))
                            {{-- <a class="btn text-white shadow" style="border-radius: 25px; padding: 10px 25px 10px 25px; 
                             background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);" href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 underline">Daftar</a> --}}
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
=======
>>>>>>> 682ec22fc57a80011b216c1f928d67c42d11a861
=======
>>>>>>> 682ec22fc57a80011b216c1f928d67c42d11a861
