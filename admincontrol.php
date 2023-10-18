<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/r-2.1.1/rg-1.0.0/datatables.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Admin Paneli</title>
</head>

<body style="background-color: darkgray;">
    <div class="container">
        <h1 class="baslık text-center my-4">Admin Paneli</h1>
        <hr>

        <div class="row">
            <div class="col-md-10">
                <div class="text-center">
                    <?php echo "<a href=\"logout.php\" class='btn btn-warning mx-2'><h3>Çıkış Yap</h3></a>"; ?>
                    <button onclick="gizleGoster('yapraklar');" class="btn btn-outline-dark mx-2"><h3>Yapraklar</h3></button>
                    <button onclick="gizleGoster('mesajlar');" class="btn btn-outline-dark mx-2"><h3>Mesajlar</h3></button>
                </div>
            </div>
        </div>

        <div id="yapraklar" style="display:none">
            <div class="text-center my-3">
                <a href="yaprak-ekle.php" class="btn btn-success mx-2">Ekle</a>
            </div>
            <table id="yaprakTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Yaprak Ad</th>
                        <th>Ön Bilgi</th>
                        <th>Baslık-1</th>
                        <th>Bilgi-1</th>
                        <th>Baslık-2</th>
                        <th>Bilgi-2</th>
                        <th>Resim URL-1</th>
                        <th>Resim URL-2</th>
                        <th>Resim URL-3</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <?php
                require_once "database.php";
                $veri = new Database();
                $veriler = $veri->getRows("SELECT * FROM yapraklar");
                foreach ($veriler as $degerler) {
                ?>
                    <tr>
                        <td><?php echo $degerler->yaprakAD ?></td>
                        <td><?php echo substr($degerler->yaprakÖnBilgi, 0, 100) . "..." ?></td>
                        <td><?php echo $degerler->baslik1 ?></td>
                        <td><?php echo substr($degerler->yaprakBİLGİ1, 0, 100) . "..." ?></td>
                        <td><?php echo $degerler->baslik2 ?></td>
                        <td><?php echo substr($degerler->yaprakBİLGİ2, 0, 100) . "..." ?></td>
                        <td><?php echo $degerler->yaprakURL1 ?></td>
                        <td><?php echo $degerler->yaprakURL2 ?></td>
                        <td><?php echo $degerler->yaprakURL3 ?></td>
                        <td>
                            <a href="detay-admin.php?ID=<?= $degerler->yaprakID; ?>" class="btn btn-success">Güncelle</a>
                            <a href="sil-admin.php?ID=<?= $degerler->yaprakID; ?>" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <div id="mesajlar" style="display:none">
            <table id="mesajTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ad Soyad</th>
                        <th>E-Posta</th>
                        <th>Konu</th>
                        <th>Mesaj</th>
                        <th>Tarih</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <?php
                require_once "database.php";
                $veri = new Database();
                $mesajlar = $veri->getRows("SELECT * FROM mesajlar");
                foreach ($mesajlar as $deger2) {
                ?>
                    <tr>
                        <td><?php echo $deger2->adsoyad ?></td>
                        <td><?php echo $deger2->mail ?></td>
                        <td><?php echo $deger2->konu ?></td>
                        <td><?php echo $deger2->mesaj ?></td>
                        <td><?php echo $deger2->tarih ?></td>
                        <td>
                            <a href="sil-admin-mesaj.php?ID=<?= $deger2->mesajID; ?>" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/r-2.1.1/rg-1.0.0/datatables.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function gizleGoster(tabAdi) {
            var yapraklar = document.getElementById('yapraklar');
            var mesajlar = document.getElementById('mesajlar');
            if (tabAdi == 'yapraklar') {
                yapraklar.style.display = "";
                mesajlar.style.display = "none";
            } else if (tabAdi == 'mesajlar') {
                yapraklar.style.display = "none";
                mesajlar.style.display = "";
            }
        }
        $(document).ready(function() {
            $('#yaprakTable').DataTable();
            $('#mesajTable').DataTable();
        });
    </script>
</body>
</html>
