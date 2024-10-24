<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota Perpustakaan</title>
    <style>
        table {
            border-spacing: 10px;
        }

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

    <form action="output.php" method="post">
        <center>
            <h1>PERPUSTAKAAN "LiBi"</h1>
            <h3>Pendaftaran Anggota Secara Online</h3>
            <h5><i>Jl. Banteng, Jakarta Pusat</i></h5>
            <hr>
        </center>

        <table>
            <tr>
                <td>Nama Lengkap:</td>
                <td><input type="text" name="nama" maxlength="30" size="35" required></td>
            </tr>
            <tr>
                <td>TTL:</td>
                <td>
                    <input type="text" name="tempatlahir" maxlength="20" size="20" required>
                    <select name="tanggallahir" required>
                        <?php
                        // Loop untuk tanggal
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="bulanlahir" required>
                        <?php
                        // Daftar bulan dalam array
                        $bulan = array(
                            'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );
                        // Loops untuk menampilkan bulan - Sebagai Perulngan Foreach
                        foreach ($bulan as $bln) {
                            echo "<option value='$bln'>$bln</option>";
                        }
                        ?>
                    </select>
                    <input type="text" name="tahunlahir" maxlength="4" value="2009" size="10" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jk" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><textarea name="alamat" rows="3" cols="35" wrap="soft" required></textarea></td>
            </tr>
            <tr>
                <td>No. Telp:</td>
                <td><input type="number" name="telp" maxlength="15" size="15" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset" value="BERSIHKAN">
                    <input type="submit" value="KIRIM">
                </td>
            </tr>
        </table>

    </form>

    <hr>

    <marquee direction="right">
        <i>- - Pendaftaran Anggota Perpustakaan Secara Online -</i>
    </marquee>

</body>

</html>
