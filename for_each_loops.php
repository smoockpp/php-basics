<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>For Each loops</title>
</head>

<body>
	<?php 
		$ages = array(4,8,15,16,23,42);
		
		foreach($ages as $age) {
			echo "Age: {$age}<br/>";
		}
	?>
	<br/>
    <?php // foreach using assoc array
		$person = array(
					"first_name" => "Kevin",
					"last_name" => "Skoglund",
					"address" => "123 Beverly Hills",
					"city" => "Beverly Hills",
					"state" => "CA",
					"zip_code" => "90210"
				);
		foreach($person as $attribute => $data) {
			$attr_nice = ucwords(str_replace("_", " ", $attribute));
			echo "{$attr_nice}: {$data}<br/>";
		}
	?>
    <br/>
    <?php 
		$prices = array("Brand New Computer" => 2000,
						"1 month of lynda.com" => 25,
						"Learning PHP" => null);
		foreach($prices as $item => $price) {
			echo "{$item}: ";
			if (is_int($price)) {
				echo "$" . $price;
			} else {
				echo "priceless";	
			}
			echo "<br/>";
		}
	?>
    
</body>
</html>  