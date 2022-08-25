<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>them the loai</title>
</head>

<?php //ob_start();
	include_once('../connect.php');
	$error='';
		// upload hinh anh	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$icon=$_FILES['image']['name'];
 	   $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"../image/".r);

		$theloai = $_POST['TenTL'];
		$thutu = $_POST['ThuTu'];
		$an = $_POST['AnHien'];
	
		$sl = "insert into theloai (TenTL,ThuTu,AnHien,icon) Value('".$theloai."','".$thutu."','".$an."','".$icon."')";
		if ($conn->query($sl) === TRUE)
		{
		echo "<script language='javascript'>alert('Them thanh cong');";
		echo "location.href='theloai.php';</script>";
		//header("location:theloai.php");
		}
		else
		{
			$error=mysqli_error();
		}
	}
//mysqli_close($link);

?>

<body>
	<form method="post" enctype="multipart/form-data" name="form1">
	<table align="left"  width="400">
	<tr>
	<td align="right">
	Ten The Loai
</td>
<td>
	<input type="text" name="TenTL" value="" />
</td>
</tr>
<tr>
	<td align="right">
	Thu Tu
</td>
<td>
	<input type="text" name="ThuTu" value="" />
</td>
</tr>
<tr>
	<td align="right">
	An Hien
</td>
<td>
	<select name="AnHien">
	<option value="0">An</option>
	<option value="1">Hien</option>
	</select>
</td>
</tr>
<tr>
  <td align="right">icon</td>
  <td>
    <input type="file" name="image" id="anh" />
    
    </td>
</tr>
<tr>
	<td align="right">
		<input type="submit" name="Them" value="Them" />
</td>
<td>
	<input type="reset" name="Huy" value="Huy" />
</td>
</tr>
</table>
<p ><?php echo $error  ?></p>
</form>


</body>
</html>