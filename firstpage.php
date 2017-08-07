<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Links and URLs</title>
</head>

<body>
	<?php $link_name = "Second page"; ?>
    <?php $id = 5; ?>
    <?php $company = "Johnson & Johnson"; ?>
	<a href="secondpage.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company); ?>"><?php echo $link_name; ?></a>	  
</body>
</html>  