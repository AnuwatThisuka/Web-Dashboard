<?php
     try{
       $HOST_NAME = "localhost";
       $DB_NAME = "sncdashboard";
       $USER = "root";
       $PASSWORD = "";

       $PDO = new PDO("mysql:host=" . $HOST_NAME . ";dbname=" . $DB_NAME . ";charset=utf8", $USER, $PASSWORD);
     } catch (PDOException $erro){
       echo "ไม่สามรถเชื่อมตอ่ฐานข้อมูลได้ " .$erro->getMessage();
     }
?>
