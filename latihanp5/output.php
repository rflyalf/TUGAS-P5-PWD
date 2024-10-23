<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran - Perpustakaan LiBi</title>
    <style>
        td {
            padding: 5px;
        }

        td:first-child {
            text-align: left;
            font-weight: bold;
        }

        hr {
            border: none;
            border-top: 2px solid black;
        }

        marquee {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Menangkap data yang diinput oleh pengguna
        $nama = htmlspecialchars($_POST['nama']);
        $tempatlahir = htmlspecialchars($_POST['tempatlahir']);
        $tanggallahir = htmlspecialchars($_POST['tanggallahir']);
        $bulanlahir = htmlspecialchars($_POST['bulanlahir']);
        $tahunlahir = htmlspecialchars($_POST['tahunlahir']);
        $jk = htmlspecialchars($_POST['jk']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $telp = htmlspecialchars($_POST['telp']);

        // Menampilkan hasil input dalam format yang diinginkan
        echo "<div class='container'>";
        echo "<center>";
        echo "<h1>PERPUSTAKAAN \"LiBi\"</h1>";
        echo "<h3>Pendaftaran Anggota Secara Online</h3>";
        echo "<h5>Jl. Banteng, Jakarta Pusat</h5>";
        echo "<hr>";
        echo "<h3>BUKTI PENDAFTARAN</h3>";
        echo "</center>";

        echo "<table>";
        echo "<tr><td>Tanggal Cetak :</td><td>" . date("D - d/M/Y") . "</td></tr>";
        echo "<tr><td>Nama Lengkap :</td><td>$nama</td></tr>";
        echo "<tr><td>TTL :</td><td>$tempatlahir - $tanggallahir/$bulanlahir/$tahunlahir</td></tr>";
        echo "<tr><td>Jenis Kelamin :</td><td>$jk</td></tr>";
        echo "<tr><td>Alamat :</td><td>$alamat</td></tr>";
        echo "<tr><td>No. Telp :</td><td>$telp</td></tr>";
        echo "</table>";

        echo "<div class='back-link'><a href='input.php'>&lt;&lt;&lt; INPUT LAGI</a></div>";
        echo "<hr>";
        echo "<div class='footer'>--- Pendaftaran Anggota Perpustakaan secara Online ---</div>";
        echo "</div>";
    }
    ?>

</body>

</html>