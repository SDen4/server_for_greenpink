<?php
    // connecting to BD
    require_once 'connecting.php';
?>

<?php
    $http_origin = $_SERVER['HTTP_ORIGIN'];
    if ($http_origin == "http://localhost:8082") {header("Access-Control-Allow-Origin: $http_origin");}

    // it solve the problem of displaying international characters
    $mysqli->set_charset('utf8');

    if(isset($_POST["bouquetName"]) && isset($_POST["bouquetPrice"]) && isset($_POST["bouquetDescription"]) && isset($_POST["bouquetPic"])) {
        $new = "INSERT INTO `bouquets_list` (`name`, `price`, `description`, `pic`) VALUES ('{$_POST["bouquetName"]}', '{$_POST["bouquetPrice"]}', '{$_POST["bouquetDescription"]}', '{$_POST["bouquetPic"]}')";
        if(mysqli_query($mysqli, $new)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $new . "<br>" . mysqli_error($mysqli);
        };
    }
?>