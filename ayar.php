<?php
require_once "database.php";
$veri = new Database();
$user = $veri->getColumn("SELECT kulad FROM admin WHERE adminID=0");
$pass=$veri->getColumn("SELECT sifre FROM admin WHERE adminID=0");


?>