<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deffault functions</title>
</head>

<body>
	<?php 
		function paint($room = "office", $color = "red") {
			return "	The color of the {$room} is {$color}.<br/>";
		}
		echo paint("bedroom", "blue");
		echo paint("bedroom", null);
		echo paint(null, "red");
		
	?>
    
    
    
    
    
    
</body>
</html>  