<?php
  include "config.php";
  mysql_select_db('skatra_bis');
  $harga = $_POST['harga'];
  $gambar = $_POST['gambar'];
  $konten = $_POST['konten'];
  $perusahaan = $_POST['perusahaan'];
  $tujuan = $_POST['tujuan'];
  $tujuandurasi = $_POST['tujuan_durasi'];
  $jenis_bis = $_POST['jenis'];
  $sql = "INSERT INTO tujuan (harga, gambar, konten, tujuan_durasi, jenis_bis, perusahaan, tujuan) VALUES('$harga', '$gambar', '$konten', '$tujuandurasi', '$jenis_bis', '$perusahaan', '$tujuan')";
  $masuk = mysql_query($sql);
  if (!$masuk) {
    echo "Gagal Menginput!";
  }
  else {
    header('location: ../index.php');
  }
 ?>
