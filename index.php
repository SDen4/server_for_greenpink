<?php
    // connecting to BD
    require_once 'connecting.php';
?>

<?php
    // разрешение для localhost
    $http_origin = $_SERVER['HTTP_ORIGIN'];
    if ($http_origin == "http://localhost:8082" || $http_origin == "http://localhost/list.php") {header("Access-Control-Allow-Origin: $http_origin");}

    // it solve the problem of displaying international characters
    $mysqli->set_charset('utf8');

    // функция получения информации из БД
    function getBouquets() {

        // вместо того, чтобы в аргумент функции передавать переменную подключения, находящуюся в глобальной области видимости
        // объявляю внутри функции эту глобальную переменную
        global $mysqli;

        // выбор запрашиваемой из БД информации: всё
        $sql  = 'SELECT * FROM `bouquets_list`';

        // запрос в БД
        $result = mysqli_query($mysqli, $sql);

        // преобразование выводимой информации из БД в массив
        // MYSQLI_ASSOC - константа необходима для корректного отображения массива
        $bouquets = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $bouquets;
    };
?>