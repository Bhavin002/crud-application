<?php
    require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
    body{
      background-color: rgb(240, 245, 245);
    }
    table,
    th,
    td {
        border: 1px solid black;

    }
    a{
        text-decoration: none;
        color:black;
        
    }
    a:hover{
        text-decoration: none;
        color:black;
    }
    .edit{
        padding: 2px 2px;
        background-color: rgb(255, 163, 26);
        border-radius: 4px;
    }
    .delete{
        padding: 2px 2px;
        background-color: rgb(255, 51, 51);
        border-radius: 4px;
    }
    </style>
</head>
<body>
        <?php
            $connect = mysqli_connect("localhost","root","","rdbms") or die("not connect");
            $sql = "select * from tblstud_info join tbldept where tblstud_info.dno = tbldept.dno order by fname";
            $result = mysqli_query($connect,$sql) or die("Query Unscessfull");

            if(mysqli_num_rows($result)>0) {
        ?>
    <div class="container-fluid">
        <h2 class="p-3">All Records</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Rno</th>
      <th scope="col">Fname</th>
      <th scope="col">Sname</th>
      <th scope="col">Depatment</th>
      <th scope="col">Sem</th>
      <th scope="col">Contact_no</th>
      <th scope="col">M/L</th>
      <th scope="col">Bdate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
        while($row = mysqli_fetch_assoc($result))
        {
      ?>
    <tr>
      <th scope="row"><?php echo $row['rno'] ?></th>
      <td><?php echo $row['fname'] ?></td>
      <td><?php echo $row['sname'] ?></td>
      <td><?php echo $row['dname'] ?></td>
      <td><?php echo $row['sem'] ?></td>
      <td><?php echo $row['contact_no'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><?php echo $row['bdate'] ?></td>
      <td>
          <a href="edit.php?sid=<?php echo $row['rno'] ?>" class="edit">Edit</a>
          <a href="delete-inline.php?sid=<?php echo $row['rno'] ?>" class="delete">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    <?php }else{
    echo "<h2>Records dose not found</h2>";

    } 
    mysqli_close($connect); ?>
</body>
</html>