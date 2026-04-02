<?php
if (isset($_POST['nama'])) {
    $nama = ucwords(strtolower($_POST['nama']));
    $ras = $_POST['ras'];
    $rekomendasi = $_POST['rekomendasi'] ?? [];
    $jk = $_POST['jenis_kelamin'] == 'Perempuan' ? 'female' : 'male';
    $imgMainChar = $jk . $ras . '.webp';
    $kelas = $_POST['kelas'];
    $imgBadge = $kelas == 'Knight' ? ['cardKnight', 'shieldKnight', 'swordKnight'] : ['cardWizard', 'spellbookWizard', 'wandWizard'];
} else {
    echo "Mohon buka menu urut dari awal..";
    die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biography</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=MedievalSharp&display=swap">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/cardWizard.webp" type="image/x-icon">
    <style>
        body {
            background-color: antiquewhite;
            color: rgb(93, 82, 63);
            font-family: 'MedievalSharp';
            text-align: center;
            height: 100vh;
            max-width: 100vw;
        }
    </style>
</head>

<body>
    <div class="row biography">
        <div class="col-4 p-4">
            <table class="d-inline-block">
                <tr>
                    <td>
                        <h2><?= $nama ?></h2>
                    </td>
                </tr>
                <tr>
                    <td><img src="assets/<?= $imgMainChar ?>"></td>
                </tr>
                <tr>
                    <td class="pt-2"><label>Jenis Kelamin: </label><br><?= $_POST['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                    <td class="pt-2"><label>Ras: </label><br><?= $ras ?></td>
                </tr>
                <tr>
                    <td class="pt-2"><label>Kelas: </label><br><?= $kelas ?></td>
                </tr>
                <tr>
                    <td class="pt-2"><label>Rekomendasi:</label></td>
                </tr>
                <tr>
                    <td style="text-align:<?= $rekomendasi ? 'left' : 'center' ?>">
                        <?php if ($rekomendasi) {
                            foreach ($rekomendasi as $r) { ?>
                                <span>- <?= $r ?></span><br>
                        <?php }
                        } else {
                            echo "Pendaftar reguler";
                        } ?>

                    </td>
                </tr>
            </table>
            <div class="d-flex justify-content-center bag-imgb mt-2">
                <?php foreach ($imgBadge as $k) { ?>
                    <img src="assets/<?= $k ?>.webp">
                <?php } ?>
            </div>
            <a class="btn btn-custom position-fixed bottom-0 start-0 m-3" href="form.html">
                Kembali
            </a>
        </div>
        <div class="col-8 p-5 c8bio" style="text-align:left">
            <h1>CHAPTER 1</h1>
            <h5>
                Petualangan Sang Kesatria Dimulai
            </h5><br>
            <p>
                Di tanah Arantohr yang luas dan penuh misteri, <?= $nama ?>, seorang <?= $ras ?> yang penuh tekad, tiba di Gerbang Akademi Aranthor, tempat para calon kesatria terbaik dilatih. Dengan pedang di tangan dan semangat baja, <?= $nama ?> siap menghadapi tantangan yang menanti. Sebagai seorang Kesatria, dia telah bersumpah untuk melindungi yang lemah dan menegakkan keadilan di seluruh penjuru Arantohr.
                <br><br>
                Di hari pertama pelatihan, <?= $nama ?> bertemu dengan mentor legendaris, Sir Aldric, yang dikenal sebagai Kesatria Tanpa Tanding. Di bawah bimbingannya, <?= $nama ?> belajar teknik bertarung yang mematikan dan nilai-nilai kesatria sejati. Namun, ancaman gelap mulai muncul di cakrawala, dan <?= $nama ?> harus membuktikan diri sebagai pahlawan yang dibutuhkan dunia.
            </p>

            <a href="question.php" class="btn btn-custom position-fixed bottom-0 end-0 m-3">
                Chapter I
            </a>
        </div>
    </div>
</body>

</html>