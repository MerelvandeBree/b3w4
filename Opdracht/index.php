<?php

	include("resources/datalayer/datalayer.php");

	$characters = readCharacters();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
	<header>
		<h1>Alle <?= sizeof($characters) ?> characters uit de database</h1>
	</header>

	<div id="container">
	    <?php foreach ($characters as $data){
	        require("includes/items.php");
	    } ?>
	</div>

	<footer>&copy; Merel van de Bree 2020</footer>
</body>
</html>