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