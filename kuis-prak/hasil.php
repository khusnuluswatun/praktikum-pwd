<?php
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $latarB = $_POST['latar_belakang'];
    $spesialisasi = $_POST['spesialisasi'];
    $keahlian = $_POST['keahlian'] ?? [];

    $jk2 = $jk == "Perempuan" ? 'female' : 'male';
    $lb = $latarB == "Guttersnipe" ? 'Street' : ($latarB == "The Doc" ? "Academic" : "Cop");
    $fotoChar = $jk2 . $lb . ".jpg";
    $latarBelakang = $latarB == "Guttersnipe" ? 'Anak Jalanan' : ($latarB == "The Doc" ? "Akademisi" : "Mantan Polisi");

    $divisi = $motto = "";
    if ($latarB == "Guttersnipe" && $spesialisasi == "Tempur") {
        $divisi = "Ironclad";
        $motto = "We kick the doors down";
    } elseif ($latarB == "Guttersnipe" && $spesialisasi == "Investigasi") {
        $divisi = "Grey Veil";
        $motto = "The city whispers if you know how to listen";
    } elseif ($latarB == "Guttersnipe" && $spesialisasi == "Infiltrasi") {
        $divisi = "Shadow Wire";
        $motto = "In without a trace. Out without a name";
    } elseif ($latarB == "The Doc" && $spesialisasi == "Tempur") {
        $divisi = "Stell Logic";
        $motto = "Calculated moves, flawless execution.";
    } elseif ($latarB == "The Doc" && $spesialisasi == "Investigasi") {
        $divisi = "Cold Eye";
        $motto = "Numbers don't lie. People do";
    } elseif ($latarB == "The Doc" && $spesialisasi == "Infiltrasi") {
        $divisi = "Phantom";
        $motto = "We are whoever they need us to be";
    } elseif ($latarB == "Ex-Bull" && $spesialisasi == "Tempur") {
        $divisi = "Iron Badge";
        $motto = "The law has limits. We don't";
    } elseif ($latarB == "Ex-Bull" && $spesialisasi == "Investigasi") {
        $divisi = "Cold Case";
        $motto = "Nothing stays buried forever";
    } elseif ($latarB == "Ex-Bull" && $spesialisasi == "Infiltrasi") {
        $divisi = "Deep Cover";
        $motto = "Patience is the deadliest weapon";
    }
} else {
    echo "Mohon urut dari menu awal";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Special+Elite&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&display=swap">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="assets/agencyLogo.png" type="image/x-icon">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.91), rgba(0, 0, 0, 0.88)), url("assets/noirCity.jpg");
            color: white;
            font-size: 10px;
            padding: 5px 0 15px;
        }

        span {
            color: yellow;
            font-size: 11px;
        }
    </style>
</head>

<body>
    <div class="section my-2 bag-sc">
        <div class="row justify-content-around">
            <div class="col-2">
                <a href="form.php"><- KEMBALI</a>
            </div>
            <div class="col-8 text-center">
                FORMULIR REKTURMEN DUSE SUREAU
            </div>
            <div class="col-2 text-right">
                REF: DB-REC-001
            </div>
        </div>
    </div>
    <div class="section pt-3" id="bag-form">
        <div class="row">
            <div class="col-3 offset-1">
                <div class="atas-img"><?= $divisi ?></div><br>
                <img src="assets/<?= $fotoChar ?>" width="140">
                <br>
                <h4 class="khusus mt-2"><?= $nama ?></h4>
                <span class="oren">UNIT EKSEKUSI TAKTIS</span>
                <hr class="oren">
                <div class=" row mb-2">
                    <div class="col">JENIS KELAMIN</div>
                    <div class="col"><?= $jk ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col">LATAR BELAKANG</div>
                    <div class="col"><?= $latarBelakang ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col">SPESIALISASI</div>
                    <div class="col"><?= $spesialisasi ?></div>
                </div>
                <div class="row mb-2">
                    <div class="col">KEAHLIAN</div>
                    <div class="col">
                        <?php
                        if ($keahlian) {
                            foreach ($keahlian as $k) {
                                echo "- " . $k . "<br>";
                            }
                        } else {
                            echo "Tidak tercatat";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="row justify-content-between">
                    <div class="col">DUSE BUREAU &emsp; DIVISI <?= $divisi ?></div>
                    <div class="col">BERKAS PERSONAL</div>
                </div>
                <div class="row">
                    <h1><i class="khusus"><?= $nama ?></i></h1>
                    <span style="color:white"><?= $latarBelakang . "  .  " . $spesialisasi . "  .  " . $divisi ?></span>
                </div>
                <hr>
                <i>"<?= $motto ?>"</i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolores maxime, repudiandae saepe nemo fuga, excepturi quasi, sed tempora consectetur corrupti mollitia!</p>

                <hr>
                <span>// CATATAN REKRUTER</span>
                <p>
                    <?= $nama ?> adalah salah satu dari sedikit rekrutan yang berhasil melewati semua tahap selesi tanpa catatan merah. Latar belakang sebagai <i><?= $latarBelakang ?></i>, pernah berseragam di divisi yang kini ia tinggalkan, membentuk Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, enim.
                    <br><br>
                    Seleksi menunjukkan bahwa <?= $nama ?> memiliki keunggulan dalamkonfrontasi langsung yang menempatkannya sebagai kandidat untuk <span class="oren">Divisi <?= $divisi ?></span>.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, minus.
                    <br><br>
                    Keahlian tambahan yang tercatat: <b><?= $keahlian ? implode(', ', $keahlian) : 'Tidak ada' ?></b>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ullam quos neque fugiat necessitatibus voluptas
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga non perferendis illo. Lorem ipsum dolor sit amet consectetur adipisicing.
                </p>

            </div>
        </div>
    </div>
</body>

</html>