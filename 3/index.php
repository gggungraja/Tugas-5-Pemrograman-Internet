<?php
// Array bilangan
$bilangan = [283, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312];

// Mencari bilangan terbesar
$terbesar = max($bilangan);

// Mencari bilangan terkecil
$terkecil = min($bilangan);

// Menghitung rata-rata
$jumlah = array_sum($bilangan);
$jumlah_elemen = count($bilangan);
$rata_rata = $jumlah / $jumlah_elemen;

// Menampilkan hasil
echo "Bilangan terbesar: $terbesar<br>";
echo "Bilangan terkecil: $terkecil<br>";
echo "Rata-rata bilangan: " . number_format($rata_rata, 2) . "<br>";
?>
