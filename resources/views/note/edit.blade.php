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

    <title>Edit Jurnal</title>
</head>

<body>

    {{-- BOOTSTRAP --}}
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/notes">Back</a>
        </div>
    </nav>

    <div class="container m-10">
        <form method="POST" action="/notes/{{ $note[0]['note_id'] }}">
            @method('patch')
            @csrf
            <!-- Title input -->
            <div class="form-outline mb-4">
                <input type="text" id="title" name="title" class="form-control" value="{{ $note[0]['title'] }}" />
                <label class="form-label" for="title">Title</label>
            </div>

            <!-- Detail input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" name="detail" id="detail" rows="4"> {{ $note[0]['detail'] }}</textarea>
                <label class="form-label" for="detail">Detail</label>
            </div>

            {{-- Doa Input --}}
            <div class="container">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    {{-- @foreach ($notes as $note)
    
                        @endforeach --}}
                </select>
            </div>

            {{-- Mood Input --}}
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="mood_id" id="mood_id1" value="1">
                <label class="form-check-label" for="mood_id1">
                    Sedih
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="mood_id" id="mood_id2" value="2">
                <label class="form-check-label" for="mood_id2">
                    Biasa aja
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="mood_id" id="mood_id3" value="3">
                <label class="form-check-label" for="mood_id3">
                    Senang
                </label>
            </div>
            <br>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
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
