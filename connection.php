<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "games_crud_php";
    
    $connect = mysqli_connect($host,$user,$pass);

    mysqli_select_db($connect, $db);

    return $connect;

}



?>