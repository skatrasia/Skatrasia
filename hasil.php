<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
  <div class=" card col-md-5"  style="padding:5px; px;margin:auto;margin-top:15px;">
    <h4>Pembayaran</h4>
    <form  class="form col-md-12" style="margin:auto;" action="curl.php" method="POST">
      <input type="text" name="nama" class="form-control kiri" placeholder="Masukan Nama Anda" required>
      <input type="text" name="email" class="form-control kiri" placeholder="Masukan Email anda" required>
      <input type="text" name="tujuandurasi" class="form-control" placeholder="Masukan tujuan anda dan tanggal | Cth: Banjarmasin, 27/01/2001" required>
      <input type="text" name="nomor" class="form-control" value="62" required>
      <button class="btn btn-success kanan" type="submit"><i class="fa fa-cash"></i> Bayar!</button>
    </form>
  </div>


  </body>
</html>
