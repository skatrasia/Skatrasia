<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Skatrasia | Pesan tiket Bis dan Kapal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <style media="screen">
    html { overflow-x: hidden; }
a{
  color:white;
}
    </style>
  </head>
  <body style="background-image: url('bgatas.png');background-repeat:no-repeat;background-size:1300px 600px;">
    <nav id="nav1" class="navbar fixed-top navbar-toggleable-md bg-faded" style="background-color:#1cc5ff;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="image/Skatrasia2.png" style="margin-left:75px" width="110px"></a>

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

    <center style="padding-top:100px">
      <div class="mySlides">
        <img src="image/Promo.png" style="width:50%" id="tiket">
      </div>
    </center>


      <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");

          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}

          slides[slideIndex-1].style.display = "block";

          setTimeout(showSlides, 2000);
      }
      </script>

<!-- form pemesanan -->

<!-- tutup -->
<br><br>
<div class="container col-md-8"style="margin:auto;">
  <ul class="nav nav-tabs">
    <li class="nav-item col-md-6" style="margin-left:-15px;margin-right:30px;">
      <a ondblclick="buka(event,'bus')" class="nav-link active"><center><img src="image/bis.png" width="40px" height="50px"><br>Bis</center></a>
    </li>
    <li class="nav-item col-md-6">
      <a onclick="buka(event,'kapal')" class="nav-link notactive" ><center><img src="image/kapal.png" width="50px" height="50px"><br>Kapal</center></a>
    </li>
  </ul>
</div>

<!-- isi tab -->

<!-- yang ini bus -->
<div id="bus" class="col-md-8 tabcontent bayang" style="margin:auto;margin-top:5px;">
  <div class="col-md-12" style=";border:1px solid #ddd;margin-top:-5px;border-top:0;">
    <!-- form pemesanan -->
    <br>
  <div class="row">
    <div class="col-md-6">
      <form action="config/cari_bis.php">
        <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Asal</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" value="Balikpapan" name="asal" disabled>
        </div>
        </div>
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="durasi" placeholder="dd/mm/yyyy" maxlength="10" required>
      </div>
      </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Tujuan</label>
        <div class="col-sm-9">
          <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="inlineFormCustomSelectPref" name="tujuan">
            <option value="Banjarmasin" selected>Banjarmasin</option>
            <option value="Samarinda">Samarinda</option>
            <option value="Palangkaraya">Palangkaraya</option>
            <option value="Pontianak">Pontianak</option>
            <option value="Tanjung Selor">Tanjung Selor</option>
          </select><br><br>
          <button type="submit" style="margin-bottom:10px;" class="btn btn-primary"><i class="fa fa-search"></i> Cari!</button><br>
        </div>
        </div>
      </form>
  </div>
</div>
</div>

</div>




<!-- yang ini kapal -->
<div id="kapal" class="col-md-8 tabcontent bayang" style="margin:auto;margin-top:5px;display:none;">
  <div class="col-md-12" style=";border:1px solid #ddd;margin-top:-5px;border-top:0;">
    <!-- form pemesanan -->
    <br>
  <div class="row">
    <div class="col-md-6">
      <form action="config/cari_kapal.php">
        <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Asal</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" value="Balikpapan" name="asal" disabled>
        </div>
        </div>
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="durasi" placeholder="dd/mm/yyyy" maxlength="10" required>
      </div>
      </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Tujuan</label>
        <div class="col-sm-9">
          <select class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="inlineFormCustomSelectPref" name="tujuan">
            <option value="Banjarmasin" selected>Banjarmasin</option>
            <option value="Samarinda">Samarinda</option>
            <option value="Tarakan">Tarakan</option>
            <option value="Palangkaraya">Palangkaraya</option>
            <option value="Pontianak">Pontianak</option>
            <option value="Tanjung Selor">Tanjung Selor</option>
            <option value="Makassar">Makassar</option>
            <option value="Manado">Manado</option>
            <option value="Surabaya">Surabaya</option>
          </select><br><br>
          <button type="submit" style="margin-bottom:10px;" class="btn btn-primary"><i class="fa fa-search"></i> Cari!</button><br>
        </div>
        </div>
      </form>
  </div>
</div>
<!-- tutup -->
  </div>

</div>

<br><br>


<!-- gantinya tips -->
<div style="padding-left:150px;padding-right:150px;">
  <h1 style="padding-left:33.5%;">Best Destination</h1>
  <hr>
<center>
<div class="row" style="padding:50px;">
  <div class="card " style="width:300px;">
  <img class="card-img-top" style="height:200px;" src="http://3.bp.blogspot.com/-paI3UVj2q_A/U5vAgH2nh4I/AAAAAAAABKY/oVQpmuVwR6w/s1600/danau+kayu.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Danau Ubur Ubur</h4>
    <p class="card-text">Danau Kakaban terletak di Pulau Kakaban, Kalimantan Timur. Letaknya tidak jauh dari Pulau Derawan.  </p>
    <a style="position:relative;margin-bottom:0;" href="https://www.tripadvisor.co.id/Attraction_Review-g3346467-d3247659-Reviews-Sting_less_Jellyfish_Lake-Pulau_Kakaban_East_Kalimantan_Kalimantan.html" class="btn btn-primary">Read more</a>
  </div>
