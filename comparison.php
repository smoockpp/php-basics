<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operators</title>
</head>

<body>
	<?php 
		$a = 4;
		$b = 3;
		$c = 1;
		$d = 20;
		if (($a >= $b) || ($c >= $d)) {
			echo "a is larger than b AND ";
			echo "c is larger than d";
		}
	?>
    
    <?php 
		$e = 100;
		if (!isset($e)) {
			$e = 200;
		}
		echo $e;
	?>
    
    <?php 
	//don't reject 0 or 0.0
	$quantity = "";
	if (empty($quantity) && !is_numeric($quantity)) {
		echo "You must enter a quantity.";
	}
	?>
    
</body>
</html>  