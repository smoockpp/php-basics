<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Functions: arguments</title>
</head>

<body>
	<?php 
		function say_hello_to($word) {
			echo "Hello {$word}!<br/>";	
		}
		$name = "John Doe";
		say_hello_to($name);
	?>
    <br/>
    <?php 
		function better_hello($greeting, $target, $punct) {
				echo $greeting . " " . $target . $punct . "<br/>";
		}
		
		better_hello("Hello", $name, "!");
		
		better_hello("Hello", $name, null);
	?>
    
</body>
</html>  