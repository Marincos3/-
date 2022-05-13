<?php

    $connect = mysqli_connect('localhost', 'root', '', 'moto_salon');

    if (!$connect) {
        die('Помилка в підключеннї до бази даних');
    }