</div>
<div class="card" style="width:300px;margin:0 7.015px;">
<img class="card-img-top" style="height:200px;" src="http://ngulon.com/wp-content/uploads/2016/10/Surga-Wisata-Pulau-Derawan-Kalimantan-Timur.jpg" alt="Card image">
<div class="card-body">
  <h4 class="card-title">Pulau Derawan</h4>
  <p class="card-text">Pulau Derawan terletak di Kepulauan Derawan, Kecamatan Derawan, Kabupaten Berau, Kalimantan Timur.</p>
  <a style="margin-bottom:0;" href="https://www.tripadvisor.co.id/Attraction_Review-g1076278-d3200100-Reviews-Derawan_Archipelago-Derawan_Islands_East_Kalimantan_Kalimantan.html" class="btn btn-primary">Read more</a><br><br>
</div>
</div>
<div class="card" style="width:300px;">
<img class="card-img-top" style="height:200px;" src="https://plongsite.files.wordpress.com/2017/03/20170303_111706.jpg?w=768" alt="Card image">
<div class="card-body">
  <h4 class="card-title">Masjid Islamic Center</h4>
  <p class="card-text">Islamic Center yang membawakan konsep masjid nabawi yang terletak di kota Balikpapan.</p>
  <a style="margin-bottom:0;" href="https://www.tripadvisor.co.id/Attraction_Review-g317102-d6619768-Reviews-Islamic_Center_Samarinda_Mosque-Samarinda_East_Kalimantan_Kalimantan.html" class="btn btn-primary">Read more</a>
</div>
</div>
</div>
<div class="row" style="padding:50px;">
  <div class="card " style="width:300px;">
  <img class="card-img-top" style="height:200px;" src="http://www.getborneo.com/wp-content/uploads/2015/04/jembatan-canopy-bridge-bukit-bangkirai-kalimantan-timur.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Bukit Bangkirai</h4>
    <p class="card-text">Bukit Bangkirai adalah kawasan wisata alam yang dikelola PT. Inhutani I Unit I Balikpapan. Kawasan wisata ini terletak di Kecamatan Samboja, Kabupaten Kutai Kartanegara, Kalimantan Timur.</p>
    <a style="margin-bottom:0;" href="https://www.tripadvisor.co.id/Attraction_Review-g317100-d6912361-Reviews-Bangkirai_Hill_Nature_Tourism-Balikpapan_East_Kalimantan_Kalimantan.html" class="btn btn-primary">Read more</a>
  </div>
</div>
<div class="card" style="width:300px;margin:0 5px;">
<img class="card-img-top" style="height:200px;" src="http://buskaltim.com/wp-content/uploads/2016/09/img_9842.jpg" alt="Card image">
<div class="card-body">
  <h4 class="card-title">Pantai Banua Patra</h4>
  <p class="card-text">okasinya sangat strategis di pusat kegiatan hiburan warga Balikpapan. Dekat dengan lapangan Merdeka dan Pelabuhan Semayang. Mudah diakses dari mana saja.
Lokasi ex.</p>
<a style="margin-bottom:0;" href="https://www.tripadvisor.co.id/Attraction_Review-g317100-d6601179-Reviews-Benua_Patra_Beach-Balikpapan_East_Kalimantan_Kalimantan.html" class="btn btn-primary">Read more</a><br><br>
</div>
</div>
<div class="card" style="width:300px;">
<img class="card-img-top" style="height:200px;" src="http://bolehtanya.com/wp-content/uploads/job-manager-uploads/main_image/2016/04/tnk.jpg" alt="Card image">
<div class="card-body">
  <h4 class="card-title">Taman Nasional Kutai</h4>
  <p class="card-text">Taman Nasional Kutai atau biasa disingkat TNK adalah sebuah taman nasional yang berada di wilayah Kabupaten Kutai Timur dan sebagian kecil wilayah Kota Bontang.</p>
  <a style="margin-bottom:0;" href="https://www.tripadvisor.co.id/Attraction_Review-g3207846-d4469791-Reviews-Kutai_National_Parrk-Bontang_East_Kalimantan_Kalimantan.html" class="btn btn-primary">Read more</a>
</div>
</div>
</div>
</center>
</div>
      <!-- bg bawah -->
      <div style="
      background:url('image/bg2.png');
      background-repeat:no-repeat;
      padding-top: 60%;
      background-size: 100%;
      background-position: center;
      background-attachment: relative;
      position: relative;
      background-repeat: no-repeat;
      ">
      </div>


<script type="text/javascript">
function buka(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    var a;


    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("nav-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";


    //scrollasdfasdfasdfasdf
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
  if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
    document.getElementById("nav1").style.backgroundColor="#1cc5ff";
  } else {
    document.getElementById("nav1").style.backgroundColor="#1cc5ff";
  }
  }
}
</script>
<div style="width:100%;background-color:white; padding-bottom:50px;" id="kontak">
  <center> <h2>@Skatrasia</h2> <i class="fa fa-envelope-o fa-3x" aria-hidden="true">Skatrasia@gmail.com</i>  </center>
</div>
<div style="width:100%;background-color:white;">
  <center>&copy;2017 Copyright</center><br><br>
</div>
  </body>
</html>
