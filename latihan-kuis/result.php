<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=MedievalSharp&display=swap">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/cardWizard.webp" type="image/x-icon">
    <style>
        body {
            background-image: url("assets/old-paper.webp");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'MedievalSharp', 'serif';
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
        <div class="bag-result p-5 m-5">
            <h1>Hasil ujian pertamamu</h1>
            <img src="assets/scroll.webp" class="img-scrl mt-2">

            <div class="mt-4">
                <p>Di hadapanmu muncul gulungan sihir kuno. Pola angka yang kau buat terukir perlahan di atasnya: </p>
            </div>
            <div class="d-flex justify-content-center my-3">
                <div class="bag-loop">
                    <?php
                    $num = $_GET['angka'] ?? 0;
                    if ($num > 0 && $num <= 10000) {
                        echo "&ensp;";
                        for ($i = 1; $i <= $num; $i++) {
                            echo $i . "&ensp;";
                        }
                        for ($i = $num - 1; $i > 0; $i--) {
                            echo $i . "&ensp;";
                        }
                    } elseif ($num > 10000) {
                        echo "Yang waras ya :)";
                    } else {
                        echo "Angka tidak valid";
                    }
                    ?>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="question.php" class="btn btn-bkertas">KEMBALI KE KERTAS</a>
            </div>
        </div>
    </div>
</body>

</html>