<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>input data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-md-12" >
      <div class="card col-md-4" style="margin:100px 30%;background-color:rgba(255,255,255,0.5);border-radius:5px;padding:10px;">
        <form class="form" action="masukbis.php" method="post">
          Masukkan Harga :
            <input class="form-control" type="text" name="harga" placeholder="Rp.">
          Masukan Gambar :
            <input class="form-control" type="text" name="gambar" placeholder="Masukan link untuk gambar">
          Masukkan Konten :
            <textarea id="ta" onclick="taa()" class="form-control" name="konten" placeholder="masukan apa yang ingin anda tulis di sini untuk di tampilkan sebagai informasi seputar bis yang anda masukan" ></textarea>
          Masukan Tujuan dan Tanggal Perjalanan :
          <input class="form-control" type="text" name="tujuandurasi" placeholder="dd/mm/yy">
          Masukan Jenis Bis :
          <input class="form-control" type="text" name="jenis" placeholder="Merk Bis Yang akan anda masukan">
          Masukan Nama Perusahaan Anda :
          <input class="form-control" type="text" name="perusahaan" placeholder="Nama Perusahaan" >
          Masukan Tujuan :
          <input class="form-control" type="text" name="tujuan" placeholder="Tujuan Pejalanan Bis Anda">
          <button type="submit" class="btn btn-light" name="button">Kirim</button>
          </form>
      </div>
    </div>

  </body>
</html>
