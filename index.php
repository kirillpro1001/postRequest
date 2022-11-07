<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
</head>
<body>
	<form action="result.php" method = 'post'>
		<input type="text" name = 'numberOne'>
		<select name="action">
			<option value="+">+</option>
			<option value="-">-</option>
		</select>
		<input type="text" name="numberTwo">
		<input type="submit">
	</form>
</body>
</html>