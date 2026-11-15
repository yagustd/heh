<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tirages du Lotto</title>
	<style>
	table {text-align:center;}
	table td {border:1px solid #000; padding:0.25rem;}
	</style>
</head>
<body>
	<h1>Tirages du Lotto</h1>
	<?php 
	for ($i=0 ; $i<6 ; $i++) {
		$tirage[$i] = rand(1,50);
	}
	?>
</body>
</html>