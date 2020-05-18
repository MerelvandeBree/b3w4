<?php

	function createDatabaseConnection(){
		$servername = "localhost";
		$username = "root";
		$password = "mysql";
		$dbname = "databank_php";
		 
		try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
		}
		catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
		}
	}

	function readMenuItems() {
		$dbConnection = createDatabaseConnection();
		$stmt = $dbConnection->prepare("SELECT title,id FROM onderwerpen");
		$stmt->execute();
		$result = $stmt->fetchAll();
		$dbConnection = null;
		return $result;
	}

	function readSubject($id) {
		$dbConnection = createDatabaseConnection();
		$stmt = $dbConnection->prepare("SELECT * FROM onderwerpen WHERE id=:id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$result = $stmt->fetch();
		$dbConnection = null;
		return $result;
	}	

?>