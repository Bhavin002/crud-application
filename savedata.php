<?php
    $srno = $_POST['rno'];
    $sfname = $_POST['fname'];
    $slname = $_POST['lname'];
    $sdepartment = $_POST['department'];
    $ssem = $_POST['sem'];
    $sphone = $_POST['phone'];
    $sgender = $_POST['gender'];
    $sbdate = $_POST['bdate'];

   $connect = mysqli_connect("localhost","root","","rdbms");
   $sql = "insert into tblstud_info(rno,fname,sname,dno,sem,contact_no,gender,bdate) values 
   ('{$srno}','{$sfname}','{$slname}','{$sdepartment}','{$ssem}','{$sphone}','{$sgender}','{$sbdate}')";
   $result = mysqli_query($connect,$sql) or die ("Query Unseccefull");
   header("Location: http://localhost/crudapp/index.php");

   mysqli_close($connect);
?>