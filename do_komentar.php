<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$pilihan1 = $_POST['pilihan1'];
$pilihan2 = $_POST['pilihan2'];
$pilihan3 = $_POST['pilihan3'];
$pekerjaan = $_POST['pekerjaan'];
$komentar = $_POST['komentar'];
echo "<b><i><font color=blue>Nama Anda adalah ".$nama."<br>";
echo "<b><i><font color=yellow>Email Anda adalah ".$email."<br>";
echo "<b><i><font color=red>Jurusan yang Anda pilih adalah ".$jurusan."<br>";
echo "<b><i><font color=green>Hobi yang Anda pilih adalah ".$pilihan1.", ".$pilihan2.", ".$pilihan3."<br>";
echo "<b><i><font color=blue>Pekerjaan yang Anda pilih adalah " .$pekerjaan."<br>";
echo $komentar;
?>