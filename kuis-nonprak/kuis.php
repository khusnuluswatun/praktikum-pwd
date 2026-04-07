<?php include "koneksi.php";
$query = $conn->query("select * from soal");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: darkcyan;">
        <div class="container-fluid">
            <img src="logo.png" width="70">
            <h1>Learnify</h1>
            <span>: Belajar Cerdas, Kuasai Dunia!</span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="d-flex align-items-center justify-content-center" style="min-height: 85vh;background-color:lightblue;">
        <div class="card my-3" style="width: 90%;background-color:#dcffff">
            <div class="card-body">
                <h2 class="text-center pt-3">Kuis</h2>
                <form action="hasil.php" method="post">
                    <div class="px-5 py-2">
                        <?php
                        while ($data = $query->fetch_object()) { ?>
                            <div class="p1 mt-3">
                                <?= $data->id . " " . $data->pertanyaan ?>
                                <br>
                                &emsp;<input type="radio" name="pertanyaan<?= $data->id ?>" value="a" required> a. <?= $data->opsi_a ?> <br>
                                &emsp;<input type="radio" name="pertanyaan<?= $data->id ?>" value="b"> b. <?= $data->opsi_b ?> <br>
                                &emsp;<input type="radio" name="pertanyaan<?= $data->id ?>" value="c"> c. <?= $data->opsi_c ?> <br>
                                &emsp;<input type="radio" name="pertanyaan<?= $data->id ?>" value="d"> d. <?= $data->opsi_d ?> <br>

                            </div>
                        <?php } ?>
                    </div>
                    <div class="m-3">
                        <button type="submit" class="btn btn-info" style="float:right">Kirim Jawaban</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>

</html>