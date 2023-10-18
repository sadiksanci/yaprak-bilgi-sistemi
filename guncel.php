<?php
require_once "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$veri = new Database();
$yaprakbilgi1=$_POST['yaprakOnBilgi'];
$yaprakbilgi2=$_POST['yaprakBilgi1'];
$yaprakbilgi3=$_POST['yaprakBilgi2'];
$yaprakıd=$_POST['yaprakId'];

$yaprak = $veri->getRow("SELECT * FROM yapraklar WHERE yaprakID = $yaprakıd");

$hedef_dizin = "foto/";

if(!$_FILES['resim1']['name'])
{
  
    $resim1_url = $yaprak->yaprakURL1;
}
else{
    $resim1_url = $hedef_dizin . basename($_FILES['resim1']['name']);
}
if(!$_FILES['resim2']['name'])
{
    $resim2_url = $yaprak->yaprakURL2;
}
else{
    $resim2_url = $hedef_dizin . basename($_FILES['resim2']['name']);
}
if(!$_FILES['resim3']['name'])
{
    $resim3_url = $yaprak->yaprakURL3;
}
else{
    $resim3_url = $hedef_dizin . basename($_FILES['resim3']['name']);
}



    $veriler = $veri->Update("UPDATE yapraklar SET yaprakÖnBilgi = '$yaprakbilgi1',
                                            yaprakBİLGİ1 = '$yaprakbilgi2',
                                            yaprakBİLGİ2 = '$yaprakbilgi3',
                                            yaprakURL1 = '$resim1_url',
                                            yaprakURL2 = '$resim2_url',
                                            yaprakURL3 = '$resim3_url'
                                WHERE yaprakID = '$yaprakıd'");

    if ($veriler) {
        // Güncelleme başarılı olduğunda uyarı gösterin ve yönlendirin
        echo "<script>alert('Güncelleme İşlemi yapıldı..');</script>";
        echo "<script>window.location.href = 'admincontrol.php';</script>";
    } 
    else {
        echo "<script>alert('Güncelleme sırasında hata oluştu.');</script>";
        echo "<script>window.location.href = 'admincontrol.php';</script>";
    }

}