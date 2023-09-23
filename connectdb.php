<?php
    //ไฟล์นี้จะเป็นไฟล์ที่ใช้ในการ connect ไปที่ database 
    //เพื่อที่จะได้ update dalete insert select ต่อไป

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sau_db";

    // Create Connect to Database
    $conn = new mysqli($host , $username , $password , $dbname);
    
    //Check Connection 
    if($conn -> connect_error){
        die("Connection Failed" . $conn -> connect_error);
    }

    //echo"Connection Successfully";

?>