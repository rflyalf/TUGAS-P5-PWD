<?php
if (isset($_POST['pilih'])) {
    $pilih = $_POST['pilih'];

    switch ($pilih) {
        case '1':
            echo "Sistem Informasi";
            break;
        case '2':
            echo "Teknik Informatika";
            break;
        default:
            echo "Tidak ada pilihan prodi";
            break;
    }
}
?>

<!DOCTYPE html>
<html>

<body>
    <form method="post">
        <label for="pilih">Pilih Program Studi:</label>
        <input type="number" name="prodi" id="pilih" min=1 max=5 required>
        <button type="submit">Kirim</button><br>
    </form>
</body>

</html>