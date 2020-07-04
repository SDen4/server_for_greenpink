<?php
    require 'index.php';

    $http_origin = $_SERVER['HTTP_ORIGIN'];
    if ($http_origin == "http://localhost:8082" || $http_origin == "http://localhost/list.php") {header("Access-Control-Allow-Origin: $http_origin");}

    $bouquets = getBouquets();
    echo json_encode($bouquets, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
?>