<?php ob_start();
include 'connect.php';
$idPA=$_GET["idPA"];
$qr1="update binhchon set SoLanChon = SoLanChon+1 where idBC=1";
$qr="update phuongan set SoLanChon = SoLanChon+1 where idBC=1 and idPA=$idPA";

if($config->query($qr1) && $config->query($qr))
header('location:ketquabinhchon.php');
else echo "That bai!";
?>
