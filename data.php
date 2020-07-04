<!-- // var_dump($_FILES);

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
// }; -->

<!-- <h1>Загрузка файла пользователем</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="50000000">
    <input type="file" name="picture">
    <button>Upload</button>
</form> -->


<!-- // $login = 'admin';
// $password = '12345';

// if(isset( $_POST['login']) && isset($_POST['password']) ) {
//     $mylogin = $_POST['login'];
//     $mypassword = $_POST['password'];

//     if($login == $mylogin && $password == $mypassword) {
//         echo "Bingo!";
//         exit();
//     }
// }; -->

<!-- // $request_headers        = apache_request_headers();
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



<!-- [{"id":1,"name":"Букет привет","price":1990,"description":"Букет привет описание","pic":"{\"name\": \"Vasya\"}"},{"id":2,"name":"Букет Паштет","price":1350,"description":"описание букет паштет","pic":"{\"name\": \"Petya\"}"},{"id":3,"name":"Букет Крикет","price":999,"description":"описание букет крикет","pic":"{\"name\": \"Sasha\"}"}] -->


<!-- from list.php
require_once 'index.php';
    $http_origin = $_SERVER['HTTP_ORIGIN'];
    if ($http_origin == "http://localhost:8082" || $http_origin == "http://localhost/list.php") {header("Access-Control-Allow-Origin: $http_origin");}
    
    echo $bouquets; -->


<!-- [{"id":1,"name":"Букет привет","price":1990,"description":"Букет привет описание","pic":"{\"name\": \"Vasya\"}"},{"id":2,"name":"Букет Паштет","price":1350,"description":"описание букет паштет","pic":"{\"name\": \"Petya\"}"},{"id":3,"name":"Букет Крикет","price":999,"description":"описание букет крикет","pic":"{\"name\": \"Sasha\"}"}] -->
