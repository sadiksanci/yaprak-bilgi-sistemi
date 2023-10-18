<?php
require_once "database.php"; // Veritabanı bağlantısı için gereken dosya

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $veri = new Database();

    $yaprakAD = $_POST['yaprakAD'];
    $yaprakÖnBilgi = $_POST['yaprakÖnBilgi'];
    $baslik1 = $_POST['baslik1'];
    $yaprakBilgi1 = $_POST['yaprakBilgi1'];
    $baslik2 = $_POST['baslik2'];
    $yaprakBilgi2 = $_POST['yaprakBilgi2'];

    // Resim dosyalarını yükleme işlemi
    $hedef_dizin = "foto/";

    $resim1_url = $hedef_dizin . $_FILES['resim1']['name'];
    $resim2_url = $hedef_dizin . $_FILES['resim2']['name'];
    $resim3_url = $hedef_dizin . $_FILES['resim3']['name'];

    move_uploaded_file($_FILES['resim1']['tmp_name'], $resim1_url);
    move_uploaded_file($_FILES['resim2']['tmp_name'], $resim2_url);
    move_uploaded_file($_FILES['resim3']['tmp_name'], $resim3_url);

    // Veritabanına veri ekleme işlemi
    $sql = "INSERT INTO yapraklar (yaprakAD, yaprakÖnBilgi, yaprakURL1, yaprakURL2, yaprakURL3, baslik1, yaprakBİLGİ1, baslik2, yaprakBİLGİ2) 
            VALUES ('$yaprakAD', '$yaprakÖnBilgi', '$resim1_url', '$resim2_url', '$resim3_url', '$baslik1', '$yaprakBilgi1', '$baslik2', '$yaprakBilgi2')";


    if ($veri->Insert($sql)) {
        echo "Veri başarıyla eklendi.";
    } else {
        echo "Veri eklerken hata oluştu: " . $veri->error;
    }
}






