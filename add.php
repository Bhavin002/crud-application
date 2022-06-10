<?php
    require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDING</title>
    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .semester{
            margin-top: 7px;
        }
        body{
            background-color: rgb(240, 245, 245);
        }
        form{
            background-color: rgb(179, 204, 204);
            padding-left: 70px;
            padding-top: 40px;
            margin-bottom: 30px;
            border-radius: 15px;
        }
        .submit{
            border-radius: 5px;
            background-color: rgb(82, 122, 122);
            border: 2px solid #85adad;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h2 class="p-4">Add New Record</h2>
<form class="offset-1" action="savedata.php" method="post">
    <div class="row">
    <div class="form-group col-md-3">
      <b>Roll_No :</b> <input type="text" class="form-control" name="rno" placeholder="Datatype-int" required>
    </div>
    <div class="form-group col-md-3">
       <b>First_Name :</b> <input type="text" class="form-control" name="fname" placeholder="Datatype-string" required>
    </div>
    <div class="form-group col-md-4">
       <b>Last_Name :</b> <input type="text" class="form-control" placeholder="Datatype-string" name="lname" required>
    </div>
    </div>
    <div class="row">
    <div class="col-md-3 mb-3">
      <label for="department"> <b>Department_Name :</b> </label>
      <select class="custom-select" name="department" required>
        <option selected disabled value="">Select Department</option>
        <?php
            $connect = mysqli_connect("localhost","root","","rdbms") or die("Not connect");
            $sql = "select * from tbldept";
            $result = mysqli_query($connect,$sql);
            
            while($row = mysqli_fetch_assoc($result))
            { 
        ?>
        <option value="<?php echo $row['dno']?>"><?php echo $row['dname']?></option>
        <?php } mysqli_close($connect) ?>
      </select>
    </div>
    <div class="form-group col-md-3">
       <b>Semester : </b> <input type="text" class="form-control semester" name="sem" placeholder="Datatype-int" required>
    </div>
    <div class="form-group col-md-4">
        <b>Contact_No :</b> <input type="text" class="form-control semester" name="phone" placeholder="Datatype-int" required>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-3">
    <b >Gender : </b>
                <section class="gender" required>
                    <label for="genderm">
                        <input type="radio" id="genderm" name="gender" value="male"> male <br>
                    </label>
                    <label for="genderf">
                        <input type="radio" id="genderf" name="gender" value="female"> female <br>
                    </label>
                </section>
      </div>
      <div class="form-group col-md-4">
      <b>Brith date : </b>
      <input type="date" name="bdate" min="1910-01-01" max="2023-01-01" class="p-2" required>
      </div>
      <div class="form-group semester  col-md-2">
          <input type="submit" value="Save" class="px-5 py-1 submit">
      </div>
      </div>
</form>

</div>
</body>
</html>