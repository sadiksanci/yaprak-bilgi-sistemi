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
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Anasayfa <span class="sr-only"></span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="hakkimizda.php">Hakkımızda</a>
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


        ?>

        <h3>Hakkımızda</h3>
        <hr color="green" /> <br>



      </div>

    </div>

    <?php
    require_once "database.php";

    $veri = new Database();
    $sonYapraklar =$veri->getRows(" SELECT * FROM yapraklar ORDER BY yaprakID DESC LIMIT 3");
    $deger = $veri->getRows("SELECT * FROM yapraklar");
    $deger2 = $veri->getRow("SELECT * FROM hakkimizda WHERE hakkimizdaID= $yaprakıd ");
    ?>
    <div class="row">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5 h5">
            <div>
              <?php echo $deger2->hakkimizda ?>

            </div>

          </div>
          <div class="col-md">

          </div>
          <div class="col-md-5 h6">
            Soru, Öneri ve Görüşleriniz İçin <span style="color:green"><a style="text-decoration: none;" href="iletisim.php"> tıklayınız...</a> </span>
          </div>
        </div><br> <br>

        <hr>
        <div class="row">
          <div class="col-md-10">
          <div class="row">
          <?php foreach ($sonYapraklar as $son) {

         
        
          ?>
          

          <div class="col-md-4">
                <div class="card">
                    <a class="no-underline" href="detay.php?ID=<?php echo $son->yaprakID ?>" class="a">
                        <img src="<?php echo $son->yaprakURL1 ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $son->yaprakAD ?></h4>
                        <p class="card-text"><?php echo substr($son->yaprakÖnBilgi, 0, 200) ?></p>
                    </div>
                </div>
            </div>


          <?php } ?>
     


          </div>
    
          </div><br><br>
          <div class="col-md-2">

            <div style="margin-top: 20px;">


            </div>
            <div style="margin-top: 50px;">

            </div>


          </div>
          <div class="row">

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
    <div class="container  ">
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

  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>