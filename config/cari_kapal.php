<?php

  include 'config.php';

  mysql_select_db('skatra_kapal');
  $query = $_GET['tujuan'].",".$_GET['durasi'];
  $minimal = 13;
  if(strlen($query) >= $minimal){
    $query = htmlspecialchars($query);
    $query = mysql_real_escape_string($query);
    $raw_results = mysql_query("SELECT * FROM tujuan WHERE (`tujuan_durasi` LIKE '%".$query."%')") or die(mysql_error());
    if(mysql_num_rows($raw_results) > 0){
      while($data = mysql_fetch_array($raw_results)){
        include '../konten.php';
      }
    }else{
      echo 'Maaf tidak ada perjalanan pada tujuan dan tanggal tersebut';
    }
  }
  else{
      echo "Mohon memasukan input yang benar";
  }
?>
