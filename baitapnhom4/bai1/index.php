<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phần 2.	Xử lý trên form PHP </title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<h1>
		<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST")
			if(!empty($_POST['ten']))
			{
			echo "Chào Bạn ". $_POST['ten'];
			} 
			else{
				echo "Mời nhập tên";
			}
		?>
	</h1>
	<form   method="post" >
		<div class="input-group mb-3">
  		<input type="text" class="form-control" placeholder="Nhập tên của bạn" name="ten">
  	
    	
 
</div>
		<input class="btn btn-success" type="submit" name="">
	</form>

</body>
</html>