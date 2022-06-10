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
   $sql = "update tblstud_info set rno='{$srno}',fname='{$sfname}',sname='{$slname}',dno='{$sdepartment}',sem='{$ssem}',contact_no='{$sphone}',gender='{$sgender}',bdate='{$sbdate}' where rno = {$srno}";
   $result = mysqli_query($connect,$sql) or die ("Query Unseccefull");
   header("Location: http://localhost/crudapp/index.php");

   mysqli_close($connect);
?>