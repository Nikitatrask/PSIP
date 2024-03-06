<?php
$servername = "localhost"; // ваш хост
$username = "root";
$password = "ваш_пароль";
$dbname = "Procat"; // имя вашей базы данных

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>
