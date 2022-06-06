<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $ProductName = $_POST['ProductName'];
		$ProductID = $_POST['ProductID'];
		$brand = $_POST['brand'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO info (ProductName,ProductID,Brand,Price,Quantity) values(?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($ProductName,$ProductID,$brand,$price,$quantity));
		Database::disconnect();
		header("Location: user data.php");
    }
?>