
<?php
// Cek apakah form telah disubmit ~
if (isset($_POST['submit'])) {
    // Cek apakah field nama dan email diisi
    if (isset($_POST['nama']) && isset($_POST['email'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        // Validasi jika nama atau email kosong
        if (empty($nama)) {
            echo "Nama tidak boleh kosong.";
        } elseif (empty($email)) {
            echo "Email tidak boleh kosong.";
        } else {
            // Proses lebih lanjut jika semua validasi terpenuhi
            echo "Data berhasil diisi: <br>";
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
        }
    } else {
        echo "Form tidak valid.";
    }
}
?>