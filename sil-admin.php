<?php
require_once "database.php";
$yaprakıd = $_GET['ID'];
$veri = new Database();

$yaprakad = $veri->getColumn("SELECT yaprakAD FROM yapraklar WHERE yaprakID=$yaprakıd")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $yaprakad ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <form action="sil.php" method="POST">
                <h4 class="danger"><?php echo $yaprakad ?> bilgileri silinecek...</h4>
                <input type="text" readonly value="<?php echo $yaprakıd ?>" width="20px" name="silıd" class="form-group">
                <input type="submit" class="btn btn-danger btn-sm" id="gonder" name="gonder" style=" width:75px" value="Sil">
            </form>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
    
</body>
</html>