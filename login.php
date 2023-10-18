
<?php
include("ayar.php");

session_start();
ob_start();



if(($_POST["user"]==$user) and ($_POST["pass"]==$pass)){

$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;

header("Location:admincontrol.php");

}else{

echo "Kullanıcı adı veya Şifre Yanlış.";

header("Refresh: 2; url=admin.php");

}

ob_end_flush();
?>