<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Second page</title>
</head>

<body>
	<pre>
    	<?php 
			// print_r($_GET);
			
					?>
    </pre>
    <?php 
		$id = $_GET['id'];
		$company = $_GET['company'];		
		echo $id . "<br/>";
		echo $company;
	?>
    
    
    
</body>
</html>  