<?php
    $connect = mysqli_connect("localhost","root","","rdbms") or die("not connect");
    $stu_id = $_GET['sid'];
    $sql = "delete from tblstud_info where rno = {$stu_id}";
    $result = mysqli_query($connect,$sql) or die("Query Unscessfull");
    header("Location: http://localhost/crudapp/index.php");
?>