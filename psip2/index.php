<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
    <h2>Заполните форму</h2>
    <form action="process.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" required>
        <br>
        <label for="phone">Телефон:</label>
        <input type="tel" name="phone" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
