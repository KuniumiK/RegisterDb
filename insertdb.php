<?php
    require("./connectdb.php");//include();

    function varidateDataForm($data){
        $data = trim($data); // จัดการช่องว่างหน้า - หลังออก
        $data = stripslashes($data); //จัดการ / ที่อาจปนมากับข้อมูล
        $data = htmlspecialchars($data); //จัดการอักขระพิเศษที่ปนมากับข้อมูล
        return $data;
    }

    //ตรวจสอบว่าเป็นการส่งข้อมูลด้วยวิธีการแบบ POST หรือไม่
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mem_name = $_POST["mem_name"];
        $mem_username = $_POST["mem_username"];
        $mem_password = $_POST["mem_password"];

        //ลอง debug ค่าออกมาดูก่อนว่าข้อมูลที่ส่งมามีไหม
        //echo $mem_name . "<br>" . $mem_username . "<br>" . $mem_password . "<br>";

        //เอาข้อมูลมาบันทึกลงฐานข้อมูล
        //สร้างตัวแปรเก็บคำสั่ง SQL - Insert
        $query_str = "INSERT INTO member_tb (mem_name , mem_username , mem_password)";
        $query_str .= "VALUES ('".$mem_name."' , '".$mem_username."' , '".$mem_password."')";

        //สั่งให้ SQL - INSERT ทำงาน
        if(mysqli_query($conn , $query_str)){
            echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
        }else{
            echo mysqli_error($conn);
            echo "พบปัญหาในการเพิ่มข้อมูล กรุณาลองใหม่อีกครั้ง หรือติดต่อ service@sau.ac.th";
        }

        mysqli_close($conn);

    }

?>