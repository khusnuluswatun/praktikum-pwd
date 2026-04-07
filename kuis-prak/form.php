<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Special+Elite&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&display=swap">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="assets/agencyLogo.png" type="image/x-icon">

    <style>
        body {
            /* background-color: black; */
            background: linear-gradient(rgba(0, 0, 0, 0.91), rgba(0, 0, 0, 0.88)), url("assets/noirCity.jpg");
            color: white;
            font-size: 10px;
        }

        span {
            color: rgb(186, 186, 27);
            font-size: 11px;
        }
    </style>
</head>

<body>
    <form action="hasil.php" method="POST">

        <div class="section my-2 bag-sc">
            <div class="row justify-content-around">
                <div class="col-2">
                    <a href="index.html"><- KEMBALI</a>
                </div>
                <div class="col-8 text-center">
                    FORMULIR REKTURMEN DUSE SUREAU
                </div>
                <div class="col-2 text-right">
                    REF: DB-REC-001
                </div>
            </div>
        </div>
        <div class="section pt-2 pb-4" id="bag-form">
            <div class="row">
                <div class="col-3 offset-1">
                    <span>// PETUNJUK</span>
                    <p>Isi formulir ini dengan informasi yang akurat. Data palsu akan langsung membuat diskualifikasi, dan kamu <b>tahu</b> kapan sesorang berbohong.</p>
                    <br>
                    <hr>
                    <span>// DIVISI TERSEDIA</span>
                    <div class="mt-2">
                        <span class="text-bg-danger rounded-circle">&emsp;</span> <b>Ironland / Iron Badge</b>
                        <br>
                        <p>Unit Tempur lapangan</p>
                    </div>
                    <div class="mt-2">
                        <span class="text-bg-info rounded-circle">&emsp;</span> <b>Steel Logic / Gold Eye / Gold Case</b>
                        <br>
                        <p>Unit analisis & investigasi</p>
                    </div>
                    <div class="mt-2">
                        <span class="text-bg-secondary rounded-circle">&emsp;</span> <b>Gray Veil / Shadow Wire . Deep Cover / Phantom</b>
                        <br>
                        <p>Unit senyap & penyamaran</p>
                    </div>
                    <br>
                    <hr>
                    <span>//CATATAN</span>
                    <p>Penempatan divisi ditentukan berdasarkan dari kombinasi Latar belakang dan spesialisasi</p>
                </div>
                <div class="col-6 bgbg">
                    <h3 class="khusus">Data Agen Baru</h3>
                    <p>SEMUA KOLOM PERTANDA WAJIB DIISI</p>
                    <hr>
                    <span>1. DATA PRIBADI</span>
                    <div class="mb-3">
                        <label for="">NAMA LENGKAP *</label><br>
                        <input type="text" placeholder="Vakarot" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JENIS KELAMIN *</label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki&emsp;
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </div>
                    <hr>
                    <span>II. PROFIL OPERASI</span>
                    <div class="mb-3">
                        <label for="">LATAR BELAKANG *</label><br>
                        <select name="latar_belakang" required>
                            <option value="" selected disabled>Pilih..</option>
                            <option value="Guttersnipe">Guttersnipe</option>
                            <option value="The Doc">The Doc</option>
                            <option value="Ex-Bull">Ex-Bull</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">SPESIALISASI *</label><br>
                        <select name="spesialisasi" required>
                            <option value="" selected disabled>Pilih..</option>
                            <option value="Tempur">Tempur</option>
                            <option value="Investigasi">Investigasi</option>
                            <option value="Infiltrasi">Infiltrasi</option>
                        </select>
                    </div>
                    <hr>
                    <span>III. KEAHLIAN TAMBAHAN <span>(OPSIONAL)</span></span>
                    <div class="mb-3 text-left">
                        <label for="">KEAHLIAN</label> <br>
                        <input type="checkbox" name="keahlian[]" value="Mengemudi"> Mengemudi <br>
                        <input type="checkbox" name="keahlian[]" value="Forensik"> Forensik <br>
                        <input type="checkbox" name="keahlian[]" value="Hacking"> Hacking <br>
                        <input type="checkbox" name="keahlian[]" value="Menembak"> Menembak <br>
                        <input type="checkbox" name="keahlian[]" value="Menyamar"> Menyamar <br>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-9">
                            <i>Dengan mengirim formulir ini,kamu setuju bahwa keberasaanmu sebagai agen Sunk Pureau tidak akan pernah diakui secara resmi.</i>
                        </div>
                        <div class="col-3 justify-content-end">
                            <button type="submit" class="btn btn-sm btn-warning">KIRIM DATA ></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>