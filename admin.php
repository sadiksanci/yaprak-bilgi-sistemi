<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Paneli</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:darkgray; ">
    <div class="container" style="background-color:darkgray; padding:10px 50px">
    <div style="margin-top:100px">
    <a href="index.php" style="text-decoration: none; color:black ; "  >   <h1 class="baslık">Yaprak Bilgi Sistemi</h1></a>
      </div>
        <div class="row" style="height: 100px;"></div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <div style="background-color:gray; padding:50px; border-radius:50px">
        <h2 class="baslık">Admin Girişi</h2>
        <hr>
                <form action="login.php" method="POST">
                    <div style="margin-left: 20px; padding:50px;">
                    <div class="pc">
                        <span></span>
                        <input type="text" class="form-control" autocomplete="off" id="user" name="user" style="width: 150px;" placeholder="Kullanıcı adı..."><br>
                    </div>
                    <div class="pc">
                        <span></span>
                        <input type="text" class="form-control" autocomplete="off" id="pass" name="pass" style="width: 150px;" placeholder="Şifre...">
                    </div>
                    <div style="margin-left: 40px;">
                        <br>
                        <input type="submit" style="text-align:center" style="width:100px" class="btn btn-success btn-md" id="gonder" name="gonder" value="Giriş">
                    </div>
</div>
                </form>
</div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



</body>

</html>