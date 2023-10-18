<!DOCTYPE html>
<html>

<head>
    <title>Yaprak Düzenleme</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-container {
            max-width: 250px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">Yaprak Düzenleme</h1>
        <hr>
        <form action="guncel.php" method="post" enctype="multipart/form-data">
            <?php
            require_once "database.php";
            $veri = new Database();
            $yaprakID = $_GET['ID'];
            $yaprak = $veri->getRow("SELECT * FROM yapraklar WHERE yaprakID = $yaprakID");
            ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="yaprakId"><h1><?php echo $yaprak->yaprakAD ?></h1></label>
                        <input type="text" hidden readonly value="<?php echo $yaprakID ?>" name="yaprakId" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <button type="submit" class="btn btn-success mt-4 float-end">Güncelle</button>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="resim1">Resim 1</label>
                        <div class="image-container">
                            <img src="<?php echo $yaprak->yaprakURL1 ?>" class="img-fluid rounded">
                        </div>
                        <input type="file"  id="resim1" name="resim1" class="form-control mt-3">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="resim2">Resim 2</label>
                        <div class="image-container">
                            <img src="<?php echo $yaprak->yaprakURL2 ?>" class="img-fluid rounded">
                        </div>
                        <input type="file"  id="resim2" name="resim2" class="form-control mt-3">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="resim3">Resim 3</label>
                        <div class="image-container">
                            <img src="<?php echo $yaprak->yaprakURL3 ?>" class="img-fluid rounded">
                        </div>
                        <input type="file"  id="resim3" name="resim3" class="form-control mt-3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="yaprakOnBilgi">Ön Bilgi</label>
                        <textarea type="text" rows="8" style="width: 100%;" name="yaprakOnBilgi" class="form-control"><?php echo $yaprak->yaprakÖnBilgi ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="baslik1">Başlık 1</label>
                        <input type="text" value="<?php echo $yaprak->baslik1 ?>" name="baslik1" class="form-control">
                        <label for="yaprakBilgi1">Bilgi 1</label>
                        <textarea type="text" rows="8" style="width: 100%;" name="yaprakBilgi1" class="form-control"><?php echo $yaprak->yaprakBİLGİ1 ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="baslik2">Başlık 2</label>
                        <input type="text" value="<?php echo $yaprak->baslik2 ?>" name="baslik2" class="form-control">
                        <label for="yaprakBilgi2">Bilgi 2</label>
                        <textarea type="text" rows="8" style="width: 100%;" name="yaprakBilgi2" class="form-control"><?php echo  $yaprak->yaprakBİLGİ2 ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
