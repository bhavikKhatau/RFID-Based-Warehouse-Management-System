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
		<h1>Product Data Table</h1>
		<table class="table table-dark table-striped table-hover" style="margin:auto;width:70%">
			<thead>
				<tr>
					<th>Product name</th>
					<th>Product ID</th>
					<th>Brand</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include 'database.php';
				$pdo = Database::connect();
				$sql = 'SELECT * FROM info';
				foreach ($pdo->query($sql) as $row) {
					echo '<tr>';
					echo '<td>'. $row['ProductName'] . '</td>';
					echo '<td>'. $row['ProductID'] . '</td>';
					echo '<td>'. $row['brand'] . '</td>';
					echo '<td>'. $row['price'] . '</td>';
					echo '<td>'. $row['quantity'] . '</td>';
					echo '<td><a class="btn btn-success" href="user data edit page.php?ProductID='. $row['ProductID'] .'">Edit</a>';
					echo ' ';
					echo '<a class="btn btn-danger" href="user data delete page.php?ProductID='. $row['ProductID'] .'">Delete</a>';
					echo '</td>';
					echo '</tr>';
			}
			Database::disconnect();
			?>
		</tbody>
	</table>
</body>
</html>