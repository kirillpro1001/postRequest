<!-- Добавим проверку в случае если пользователь отсутствует проверку пароля не выполнять, а вывести "Такого пользователя не существует". Если пользователь введен правильно, но пароль не верный, вывести соответствующее сообщение -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form post request</title>
</head>
<body>
	<form action="login.php" method = 'post'>
		<label for="login">Логин:</label>
		<input type="text" name = 'login'>
		<label for="password">Пароль:</label>
		<input type="text" name = "password">
		<input type="submit">
	</form>
</body>
</html>