<?php

    $host = "127.0.0.1";
    $dbuser = "admin";
    $dbpwd = "12345678";
    $dbname = "webphp";

    $conn = mysqli_connect($host,$dbuser,$dbpwd,$dbname,3306);
    if($conn){
        echo "success";
    }else{
        echo "error";
    }
?>