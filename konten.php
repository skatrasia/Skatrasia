<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Skatrasia | Pesan tiket Bis dan Kapal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style media="screen">
      html { overflow-x: hidden; }
      a{
        color:white;
      }
    </style>
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
  </head>
  <body style="background-color:#1cc5ff;background-repeat:no-repeat;background-size:1300px 600px;">
    <nav id="nav1" class="navbar fixed-top navbar-toggleable-md bg-faded" style="background-color:#1cc5ff;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="../index.php"><img src="../image/Skatrasia2.png" style="margin-left:75px" width="110px"></a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" style="margin-right:75px">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tiket">Tiket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Contact</a>
              </li>
            </ul>
            </div>
          </nav>

    <!-- form pemesanan -->
    <div class="row" style="padding-top:100px">
     <div class="col-md-3">
      </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-block">
              <h5>Balikpapan --> <?php echo $_GET['tujuan']; ?></h5>
            </div>
          </div>
        </div>
      </div>
    <div class="row" style="padding-top:50px">
     <div class="col-md-3">
      </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-block">
              <div class="row">
               <div class="col-md-6">
                <h4><?php echo $data['harga']; ?></h4><hr>
                <b><?php echo $data['tujuan_durasi']; ?></b><br><br>
                <h5 style="padding-top: 20px;">Detail:</h5>
                <p><?php echo $data['konten']; ?></p>
                <p style="margin-top:50px; margin-left:0px; color: grey; font-size:13px">
                </div>
                <div class="col-md-6">
                  <img src="<?php echo $data['gambar']; ?>" width="100%" height="200px">
                  <a href="../hasil.php" onclick="document.getElementById('mymodal').style.display='block';document.getElementById('btnmodal').style.display='none';" class="btn btn-warning" style="margin-top:10px; padding-left:96px;padding-right:96px; border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:0px;border-top-right-radius:0px;"><i class="fa fa-envelope-o" aria-hidden="true"
                    ></i> Beli Tiket</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-3">
    </div>
  </div>
    <!-- tutup -->


    </body>
    </html>
