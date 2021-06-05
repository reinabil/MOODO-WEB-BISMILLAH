<!doctype html>
<html lang="en">

<?php
$doa_id = $note[0]['doa_id'] - 1;
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Detail Jurnal</title>
</head>

<body
    style="background-image: linear-gradient(to bottom right, #62D69F, #41A7A5); background-repeat: no-repeat; background-size: 1500px 1500px;">
    <!-- NAVBAR -->
    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <a class="btn text-white shadow-sm"
                style="border-radius:25px; background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);"
                href="/notes">Back</a>
        </div>
    </nav>
    <div class="container mt-2">

        <h3 class="text-center text-white mt-4">Detail Jurnal</h3>

        <div class="container my-4">
            <div class="card shadow" style="border-radius: 15px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($note[0]['title']); ?></h5>
                    <h6 class="card-subtitle mb-2 small text-muted" style="font-weight: 300">
                        <?php echo e($note[0]['updated_at']); ?></h6>
                    <p class="card-text"><?php echo e($note[0]['detail']); ?></p>
                </div>
            </div>
        </div>

        
        <h3 class="text-center text-white mt-4">Doa Terkait</h3>
        <div class="container mt-4">
            <div class="card shadow" style="border-radius: 15px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($doas[$doa_id]['judul']); ?></h5>
                    <h6 class="card-subtitle my-3 text-muted"><?php echo e($doas[$doa_id]['lafaz']); ?></h6>
                    <h6 class="card-subtitle mb-2" style="color: #41A7A5"><?php echo e($doas[$doa_id]['latin']); ?></h6>
                    <p class="card-text"><?php echo e($doas[$doa_id]['arti']); ?></p>
                    <hr class="my-2">
                    <p class="card-text"><?php echo e($doas[$doa_id]['tentang']); ?></p>
                </div>
            </div>
        </div>

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
<?php /**PATH C:\Users\nabil\Videos\MOODO-WEB-BISMILLAH\MOODO-WEB-BISMILLAH\resources\views/note/show.blade.php ENDPATH**/ ?>