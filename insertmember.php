<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member - SAU 2020</title>
</head>
<body>
    <h1>เพิ่มข้อมูล</h1>
    <hr>
    <form action="./insertdb.php" method="POST">
        ชื่อ : <input type="text" name="mem_name" id="" required>
        <br><br>
        Username : <input type="text" name="mem_username" id="" required>
        <br><br>
        Password : <input type="text" name="mem_password" id="" required>
        <hr>
        <input type="submit" value="บึนทึก">
        <input type="reset" value="ยกเลิก">

    </form>
</body>
</html>