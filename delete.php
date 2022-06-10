<?php 
   require 'header.php';
   if(isset($_POST['deletebtn'])){
    $connect = mysqli_connect("localhost","root","","rdbms") or die("not connect");
    $stu_id = $_POST['sid'];
    $sql = "delete from tblstud_info where rno = {$stu_id}";
    $result = mysqli_query($connect,$sql) or die("Query Unscessfull");
    header("Location: http://localhost/crudapp/index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATEING</title>
    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .submit{
            border-radius: 5px;
            background-color: rgb(82, 122, 122);
            border: 2px solid #85adad;
            color: white;
            margin-bottom: 20px;
        }
        form{
            background-color: rgb(179, 204, 204);
            padding-left: 70px;
            padding-top: 40px;
            margin-bottom: 30px;
            border-radius: 15px;
        }
        body{
            background-color: rgb(240, 245, 245);
        }
        h6{
            color:red;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        <h2 class="p-3">Edit Record</h2>
        <form class="offset-2" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="row">
            <div>
                <b>Roll_No :</b> <input class="form-control" type="text" name="sid">
                <input type="submit" name="deletebtn" class="submit px-2 mt-3 " value="Delete">
            </div>
        </div>
        </form>