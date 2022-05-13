<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ПІБ</label>
        <input type="text" name="full_name" placeholder="Введіть своє повне ім'я">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пошта</label>
        <input type="email" name="email" placeholder="Введіть адресу своєї пошти">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <label>Підтвердження пароля</label>
        <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
        <button type="submit">Реєстрація</button>
        <p>
            У вас вже є обліковий запис? - <a href="login.php">Увійти</a>!
            <a href="index.html"><br>На головну</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>