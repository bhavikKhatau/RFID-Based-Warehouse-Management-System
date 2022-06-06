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
		<h1>RFID based Warehouse management system</h1>
		<br>
		<h2 align="center">
			<img src="https://www.prologis.com/sites/corporate/files/styles/1920x667/public/images/2019/12/large-nieuwegein_dc2_40.jpg?itok=QESr48Yx" style="height:70vh;width:90vw;">
		</h2>
	</body>
</html>