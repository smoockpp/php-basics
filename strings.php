<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables</title>
</head>

<body>
	<?php
    	echo "Hello World<br />";
		echo 'Hello World<br />';
		
		$greeting = "Hello";
		$target = "World";
		$phrase = $greeting . " " . $target;
		echo $phrase;
    ?>
	<br />
    <?php  
		echo "$phrase Again<br />"; //works only with double qoutes ("")
		echo "{$phrase}Again<br />";
	?>

</body>
</html>  
