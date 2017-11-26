<?php
  include "config/config.php";
  mysql_select_db('skatra_kapal');
  $harga = $_POST['harga'];
  $gambar = $_POST['gambar'];
  $konten = $_POST['konten'];
  $tujuandurasi = $_POST['tujuandurasi'];
  $jenis_kapal = $_POST['jenis'];
  $sql = "INSERT INTO tujuan (harga, gambar, konten, tujuandurasi, jenis) VALUES('$harga', '$gambar', '$konten', '$tujuandurasi', '$jenis')";
  $masuk = mysql_query($sql);
  if (!$masuk) {
    echo "Gagal Menginput!";
  }
  else {
    header('location: ../index.php');
  }
 ?>
