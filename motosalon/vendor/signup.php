<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `user` (`full_name`, `login`, `email`, `password`, `rol`) VALUES ('$full_name', '$login', '$email', '$password', NULL)");

        $_SESSION['message'] = 'Реєстрація пройшла успішно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../register.php');
    }

?>
