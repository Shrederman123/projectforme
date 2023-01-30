<?php
include "connect.php";
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
		<input type="" name="loginreg" value="Логин"> <br><br>
		<input type="password" name="passwordreg" value="Пароль"> <br><br>
		
	<p>
		<input type="hidden" name="page_idreg" value="150">
		<input type="button" name="enter" value="Войти"><br>
	</p>		
</div>
	
	<div class="comment">
		<input type="login" name="login" value="Логин"> <br><br>
		<input type="textl" name="text" value="Текст"> <br><br>
		
	<p>
		<input type="hidden" name="page_id" value="150">
		<a href="comment.php"><input type="button" name="enter" value="Оставить комментарий"><br></a>
	</p>
		
			<br>
		<a href="registration.php">Регистрация</a>
	</div>
	

</body>
</html>