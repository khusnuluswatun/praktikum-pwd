<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter I</title>
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
    <div class="container d-flex align-items-center justify-content-center" style="width:100vw;">
        <div class="bag-chapter p-4 m-5">
            <h1>Chapter I: Hari pertama di akademi arantohr</h1>
            <img src="assets/academy-hall.webp" class="img-hall mt-2">

            <div class="mt-4 cerita">
                <img src="assets/mentor.webp" class="img-mentor ms-3 mb-2">
                <p>
                    Sinar mentari menyinari halaman depan Akademi Arantohr, tempat para calon kesatria dan penyihir terbaik Eldarion berkumpul untuk hari pertama mereka. Bangunan tinggi menjulang dengan pilar-pilar batu berukir simbol kuno, dan suara lonceng tua menggema menandakan dimulainya pelajaran.
                    <br><br>
                    Seorang mentor bertubuh tegap muncul dari balik bayang-bayang aula, jubahnya berkibar oleh hembusan angin sejuk. Matanya tajam, penuh pengetahuan dan misteri yang hanya dimiliki oleh para pengajar legendaris. "Selamat datang," katanya dengan suara berat namun berwibawa. "Sebelum kalian memegang pedang, mengayunkan tongkat, atau menorehkan jejak di peta dunia, kalian harus membuktikan kejernihan pikiran kalian."
                    <br><br>
                    Para murid, termasuk dirimu, saling berpandangan dengan campuran rasa penasaran dan gugup. Meja-meja batu mulai muncul dari tanah, seolah disulap oleh kekuatan sihir yang tidak kasat mata. Di hadapan setiap murid muncul gulungan kertas, tinta, dan pena bulu gagak.
                    <br><br>
                    "Tugas pertama kalian sederhana," lanjut sang mentor. "Namun jangan tertipu oleh kesederhanaannya. Tampilkan kepada kami pola angka berpola cermin dari angka yang kalian pilih. Keseimbangan dan simetri adalah kunci."
                    <br><br>
                    Beberapa murid sudah mulai menulis, sementara yang lain masih berpikir keras. Kini giliranmu. Angka apa yang akan kau pilih? Tunjukkan bahwa pikiranmu tajam, bahwa kau layak menjadi bagian dari sejarah Arantohr.
                </p>
            </div>

            <form action="result.php" method="get">
                <div class="d-flex flex-column gap-2 mx-auto align-items-center" style="max-width:210px">
                    <label class="text-center">Masukkan angka pilihanmu: </label>
                    <input type="number" class="form-control text-center" name="angka" required min="1" max="10000">
                    <button type="submit" class="btn btn-custom" style="width:78%">TAMPILKAN POLA</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>