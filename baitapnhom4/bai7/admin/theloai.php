<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xem theloai</title>
</head>
<body>
	<?php  include_once('../connect.php'); ?>
<table align="center" border="1" width="600">
	<tr align="center">
	<td>Ten The Loai</td>
<td>Thu Tu</td>
<td>An Hien</td>
<td>Bieu tuong</td>
<td colspan="2"><a href="theloai_them.php">Them</a></td>
</tr>
<?php 
		$sql= "select * from theloai";
		$result = $conn->query($sql);
		while( $rows = $result->fetch_assoc() )
		{
	?>
<tr align="center">
	<td>
	<?php echo $rows['TenTL']; ?>
</td>
<td>
	<?php echo $rows['ThuTu']; ?>
</td>
<td>
	<?php if ($rows['AnHien'] == 1)
							{
								echo "Hien"; 
                            }
							else
							{
								echo "An";
							}
                            ?>
</td>
 <td><img src="../image/<?php echo $rows['icon'] ?>" width="40" height="40" /></td>
<td>
	<a href="theloai_sua.php?idTL=<?php echo $rows['idTL'];?>">Sua</a>
</td>
<td>
	<a href="theloai_xoa.php?idTL=<?php echo $rows['idTL'];?>" onclick="return confirm('Ban co chac chan khong?');">xoa</a>
</td>
</tr>
<?php } 
$conn->close();
?>
</table>


</body>
</html>