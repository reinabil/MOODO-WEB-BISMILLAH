{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Task
        </h2>
    </x-slot> --}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Tambah Jurnal</title>
</head>

<body style="background-image: linear-gradient(to bottom right, #62D69F, #41A7A5); background-repeat: no-repeat; background-size: 1500px 1500px;">

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/notes">
                        @csrf
                        <div class="input-group mb-3">
                            <label class="form-label" for="title">Title <span class="text-red-500">*</span></label>
                            <input type="text" class="input-group-text" name="title" id="title" value="" required>
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Detail <span class="text-red-500">*</span></label>
                            <textarea name="detail" class="border-2 border-gray-500">

                            </textarea>
                        </div>

                        <div class="flex p-1">

                            <button role="submit" class="btn btn-primary" required>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('detail');

    </script> --}}

    {{-- BOOTSTRAP --}}
    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <a class="btn text-white shadow-sm" style="border-radius:25px; background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);" href="/notes">Back</a>
            
        </div>
    </nav>

    <div class="container m-10">
        <form method="POST" action="/notes">
            @csrf
            {{-- Mood Input --}}
            <label class="form-label text-white mr-4" style="font-weight: bold;" for="mood">Mood:</label>
            <div class="form-check-inline mt-4 mb-2 text-white">
                <input class="form-check-input" type="radio" name="mood_id" id="mood_id1" value="1">
                <label class="form-check-label" for="mood_id1">
                    Sedih
                </label>
            </div>
            <div class="form-check-inline text-white">
                <input class="form-check-input" type="radio" name="mood_id" id="mood_id2" value="2">
                <label class="form-check-label" for="mood_id2">
                    Biasa aja
                </label>
            </div>
            <div class="form-check-inline text-white">
                <input class="form-check-input" type="radio" name="mood_id" id="mood_id3" value="3">
                <label class="form-check-label" for="mood_id3">
                    Senang
                </label>
            </div>
            <!-- Title input -->
            <div class="form-outline mb-2">
                <label class="form-label text-white" style="font-weight: bold;" for="title">Judul</label>
                <input type="text" id="title" name="title" class="form-control" />
                
            </div>
            
            <!-- Detail input -->
            <div class="form-outline mb-2">
                <label class="form-label text-white" style="font-weight: bold;" for="detail">Detail</label>
                <textarea class="form-control" name="detail" id="detail" rows="4"></textarea>
                
            </div>

            {{-- Doa Input --}}
            <div class="container">
                <label class="form-label text-white" style="font-weight: bold;" for="doa">Doa terkait</label>
                <select class="form-select" style="color: #41A7A5" aria-label="Default select example">
                    <option selected>Pilih doa</option>
                    {{-- @foreach ($notes as $note)

                    @endforeach --}}
                </select>
            </div>
            <br>
            <!-- Submit button -->
            <div class="pull-right">
                <button type="submit" class="btn btn-light btn-block mb-4 shadow-sm" style="border-radius: 25px; padding: 10px 25px 10px 25px; font-weight: 600; color: #41A7A5">Send</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('.selectpicker').bootstrapSelect();
        });

    </script>
</body>

</html>
{{-- </x-app-layout> --}}
