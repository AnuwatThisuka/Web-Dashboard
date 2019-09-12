<?php
   include('insert_Db.php');
/*สถานะการทำงาน*/
   $Machine1 = $_GET['Machine1'];
   $Machine2 = $_GET['Machine2'];
   $Machine3 = $_GET['Machine3'];
   /*จำนวนงานที่นับได้*/
   $StatusMachine1 = $_GET['StatusMachine1'];
   $StatusMachine2 = $_GET['StatusMachine2'];
   $StatusMachine3 = $_GET['StatusMachine3'];

   $sql = "INSERT INTO snc (Machine1,Machine2,Machine3,StatusMachine1,StatusMachine2,StatusMachine3)
          VALUES (:Machine1,:Machine2,:Machine3,:StatusMachine1,:StatusMachine2,:StatusMachine3)";

   $stmt = $PDO->prepare($sql);
   $stmt->bindParam(':Machine1',$Machine1);
   $stmt->bindParam(':Machine2',$Machine2);
   $stmt->bindParam(':Machine3',$Machine3);
   $stmt->bindParam(':StatusMachine1',$StatusMachine1);
   $stmt->bindParam(':StatusMachine2',$StatusMachine2);
   $stmt->bindParam(':StatusMachine3',$StatusMachine3);
   if($stmt->execute()){
       echo "บันทึกสำเร็จ";
   } else {
       echo "บันทึกไม่สำเร็จ";
   }
?>
