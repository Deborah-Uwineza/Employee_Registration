<?php
$sql = "SELECT `ID_USER`, `USER_NAME`, `PWD_USER`, `NAME_USER`, `gender`, `ID_CLIENT`, `TITLE_USER`, `AUTHORISATION_USER`, `FEILD`, `EMAIL_USER`, `SIGNUP_DATE`, `ACTIVATE_USER`, `sales_op`, `CREATED_BY`, `GROUP_ID` FROM `aos_login_user`";
include_once("connect.php");
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee | List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  />
</head>
<body>
   <div class="container">
       <button class="btn btn-primary my-5"><a href="user.php"  class="text-light">Add User</a></button>
       <table class="table">
  <thead class="thead-dark">
    <tr>
        <th scope="col">ID_USER</th>
        <th scope="col">USER_NAME</th>
        <th scope="col">PWD_USER</th>
        <th scope="col">NAME_USER</th>
        <th scope="col">GENDER</th>
        <th scope="col">ID_CLIENT</th>
        <th scope="col">TITLE_USER</th>
        <th scope="col">AUTHORISATION_USER</th>
        <th scope="col">FEILD</th>
        <th scope="col">EMAIL_USER</th>
        <th scope="col">SIGNUP_DATE</th>
        <th scope="col">ACTIVATE_USER</th>
        <th scope="col">sales_op</th>
        <th scope="col">CREATED_BY</th>
        <th scope="col">GROUP_ID</th>

    </tr>
    </thead>
    <tbody>
    <?php
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            // echo("array: " . $row['ID_USER']);
            $ID_USER = $row['ID_USER'];
            $USER_NAME = $row['USER_NAME'];
            $PWD_USER = $row['PWD_USER'];
            $NAME_USER = $row['NAME_USER'];
            $gender = $row['gender'];
            $ID_CLIENT = $row['ID_CLIENT'];
            $TITLE_USER = $row['TITLE_USER'];
            $AUTHORISATION_USER = $row['AUTHORISATION_USER'];
            $FEILD = $row['FEILD'];
            $EMAIL_USER = $row['EMAIL_USER'];
            $SIGNUP_DATE = $row['SIGNUP_DATE'];
            $ACTIVATE_USER = $row['ACTIVATE_USER'];
            $Sales_op = $row['sales_op'];
            $CREATED_BY = $row['CREATED_BY'];
            $GROUP_ID = $row['CREATED_BY'];

            echo '<tr>
            <th scope="row">' . $ID_USER . '</th>
            <td>' . $USER_NAME . '</td>
            <td>' . $PWD_USER . '</td>
            <td>' . $NAME_USER . '</td>
            <td>' . $gender . '</td>
            <td>' . $ID_CLIENT . '</td>
            <td>' . $TITLE_USER . '</td>
            <td>' . $AUTHORISATION_USER . '</td>
            <td>' . $FEILD . '</td>
            <td>' . $EMAIL_USER . '</td>
            <td>' . $SIGNUP_DATE . '</td>
            <td>' . $ACTIVATE_USER . '</td>
            <td>' . $Sales_op . '</td>
            <td>' . $CREATED_BY . '</td>
            <td>' . $GROUP_ID . '</td>
            </tr>';
        }
}


?>
</tbody>
</table>
</div> 
</body>
</html>