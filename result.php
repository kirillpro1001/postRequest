<?php
$result = require __DIR__.'/calc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page result calculate</title>
</head>
<body>
	<b>Результат вычислений:</b>
	<br/>
<?=$result?>	
</body>
</html>