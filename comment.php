<?php
include "connect.php";
?>
<?php 
		
            $login = $_POST['login'];
            $page_id = $_POST['page_id'];
            $text = $_POST['text']; //список переменных и отправка форм с помощью POST-запросов
            
            
            $mysqli->query("INSERT INTO 'comment' ('login', 'page_id', 'text') VALUES ('$login', '$page_id','text')"); //вставляем данные в таблицу
            header("Location: ".$_SERVER["HTTP_REFER"]); //редирект обратно
		
		?>;