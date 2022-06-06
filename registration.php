<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="css/style.css" rel="stylesheet">
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}
		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}
		ul.topnav li {float: left;}
		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}
		ul.topnav li a.active {background-color: #333;}
		ul.topnav li.right {float: right;}
		@media screen and (max-width: 600px) {
			ul.topnav li.right,
			ul.topnav li {float: none;}
		}
		</style>
	</head>
	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="user data.php">Product Data</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="registration.php">Registration</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="read tag.php">Read Tag ID</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br>
		<h1 align="center">Registration Form</h1>
		<form class="form-horizontal" action="insertDB.php" method="post" style="margin:auto;width:50%;padding:10px;border-radius:10px;border:5px solid;">
			<div class="form-floating mb-3">
				<input name="ProductID" class="form-control" id="getUID" placeholder=" " required>
				<label for="getUID">Product ID (Please Scan your Card / Key Chain to display ID)</label>
			</div>
			
			<div class="form-floating mb-3">
				<input type="text" name="ProductName" class="form-control" id="floatingInput" placeholder=" " required>
				<label for="floatingInput">Product name</label>
			</div>
			
			<div class="form-floating mb-3">
				<input type="text" name="brand" class="form-control" id="floatingInput" placeholder=" " required>
				<label for="floatingInput">Brand</label>
			</div>
			
			<div class="form-floating mb-3">
				<input type="number" name="price" class="form-control" id="floatingInput" placeholder=" " required>
				<label for="floatingInput">Price</label>
			</div>
			<div class="form-floating mb-3">
				<input type="number" name="quantity" class="form-control" id="floatingInput" placeholder=" " required>
				<label for="floatingInput">Quantity</label>
			</div>
			
			<button type="submit" class="btn btn-success">Save</button>
		</div>
	</form>
</body>
</html>