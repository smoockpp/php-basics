<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constants</title>
</head>

<body>
	<?php 
		$max_width = 980;
		
		define("MAX_WIDTH", 980);
		echo MAX_WIDTH;
	?>
    <br/>
    <?php //can't change the value
	//MAX_WIDTH += 1;
	//echo MAX_WIDTH;
	?>
    
    <?php //can't even refine it
		define("MAX_WIDTH", 981);
		echo MAX_WIDTH;
		?>
</body>
</html>  