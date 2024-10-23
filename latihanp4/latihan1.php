
<?php

$usia = 21;
echo '<h1> Perkenalan Diri </h1>';
echo 'Halo, Nama saya adalah Rafly <br>';
echo 'Saya sedang belajar bahasa pemrogramman PHP';
echo '<br>';
echo 'di Laboratorium Komputer B';
echo '<br>';
echo "usia saya adalah: $usia <br>";
var_dump($usia);
echo "<hr> <br>";

#mendefinisikan variabel
$nilaiMatematika = 7.5;
$nilaiBahasaInggris = 8.5;
$nilaiBahasaIndo = 9.0;

//menghitung nilai nilai rata rata
$rerata = ($nilaiBahasaIndo + $nilaiBahasaInggris + $nilaiMatematika) / 3;

//menampilkan data
echo "Nilai Matematika: {$nilaiMatematika} <br>";
echo "Nilai Bahasa Inggris: $nilaiBahasaInggris<br>";
echo "Nilai Indo:" . $nilaiBahasaIndo . "<br>";
echo "Nilai Rata-Rata: $rerata";

echo "<hr> <br>";
$usia = $usia + 10; //operator aritmatika
echo "$usia <br>"; //45

$usia += 10; // operator penugasan
echo "$usia <br>"; //55

$usia++; //increment
echo "$usia <br>";
$usia--; //decrement
echo "$usia <br>";
?>