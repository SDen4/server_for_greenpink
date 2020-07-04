<?php

// var_dump($_FILES);

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     if($_FILES["picture"]["error"] == 0){
//         $tmpName = $_FILES["picture"]["tmp_name"];
//         if(move_uploaded_file($tmpName, "uploads/".time().".".pathinfo($_FILES["picture"]["name"])["extension"])){
//             echo "File saved";
//         }else{
//             echo "Can not save this file!!!";
//         };
//     }else{
//         echo "Upload error! Error code: ".$_FILES["picture"]["error"];
//     };
// };

// <h1>Загрузка файла пользователем</h1>
// <form method="POST" enctype="multipart/form-data">
//     <input type="hidden" name="MAX_FILE_SIZE" value="50000000">
//     <input type="file" name="picture">
//     <button>Upload</button>
// </form>


// $login = 'admin';
// $password = '12345';

// if(isset( $_POST['login']) && isset($_POST['password']) ) {
//     $mylogin = $_POST['login'];
//     $mypassword = $_POST['password'];

//     if($login == $mylogin && $password == $mypassword) {
//         echo "Bingo!";
//         exit();
//     }
// };

// $request_headers        = apache_request_headers();
// $http_origin            = $request_headers['Origin'];
// $allowed_http_origins   = array(
//                             "http://myDumbDomain.example",
//                             "http://anotherDumbDomain.example",
//                             "http://localhost",
//                             "http://localhost:8082"
//                           );
// if (in_array($http_origin, $allowed_http_origins)){  
//     @header("Access-Control-Allow-Origin: ".$http_origin);
// } -->



//from list.php
// require_once 'index.php';
//     $http_origin = $_SERVER['HTTP_ORIGIN'];
//     if ($http_origin == "http://localhost:8082" || $http_origin == "http://localhost/list.php") {header("Access-Control-Allow-Origin: $http_origin");}
//     echo $bouquets;


// [{"id":1,"name":"Букет привет","price":1990,"description":"Букет привет описание","pic":"{\"name\": \"Vasya\"}"},{"id":2,"name":"Букет Паштет","price":1350,"description":"описание букет паштет","pic":"{\"name\": \"Petya\"}"},{"id":3,"name":"Букет Крикет","price":999,"description":"описание букет крикет","pic":"{\"name\": \"Sasha\"}"}]

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
    // $mysqli = mysqli_connect("localhost", "user01", "pu1A3479!", "bouquets");
    // if(mysqli_connect_errno()) {
    //     echo 'Не удалось подключиться к MySQL: ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    //     exit();
    // };


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