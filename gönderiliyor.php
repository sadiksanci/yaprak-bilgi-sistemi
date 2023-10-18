<?php
require_once "database.php";

 $isim = $_POST['ad'];
 $mail = $_POST['mail'];
 $konu = $_POST['konu'];
 $mesaj = $_POST['mesaj'];

 

 $veri = new Database();
 $veriler = $veri->Insert("INSERT INTO mesajlar(adsoyad, mail, konu, mesaj) 
VALUES ('$isim','$mail','$konu','$mesaj')") ;
 

 
?>


<script>

function uyarı(){
    alert("Mesajınız Gönderildi...")
    window.location.href = "iletisim.php";
}
uyarı();



</script>