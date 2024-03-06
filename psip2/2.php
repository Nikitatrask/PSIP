<?php
session_start(); // Инициализация сессии

// Проверка наличия сессионных переменных
if(isset($_SESSION['user_email']) && isset($_SESSION['user_phone'])) {
    $user_email = $_SESSION['user_email'];
    $user_phone = $_SESSION['user_phone'];

    // Вывод данных на странице
    echo "Данные пользователя:<br>";
    echo "Email: " . $user_email . "<br>";
    echo "Телефон: " . $user_phone . "<br>";
} else {
    // Если сессионные переменные отсутствуют, перенаправляем на страницу с формой
    header("Location: index.php");
    exit();
}
?>
