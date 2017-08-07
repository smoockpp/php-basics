<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Functions defining</title>
</head>

<body>
	<?php 
		function say_hello() {
			echo "Hello World!<br/>";	
		}
	?>
    
   <br/>
   <?php 
   		say_hello();
		
		function say_hello_to($word) {
			echo "Hello {$word}!<br/>";	
		}
		say_hello_to("Everyone");
		
		say_hello_loudly();  // bad coding pracitce - always first define func
		
		function say_hello_loudly() {
			echo "HELLO WORLD!<br/>";
		}
	?>
    
</body>
</html>  