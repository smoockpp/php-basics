<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables</title>
</head>

<body>
	<?php
    	$first = "The quick brown fox";
		$second = " jumped over the lazy dog.";
		
		$third = $first;
		$third .= $second;
		
		echo $third;
		
		
	?>
    
    <br />
    Lowercase: <?php echo strtolower($third); ?><br />
    Uppercase: <?php echo strtoupper($third); ?><br />
    Uppercase first: <?php echo ucfirst($third); ?><br />
    Uppercase words: <?php echo ucwords($third); ?><br />

</body>
</html>  
