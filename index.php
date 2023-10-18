<html>

<head>
  <title></title>
  <?php
  require_once "database.php";
  $yaprakıd = 1;

  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <a class="navbar-brand" href="index.html">&nbsp;&nbsp;Yaprak Bilgi Sistemi</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link active" href="index.php">Anasayfa <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İletişim</a>
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

      <div class="col-8">
        <?php
        require_once "database.php";
        $veri = new Database();

        $baslik = $veri->getColumn("SELECT baslik1 FROM anasayfa WHERE anasayfaID=$yaprakıd")
        ?>

        <h1> <?php echo $baslik ?></h1>
        <hr color="green" /> <br>



      </div>

    </div>

    <?php
    require_once "database.php";

    $veri = new Database();
    $deger = $veri->getRows("SELECT * FROM yapraklar");
    $deger2 = $veri->getRow("SELECT * FROM anasayfa WHERE anasayfaID= $yaprakıd ");
    $sonYapraklar =$veri->getRows(" SELECT * FROM yapraklar ORDER BY yaprakID DESC LIMIT 3");
    $tur1 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=1");
    $tur2 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=1");
    $tur3 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=1");
    $tur4 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=1");
    $tur5 = $veri->getRow("SELECT * FROM yapraktür WHERE turID=1");

    ?>
    <div class="row">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5">
            <div class="text-center">
              <img src="foto/<?php echo $deger2->resimURL1 ?>" class="rounded" alt="...">
            </div>

          </div>
          <div class="col-md"></div>
          <div class="col-md-5">
            <p class="h6"> &nbsp;&nbsp;
              <?php echo $deger2->bilgi1 ?>
            </p>
          </div>
        </div><br> <br>
        <div class="row">
          <div class="col-8">
          <h2>Yaprak Türleri</h2> <br>
            <p class="h6"> &nbsp;&nbsp;
              <?php echo $deger2->baslik2 ?>

            </p>
           
            <div class="card-group">
              <div class="card">
                <img src="foto/<?php echo $tur1->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $tur1->turAD ?></h5>
                  <p class="card-text"> <?php echo $tur1->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
              <div class="card">
                <img src="foto/<?php echo $tur2->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $tur2->turAD ?></h5>
                  <p class="card-text"><?php echo $tur2->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
              <div class="card">
                <img src="foto/<?php echo $tur5->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $tur5->turAD ?></h5>
                  <p class="card-text"><?php echo $tur5->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
            </div>
            <div class="card-group">
              <br>
              <div class="card">
                <img src="foto/<?php echo $tur4->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $tur4->turAD ?></h5>
                  <p class="card-text"> <?php echo $tur4->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
              <div class="card">
                <img src="foto/<?php echo $tur3->turRESİM ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $tur3->turAD ?></h5>
                  <p class="card-text"><?php echo $tur3->turBİLGİ ?></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
             
            </div>

          </div>

        </div>


        <div class="row">
          <div class="col-md-8">

            <br>
            <p>&nbsp;&nbsp;
              <?php echo $deger2->bilgi2 ?>
            </p>
          </div><br><br>
          <div class="col-md-4">

            <div style="margin-top: 20px;">
              <img src="foto/<?php echo $deger2->resimURL2 ?>" class="img-thumbnail" alt="...">

            </div>
            <div style="margin-top: 50px;">
              <img src="foto/<?php echo $deger2->resimURL3 ?>" class="img-thumbnail" alt="...">
            </div>


          </div>
    
          <div class="row">
          <?php foreach ($sonYapraklar as $son) {

         
        
          ?>
          

            <div class="col-md-4">
                  <div class="card" style="width: 18rem; ">
                              <a class="no-underline"  href="detay.php?ID=<?php echo  $son->yaprakID ?>" class="a">
                                <img src="<?php echo  $son->yaprakURL1 ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="card-text">
                                  <h4> <?php echo   $son->yaprakAD ?></h4> 
                                  <?php  echo substr($son->yaprakÖnBilgi , 0, 200) ?>
                                </p>
                                </div>
                              </a>
                            </div>
                  </div>

          <?php } ?>
     


          </div>
    
        </div>

      </div>


      <div class="col-md-2">
        <div class="card" style="width:200px;">
          <?php foreach ($deger as $degerler) {
          ?>
            <a href="detay.php?ID=<?= $degerler->yaprakID; ?>" class="list-group-item list-group-item-action list-group-item-success"><?php echo $degerler->yaprakAD ?></a>



          <?php } ?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>