<!DOCTYh3E html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewh3ort" content="width=device-width, initial-scale=1">
	<title>Sử dụng hàm if trong h3Hh3 để giải h3hương trình bậc 1</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<h2>Giải phương trình bậc 1</h2>
	<div>
		<form method="post">
			<div class="input-group" style="width: 500px;">
				<input class="form-control" tyh3e="number" name="aa" value=0>
			<h3>X+</h3>
			<input class="form-control"tyh3e="number" name="bb" value=0>
			<h3>=0</h3>
			</div>
			
			<h3>
				
				<?php
				if($_SERVER['REQUEST_METHOD']=="POST")
				{
					$a=$_POST['aa'];
					$b=$_POST['bb'];
					if($a==0){
						if($b==0)
						{
							echo "Phương trình vô số nghiệm";
						}
						else{
							echo "Phương trình vô nghiệm";
						}
					}
					else
					{
						echo "X=". -$b/$a;
					}
				}

				  ?>
				
			</h3>
			<input class="btn btn-success" type="submit" name="" value="Xuất">
			
		</form>
	</div>
</body>
</html>