<?php
require_once "database.php";
$yaprakıd = $_GET['ID'];
$veri = new Database();

$yaprakad = $veri->getColumn("SELECT yaprakAD FROM yapraklar WHERE yaprakID=$yaprakıd")
?>



<html>

<head>
    <title><?php echo $yaprakad ?></title>
    <?php
    require_once "database.php";


    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
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

                $yaprakad = $veri->getColumn("SELECT yaprakAD FROM yapraklar WHERE yaprakID=$yaprakıd")
                ?>

                <h1> <?php echo $yaprakad ?> </h1>
                <hr color="green" /> <br>



            </div>

        </div>

        <?php
        require_once "database.php";

        $veri = new Database();
        $deger = $veri->getRows("SELECT * FROM yapraklar");
        $deger2 = $veri->getRow("SELECT * FROM yapraklar WHERE yaprakID= $yaprakıd ");
        ?>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-5">
                        <div class="text-center">
                        <img src="<?php echo $deger2->yaprakURL1 ?>" class="img-thumbnail" alt="...">
                        </div>

                    </div>
                    <div class="col-md"></div>
                    <div class="col-md-5">
                        <p class="h6"> &nbsp;&nbsp;
                            <?php echo $deger2->yaprakÖnBilgi ?>
                        </p>
                    </div>
                </div><br> <br>


                <div class="row">
                    <div class="col-md-8">
                        <h4><?php echo $deger2->baslik1 ?></h4>
                        <br>
                        <p>&nbsp;&nbsp;
                            <?php echo $deger2->yaprakBİLGİ1 ?>
                        </p>
                    </div><br><br>
                    <div class="col-md-4">

                        <div style="margin-top: 20px;">
                            <img src="<?php echo $deger2->yaprakURL2 ?>" class="img-thumbnail" alt="...">

                        </div>
                        <div style="margin-top: 50px;">
                            <img src="<?php echo $deger2->yaprakURL3 ?>" class="img-thumbnail" alt="...">
                        </div>


                    </div>
                    <div class="row">
                        <br>
                        <h4><?php echo $deger2->baslik2 ?></h4>
                        <p>&nbsp;&nbsp;
                            <?php echo $deger2->yaprakBİLGİ2 ?></p>
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


   
</body>

</html>