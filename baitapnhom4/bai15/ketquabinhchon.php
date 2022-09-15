<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="450" border="1" cellpadding="4">
<?php
include 'connect.php';
//$idBC=$_GET['idBC'];
$s="select * from binhchon where idBC=1";
$kq=$config->query($s);
if ($d=$kq->fetch_assoc())
{
	$mota=$d["MoTa"];
	
}
$s="select sum(SoLanChon) as tongsolanchon from phuongan where idBC=1";
$kq=$config->query($s);
if ($d=$kq->fetch_assoc())
	$tongsobinhchon=$d["tongsolanchon"];
?>
<tr>
<td colspan="3" bgcolor="#66CCFF" align="center"><?php echo $mota; ?></td>
</tr>
<?php
  $s="select * from phuongan where idBC=1";
  $kq=$config->query($s);
  while($d=$kq->fetch_assoc())
  { $rong=($d["SoLanChon"]/$tongsobinhchon)*150;
	$phantram=($d["SoLanChon"]/$tongsobinhchon)*100;
  ?>
<tr>
<td width="150"><?php echo $d["MoTa"]; ?></td>
<td width="150">
		<table width="150">
<tr>
<td width="<?php echo $rong; ?>" bgcolor="#FF0000"></td>
		<td><?php echo round($phantram,2); ?>%</td>
</tr>
</table>
</td>
<td width="150">So lan chon: <?php echo $d["SoLanChon"]; ?></td>
</tr>
<?php
  }
  ?>
<tr>
<td colspan="3" align="right">Tong so lan chon: <?php echo $tongsobinhchon; ?></td>
</tr>
</table>
</body>
</html>

