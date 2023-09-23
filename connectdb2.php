<?php
    //ไฟล์นี้จะเป็นไฟล์ที่ใช้ในการ connect ไปที่ database แบบ PDO (PHP data object)
    //เพื่อที่จะได้ update dalete insert select ต่อไป

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sau_db";

    try{
        //Connect to Database
        $conn = new PDO("mysql:host = $host ; dbname = $dbname" , $username , $password);
        
        //Set error mode exception
        $conn -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        //echo "Connection Successfully 2";
    }catch(PDOException $ex){
        echo "Connection Fail: " . $ex -> getMessage();
    }

?>