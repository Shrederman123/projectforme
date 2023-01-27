<?php
$servername = "localhost";
$database = "anton1ei_testbd";
$username = "anton1ei_testbd";
$password = "ter64mi32t!";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Тесты для БД</title>
</head>
<body>

	<h5 class="textstyle"> Hello world! </h5>

	<div class="registration">
		<input type="" name="login" value="Логин"> <br><br>
		<input type="password" name="password" value="Пароль"> <br><br>
		
	<p>
		<input type="hidden" name="page_id" value="150">
		<input type="button" name="enter" value="Войти"><br>
	</p>		
	
	<div class="comment">
		<input type="login" name="login" value="Логин"> <br><br>
		<input type="text" name="text" value="Текст"> <br><br>
		
	<p>
		<input type="hidden" name="page_id" value="150">
		<a href="comment.php"><input type="button" name="enter" value="Оставить комментарий"><br></a>
	</p>
		
			<br>
		<a href="registration.php">Регистрация</a>
	</div>
	писька+сиська

</body>
</html>