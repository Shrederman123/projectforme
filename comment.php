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
<?php 
		
            $login = $_POST['login'];
            $page_id = $_POST['page_id'];
            $text = $_POST['text']; //список переменных и отправка форм с помощью POST-запросов
            
            
            $mysqli->query("INSERT INTO 'comment' ('login', 'page_id', 'text') VALUES ('$login', '$page_id','text')"); //вставляем данные в таблицу
            header("Location: ".$_SERVER["HTTP_REFER"]); //редирект обратно
		
		?>;