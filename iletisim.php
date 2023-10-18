<html>

<head>
  <title>Bize Ulaşın | Yaprak Bilgi Sistemi </title>
  <?php
  require_once "database.php";

  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.min.css" rel="stylesheet">
 
  <link href="css/edit.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <a class="navbar-brand" href="index.php">&nbsp;&nbsp;Yaprak Bilgi Sistemi</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Anasayfa <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="hakkimizda.php">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="iletisim.php">İletişim</a>
              </li>


            </ul>
          </div>
        </nav>
      </div>
    </div>


    <div class="row">
      <div class="col-md-4">
        <img src="foto/1.jpg" class="rounded float-start" alt="...">
      </div>
      <div class="col-md-4">
        <b>
          <h1 class="baslık">Yaprak Bilgi Sistemi</h1>
          <hr>
        </b>


      </div>
      <div class="col-md-4">
        <img src="foto/01.jpg" class="rounded float-end" alt="...">
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-6">
        <h3 style="text-align:center">Soru, Öneri ve Görüşleriniz</h3><br>
        <div class="col-xs-12 col-md-8" style="margin-left: 15.5%;">



          <div class="form-group" style="margin-bottom: 10px; overflow: hidden;">
            <form action="gönderiliyor.php" method="POST">

              <input type="text" class="form-control" autocomplete="off" name="ad" placeholder="Adınız Soyadınız" required><br>

              <input type="email" class="form-control" autocomplete="off" name="mail" placeholder="Email adresiniz" required><br>

              <input type="text" class="form-control" autocomplete="off" name="konu" placeholder="Konu giriniz" required><br>

              <textarea class="form-control" rows="8" autocomplete="off" name="mesaj" placeholder="Mesaj giriniz" required></textarea><br>

              <input type="submit" class="btn btn-primary btn-sm" id="gonder" name="gonder" value="Gönder">


            </form>
            <?php





            ?>

          </div>

        </div>
      </div>
      <div class="col-md-3">
        <br><br><br>

        <div class="col-md-3">
          <br><br><br>
          <div class="text-center">
            <img src="foto/iletisim.jpg" class="rounded" alt="...">
          </div>
        </div>
      </div>




    </div>
  </div>

  <footer class="bd-footer py-5 mt-5 bg-dark">
    <div class="container ">
      <div class="row">
        <div class="col-4">


        </div>
        <div class="col-4">

          <div style="float:left;">
            <a href="#" class="icon-text fab fa-facebook-f a"> <span> | </span> Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-twitter a"><span> | </span> Twitter </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-google a"><span> | </span> Google </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
            <a href="#" class="icon-text fab fa-linkedin a"><span> | </span> Linkedin </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-youtube a"><span> | </span> Youtube </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="icon-text fab fa-instagram a"><span> | </span>Instagram </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>

        </div>
        <div class="col-4">



        </div>

      </div>
    </div>
  </footer>

  <script src="js/bootstrap.min.js"></script>

</body>

</html>