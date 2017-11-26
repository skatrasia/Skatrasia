<?php
$host = "localhost";
$user = "root";
$pass = "";
$connect = mysql_connect($host, $user, $pass);
if (!$connect) {
  echo "Gagal";
}
?>
