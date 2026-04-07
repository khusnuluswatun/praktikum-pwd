<?php
if (!isset($_POST['pertanyaan1'])) {
    echo "Mohon buka menu urut dari awal";
    die;
}
include "koneksi.php";
$query = $conn->query("select * from soal");

$hasil = [];
$benar = 0;
while ($data = $query->fetch_object()) {
    if ($_POST['pertanyaan' . $data->id] == $data->jawaban) {
        $check = "Jawaban Anda benar!";
        $benar++;
    } else {
        $a = $data->jawaban;
        $kunci = $a == 'a' ? $data->opsi_a : ($a == 'b' ? $data->opsi_b : ($a == 'c' ? $data->opsi_c : $data->opsi_d));
        $check = "Jawaban Anda salah. Jawaban yang benar: " . $a . ". " . $kunci;
    }
    array_push($hasil, $check);
}

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
                <h2 class="text-center py-2">Hasil Kuis</h2>
                <div class="ps-5">
                    <?php
                    for ($i = 0; $i < count($hasil); $i++) {
                        $color = $hasil[$i] == 'Jawaban Anda benar!' ? 'text-success' : 'text-danger'; ?>
                        <div class="mt-3">
                            <p>Pertanyaan <?= $i + 1 ?>: <span class="<?= $color ?>"><?= $hasil[$i] ?></span></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="skor ps-5 pt-4">
                    <h4>Skor Pengguna: <?= $benar . "/5" ?></h4>
                    <h4>Persentase Nilai: <?= ($benar * 20) . "%" ?></h4>
                </div>

                <div class="m-3">
                    <a href="index.php" class="btn btn-info" style="float:right">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>