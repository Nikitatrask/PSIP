<?php
session_start(); // Инициализация сессии

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Сохранение данных в сессионных переменных
    $_SESSION['user_email'] = $email;
    $_SESSION['user_phone'] = $phone;

    // Нахождение максимального значения
    $a = 100;
    $b = 20;
    $maxValue = max($a, $b);

    // Запись результата в файл
    $filename = '1.txt';
    file_put_contents($filename, $maxValue);

    // Перенаправление на страницу 2.php
    header("Location: 2.php");
    exit();
} else {
    // Если форма не отправлена, перенаправляем на страницу с формой
    header("Location: index.php");
    exit();
}
?>
