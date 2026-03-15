<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <style>
        #bag-landing {
            display: flex;
            min-height: 100vh;
            padding: 2rem 0;
            justify-content: center;
            align-items: center;
            /* background: linear-gradient(#213448, #0a263c); */
            background: linear-gradient(rgb(203, 229, 252), #dbdddf);

        }

        img {
            opacity: 0;
            transform: translateX(0);
            animation: fadeIn 2s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: fadeIn(0);
            }
        }
        .custom-tbl, .custom-tbl tr, .custom-tbl td{
            /* background-color: aliceblue;
            border: none; */
            padding: 4px 0;
            vertical-align: top;
        }
    </style>
</head>
<?php 
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $kabupaten = $_GET['kabupaten'];
    $kecamatan = $_GET['kecamatan'];
    $kode_pos = $_GET['kode_pos'];
    $no_telp = $_GET['no_telp'];
    $produk = $_GET['produk'];
    $jumlah = $_GET['jumlah'];
    $pembayaran = $_GET['pembayaran'];
    $pengiriman = $_GET['pengiriman'] ?? [];
?>
<body>
    <div id="bag-landing">
        <div class="rounded-4 shadow w-50 p-5 text-center" style="background-color: aliceblue;">
            <h2>Pesanan Berhasil!</h2>
            <img src="assets/check.png" width="80" class="mb-4 mt-2">
            <!-- <p style="font-size: 15px;">Terima kasih telah melakukan pembelian. <br>
                Pesanan Anda sedang kami proses dan akan segera dikirim. <br>
                Silakan cek email atau nomor telepon Anda untuk informasi selanjutnya.</p> -->
            <h5> Detail Pesanan</h5>
            <table class="custom-tbl" style="text-align: left;">
                <tr>
                    <td style="width: 175px;">Nama</td>
                    <td style="width: 20px;">:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $alamat ?></td>
                </tr>
                <tr>
                    <td>Detail</td>
                    <td>:</td>
                    <td><?= $kecamatan.", ".$kabupaten.", ".$kode_pos ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>:</td>
                    <td><?= $no_telp ?></td>
                </tr>
                <tr>
                    <td>Produk yang dibeli</td>
                    <td>:</td>
                    <td><?= $produk ?></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><?= $jumlah ?></td>
                </tr>
                <tr>
                    <td>Metode pembayaran</td>
                    <td>:</td>
                    <td><?= $pembayaran ?></td>
                </tr>
                <tr>
                    <td>Tambahan pengiriman</td>
                    <td>:</td>
                    <td>
                        <?php 
                            if (empty($pengiriman)) {
                                echo "<p>-</p>";
                            }else{
                                echo '<ul type="circle" style="padding-left:1rem">';
                                foreach ($pengiriman as $p) {
                                    echo "<li>$p</li>";
                                }
                                echo "</ul>";
                            }
                        ?>
                    </td>
                </tr>
            </table>
            <a href="index.php" class="btn btn-secondary mt-4 w-50">Kembali ke halaman utama</a>
        </div>
    </div>
</body>

</html>