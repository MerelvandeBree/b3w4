<?php 

	include("includes/data.php");

	$id = $_GET["id"];
	$data;

	if ($id > 0 && $id < 5) {
		$data = readSubject($id);
	}
	else {
		$data = readSubject(1);
	}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 4 - Dynamische content</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="container">

	<!-- laad hier via php je header in (vanuit je includes map) -->
	<?php include "includes/header.php"; ?>

	<!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->
	<h1><?= $data["name"] ?></h1>
	<p><?= $data["description"]?></p>
	<? $print = printf("<img src=images/%s>", $data["image"]);?>

	<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->


	<!-- laad hier via php je footer in (vanuit je includes map)-->
	<?php include "includes/footer.php"; ?>

	</div>
</body>
</html>