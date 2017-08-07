<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Break</title>
</head>

<body>
	<?php 
		$ages = array(4,8,15,16,23,42);
		
		// current: current pointer value
		echo "1: " . current($ages) . "<br/>";
		next($ages);
		echo "2: " . current($ages) . "<br/>";
		next($ages);
		next($ages);
		echo "3: " . current($ages) . "<br/>";
		
		prev($ages);
		echo "4: " . current($ages) . "<br/>";
		
		reset($ages);
		echo "5: " . current($ages) . "<br/>";
		
		end($ages);
		echo "6: " . current($ages) . "<br/>";
		
		next($ages);
		echo "7: " . current($ages) . "<br/>";
	?>
    
    <br/>
    <?php //while loop that moves the array pointer
		  // similar to foreach
		  reset($ages);
		  while($age = current($ages)) {
			  echo $age . ", ";
			  next($ages);
		  }
	?>
    
</body>
</html>  