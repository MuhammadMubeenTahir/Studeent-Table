<?php
include 'config.php';
if(isset($_POST['submit'])){
   $r_number = $_POST['r_number'];
   $f_name = $_POST['f_name'];
   $l_name = $_POST['l_name'];
   $class = $_POST['class'];
   
   $sql = "insert into student (roll_num, first_name, last_name, class) Values ('" . $r_number . "','" . $f_name . "','" . $l_name . "','" . $class . "')";
   $result = mysqli_query($conn,$sql);
   if($result){
    header('location:index.php');
   }
   else{
    die(mysqli_error($conn));
   }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Roll Number</label>
    <input type="text" class="form-control" placeholder="Enter Your Roll Number" name="r_number">
  </div>
  <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="Enter Your First Name" name="f_name">
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Last Name" name="l_name">
  </div>
  <div class="mb-3">
    <label class="form-label">Class</label>
    <input type="text" class="form-control" placeholder="Enter Your Class" name="class">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>