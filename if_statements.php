<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constants</title>
</head>

<body>
	<?php 
		$a = 4;
		$b = 4;
		
		if ($a > $b) {
			echo "a is larger than b";
		} elseif ($a < $b) {
			echo "a is smaller than b";
		} else {
			echo "a is equal to b";
		}
	?>
    <br/>
    <?php // Only welcome new users
		$new_user = true;
		if ($new_user) {
			echo "<h1>Welcome!</h1>";
			echo "<p>We are glad you decided to join us.</p>";
		}
	?>
    
    <?php // don't divide by zero
		$numerator = 20;
		$denominator = 4;
		if ($denominator > 0) {
			$result = $numerator / $denominator;
			echo "Result: {$result}";
		}
	?>
    
    
    
</body>
</html>  