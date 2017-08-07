<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Return functions</title>
</head>

<body>
	<?php 
			function add($val1, $val2) {
				$sum = $val1 + $val2;	
				return $sum;
			}
			
			$result1 = add(3, 4);
			$result2 = add(5, $result1);
			echo $result2;
	?>
    
    <br/>
    
    <?php	// chinese zodiac as a function 
		function chinese_zodiac($year) {
			switch (($year - 4) % 12) {
				case 0: return 'Rat';
				case 1: return 'Ox';	
				case 2: return 'Tiger';
				case 3: return 'Rabbit';
				case 4: return 'Dragon';
				case 5: return 'Snake';
				case 6: return 'Horse';
				case 7: return 'Goat';
				case 8: return 'Monkey';
				case 9: return 'Rooster';
				case 10: return 'Dog';
				case 11: return 'Pig';
				
			}
		}
		
		$zodiac = chinese_zodiac(2013);
		echo "2013 is the year of the {$zodiac} .<br/>";
		
		echo "2013 is the year of the " . chinese_zodiac(2027) . "<br/>";
	?>
    <br/>
    <?php
		function better_hello($greeting, $target, $punct) {
				return $greeting . " " . $target . $punct . "<br/>";
		}
		
		echo better_hello("Hello", "John Doe", "!");
	?>
    
    
    <?php // Return multiple values
		function add_subt($val1, $val2) {
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			return array($add, $subt);		// but how can we return $subt too?	
		}
		
		$result_array = add_subt(10, 5);
		echo "Add: " . $result_array[0] . "<br/>";
		echo "Subt: " . $result_array[1] . "<br/>";
		
		list($add_result, $subt_result) = add_subt(20, 7);
		echo "Add: " . $add_result . "<br/>";
		echo "Subt: " . $subt_result . "<br/>";
	?>
    
    
    
    
    
    
</body>
</html>  