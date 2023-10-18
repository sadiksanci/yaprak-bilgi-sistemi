
<?php
require_once "database.php";



$yaprakıd=$_POST['silıd'];

 


$veri = new Database();
$veriler = $veri->Delete("DELETE FROM yapraklar 
                                WHERE yaprakID='$yaprakıd'") ;

 

 
?>
<script>

function uyarı(){
    alert("Silme İşlemi yapıldı..");
    window.location.href = "admincontrol.php";
    
}
uyarı();



</script>