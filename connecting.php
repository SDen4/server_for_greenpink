<?php
    // подключение к БД
    $mysqli = mysqli_connect("localhost", "user01", "pu1A3479!", "bouquets");
    if(mysqli_connect_errno()) {
        echo 'Не удалось подключиться к MySQL: ('.mysqli_connect_errno().'): '.mysqli_connect_error();
        exit();
    };
?>