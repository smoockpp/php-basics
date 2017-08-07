<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deffault functions</title>
</head>

<body>
	<?php 
		$number = 99;
		$string = "BuG?";
		$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");
		
		var_dump($number);
		var_dump($string);
		var_dump($array);
		
		
		
	?>
    <pre>
    <?php 
		// print_r(get_defined_vars());
	?>
    </pre>
    <br/>
    <?php 
		function say_hello_to($word) {
			echo "Hello {$word}!<br/>";	
			var_dump(debug_backtrace());
		}
		
		say_hello_to('Everyone');
	?>
    
    
    
    
</body>
</html>  