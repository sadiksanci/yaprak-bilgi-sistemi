
<?php
require_once "database.php";



$mesajıd=$_POST['silıd'];

 


$veri = new Database();
$veriler = $veri->Delete("DELETE FROM mesajlar 
                                WHERE mesajID='$mesajıd'") ;

 

 
?>
<script>

function uyarı(){
    alert("Silme İşlemi yapıldı..");
    window.location.href = "admincontrol.php";
    
}
uyarı();



</script>