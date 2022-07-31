<?php
include 'connect.php';

if (isset($_POST['submit'])) 
{
  $USER_NAME = $_POST['userName'];
  $PASSWORD = $_POST['password'];
  $NAME_USER = $_POST['names'];
  $GENDER = $_POST['gender'];
  // $ID_CLIENT = $_POST['clientId'];
  $TITLE_USER = $_POST['title'];
  // $AUTHORISATION_USER = $_POST['authorisation'];
  // $FEILD = $_POST['field'];
  $EMAIL_USER = $_POST['email'];
  // $ACTIVATE_USER = $_POST['activate'];
  // $Sales_op = $_POST['sale'];
  // $CREATED_BY = $_POST['createdBy'];
  // $GROUP_ID = $_POST['groupId'];
  $sql = "INSERT INTO `aos_login_user`( `USER_NAME`, `PWD_USER`, `NAME_USER`, `gender`,`TITLE_USER`, `EMAIL_USER`) VALUES ('$USER_NAME','$PASSWORD','$NAME_USER','$GENDER','$TITLE_USER',
  '$EMAIL_USER')";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "<script>alert('Data insert successfull');</script>";
  //header("location:user.php");
  }
  else {
    die(mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  />
    <title>Employee | Registration</title>
</head>
<body>
  <div class="container">
  <form method="post">

  <h1>EMPLOYEE REGISTRATION</h1>
  
  <div class="form-group">
    <label for="exampleInputPassword1">NAMES</label>
    <input type="text" class="form-control"  placeholder="Enter names" name="names" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">TELEPHONE</label>
    <input type="tel" class="form-control" placeholder="Enter phone number" name="userName" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">EMAIL</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">GENDER</label>
    <select class="custom-select my-1 mr-sm-2" type="text" name="gender" autocomplete="off" >
    <option selected>Choose...</option>
    <option value="m">MALE</option>
    <option value="f">FEMALE</option>
  </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">USER TITLE</label>
    <input type="text" class="form-control" placeholder="Enter Title" name="title" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" class="form-control"  placeholder="Enter password" name="password" autocomplete="off">
  </div>


 

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">ID_CLIENT</label>
    <input type="text" class="form-control"  placeholder="Enter Client_Id" name="clientId" autocomplete="off">
  </div> -->



  <!-- <div class="form-group">
    <label for="exampleInputPassword1">AUTHORISATION_USER</label>
    <input type="text" class="form-control" placeholder="Enter Authorisation_User" name="authorisation" autocomplete="off">
  </div> -->

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">FIELD</label>
    <input type="text" class="form-control"  placeholder="Enter Field" name="field" autocomplete="off">
  </div> -->


 

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">SIGNUP_DATE</label>
    <input type="date" class="form-control"  placeholder="Enter Signup_Date" name="signup" autocomplete="off">
  </div> -->

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">ACTIVATE_USER</label>
    <select class="custom-select my-1 mr-sm-2" type="text" name="activate" autocomplete="off" >
    <option selected>Choose...</option>
    <option value="0">0</option>
    <option value="1">1</option>
  </select>
  </div> -->

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Sales_op</label>
    <input type="text" class="form-control"  placeholder="Enter Sales_op" name="sale" autocomplete="off">
  </div> -->
<!-- 
  <div class="form-group">
    <label for="exampleInputPassword1">CREATED_BY</label>
    <input type="text" class="form-control"  placeholder="Enter Created_by" name="createdBy" autocomplete="off">
  </div> -->

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">GROUP_ID</label>
    <select class="custom-select my-1 mr-sm-2" type="text" name="groupId" autocomplete="off" >
    <option selected>Choose...</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  </div>
   -->

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div> 
</body>
</html>