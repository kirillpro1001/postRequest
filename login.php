<?php
$login = !empty($_POST['login']) ? $_POST['login'] : 'Логин не передан';
$password = !empty($_POST['password']) ? $_POST['password'] : 'Пароль не передан';

if ($login === 'admin' && $password === 'admin') {
	$isAuthorized = true;
}
else {
	$isAuthorized = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Result authorization</title>
</head>
<body>
	<?=$isAuthorized ? 'Регистрация прошла успешно' : 'Ошибка авторизации' ?>
</body>
</html>