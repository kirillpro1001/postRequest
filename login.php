<?php
$login = !empty($_POST['login']) ? $_POST['login'] : 'Логин не передан';
$password = !empty($_POST['password']) ? $_POST['password'] : 'Пароль не передан';

if ($login !== 'admin') {
	$isAuthorized = "Такого пользователя не существует";
}
elseif ($login === 'admin' && $password !== 'admin') {
	$isAuthorized = "Введен неверный пароль";
}
else {
	$isAuthorized = "Авторизация прошла успешно";
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
	<?=$isAuthorized ?>
</body>
</html>