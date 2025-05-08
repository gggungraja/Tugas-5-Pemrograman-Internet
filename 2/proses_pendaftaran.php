<?php
// Ambil data dari POST
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$nilai_uan = $_POST['nilai_uan'];

// Tampilkan data
echo "Terimakasih $nama sudah mengisi form pendaftaran.<br><br>";
echo "Nama Lengkap : $nama<br>";
echo "Tempat Lahir : $tempat_lahir<br>";
echo "Tanggal Lahir : $tanggal_lahir<br>";
echo "Alamat Rumah : $alamat<br>";
echo "Jenis Kelamin : $jenis_kelamin<br>";
echo "Asal Sekolah : $asal_sekolah<br>";
echo "Nilai UAN : $nilai_uan<br>";
?>
