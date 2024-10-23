<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Hasil Pengisian Form Biodata</h2>
                <p>
                    <?php
                    // Cek apakah form telah disubmit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Cek apakah field nama, email, password, jenis kelamin, preferensi, dan pesan diisi
                        if (isset($_POST['nama'], $_POST['email'], $_POST['password'], $_POST['jk'], $_POST['prefer'], $_POST['message'])) {
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $jk = $_POST['jk'];
                            $prefer = $_POST['prefer'];
                            $message = $_POST['message'];

                            // Validasi jika nama atau email kosong
                            if (empty($nama)) {
                                echo "Nama tidak boleh kosong.";
                            } elseif (empty($email)) {
                                echo "Email tidak boleh kosong.";
                            } elseif (empty($password)) {
                                echo "Password tidak boleh kosong.";
                            } elseif (empty($message)) {
                                echo "Pesan tidak boleh kosong.";
                            } else {
                                // Proses lebih lanjut jika semua validasi terpenuhi
                                echo "Data berhasil diisi:<br>";
                                echo "Nama: " . htmlspecialchars($nama) . "<br>";
                                echo "Email: " . htmlspecialchars($email) . "<br>";
                                echo "Password: " . htmlspecialchars($password) . "<br>";
                                echo "Jenis Kelamin: " . htmlspecialchars($jk) . "<br>";
                                echo "Preferensi: " . htmlspecialchars(implode(", ", $prefer)) . "<br>";
                                echo "Pesan: " . htmlspecialchars($message) . "<br>";
                            }
                        } else {
                            echo "Form tidak valid.";
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>