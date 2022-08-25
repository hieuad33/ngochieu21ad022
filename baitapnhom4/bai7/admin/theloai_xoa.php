<?php
include("../connect.php");
if(isset($_GET["idTL"]))
{
	$key=$_GET["idTL"];

}
	$sl="delete from theloai where idTL=".$_GET["idTL"];
//if(mysql_query($sl))
if($conn->query($sl) === TRUE)
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='theloai.php';</script>";
}


?>
