<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil Data
    $npm = $_POST['npm'];
    $nama = strtoupper($_POST['nama']);
    $alamat = strtoupper($_POST['alamat']);
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST['hobi'];

    // Menampilkan Data
    echo "<h2>Data Mahasiswa:</h2>";
    echo "NPM: " . htmlspecialchars($npm) . "<br>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Alamat: " . htmlspecialchars($alamat) . "<br>";
    echo "Tempat Lahir: " . htmlspecialchars($tempat_lahir) . "<br>";
    echo "Tanggal Lahir: " . htmlspecialchars($tanggal_lahir) . "<br>";
    echo "Jenis Kelamin: " . htmlspecialchars($jenis_kelamin) . "<br>";
    echo "Hobi: " . htmlspecialchars($hobi) . "<br>";
}
?>
