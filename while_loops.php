<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>While loops</title>
</head>

<body>
	<?php 
		$count = 0;
		while ($count <= 10) {
			if ($count == 5) {
				echo "Five, ";
			} else {
			echo $count . ", ";
			}
			$count++;
		}
		echo "<br/>";
		echo "Count: {$count}";
	?>
    
</body>
</html>  