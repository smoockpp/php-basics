<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operators</title>
</head>

<body>
	<?php 
		$a = 10; 
		
		switch ($a) {
			case 0:
				echo "a equals 0<br/>";
				break;
			case 1: 
				echo "a equals 1<br/>";
				break;
			case 2:
				echo "a equals 2<br/>";
				break;
			case 3: 
				echo "a equals 3<br/>";
				break;
			case 4:
				echo "a equals 4<br/>";
				break;
			case 5: 
				echo "a equals 5<br/>";
				break;
				default: 
				echo "a is not 0, 1, 2, 3, 4 or 5<br/>";
				break;
		}
				
	?>
    
    <?php 
	// ChineseZodiac
	// whitespace doesn't matter
	// colons, semicolons and breaks do
	$year = 2013;
	switch (($year - 4) % 12) {
		case 0: $zodiac = 'Rat';		break;
		case 1: $zodiac = 'Ox';			break;
		case 2: $zodiac = 'Tiger';		break;
		case 3: $zodiac = 'Rabbit';		break;
		case 4: $zodiac = 'Dragon';		break;
		case 5: $zodiac = 'Snake';		break;
	}
	echo "{$year} is the year of the {$zodiac}.";
	?>
    
</body>
</html>  