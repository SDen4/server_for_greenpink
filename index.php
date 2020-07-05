<?php
    // connecting to BD
    require_once 'connecting.php';
?>

<?php
    // permission for localhost
    $http_origin = $_SERVER['HTTP_ORIGIN'];
    if ($http_origin == "http://localhost:8082" || $http_origin == "http://localhost/list.php") {header("Access-Control-Allow-Origin: $http_origin");}

    // it solve the problem of displaying international characters
    $mysqli->set_charset('utf8');

    // function to ger information from DB
    function getBouquets() {

        // instead of pushing connecting var to function argument, which is global one
        // I declare this var as a global inside function
        global $mysqli;

        // select all information in DB to query
        $sql  = 'SELECT * FROM `bouquets_list`';

        //query to DB
        $result = mysqli_query($mysqli, $sql);

        // convertation received from DB information to array
        // MYSQLI_ASSOC - constant for correct displaying of the array
        $bouquets = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $bouquets;
    };
?>