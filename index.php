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
    // global $bouquets;

    // в аргумент функции необходимо передать глобальную переменную подключения, т.к. внутри функции ее не видно
    // $bouquets = getBouquets();
    // echo json_encode($bouquets, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    // echo $bouquets;

    // return json_encode($bouquets, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    // echo '<pre>';
    // print_r($bouquets);
    // echo '</pre>';



    // запрос данных
    // $mysqli->real_query("SELECT * FROM bouquets_list");
    // $result = $mysqli->use_result();

    // вывод информации из БД
    // while ($row = $result->fetch_assoc()) {
    //     echo "id = " . $row['id'] . "\n";
    //     echo "name = " . $row['name'] . "\n";
    //     echo "price = " . $row['price'] . "\n";
    //     echo "description = " . $row['description'] . "\n";
    // }

    // $num = mysql_num_rows($result);
    // echo $result;
?>