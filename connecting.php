<?php
    // подключение к БД вариант №1
    // $mysqli = new mysqli("localhost", "user01", "pu1A3479!", "bouquets");
    // if ($mysqli->connect_errno) {
    //     echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    // }
    // echo $mysqli->host_info . "\n";


    //подключение к БД вариант №2
    // $mysqli = new mysqli("127.0.0.1", "user01", "pu1A3479!", "bouquets", 3306);

    // if ($mysqli->connect_errno) {
    //     echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    // }
    // echo $mysqli->host_info . "\n";

    // подключение к БД вариант №3
    $mysqli = mysqli_connect("localhost", "user01", "pu1A3479!", "bouquets");
    if(mysqli_connect_errno()) {
        echo 'Не удалось подключиться к MySQL: ('.mysqli_connect_errno().'): '.mysqli_connect_error();
        exit();
    };
?>