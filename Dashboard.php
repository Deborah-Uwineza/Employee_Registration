<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
$sql ="SELECT DISTINCT(Client_Name) AS NumberOfClient FROM `error` where Client_Name != ''";
$sql1="SELECT DISTINCT (DESI) AS NumberOfError FROM `error` where DESI!=''";
$sql2="SELECT DISTINCT (User) AS NumberOfUser FROM `error` where User!=''";
$sql3 = "SELECT DISTINCT(Version)  FROM `error` where Version!=''";
$sql4 = "SELECT DISTINCT(HEURE) FROM `error` where HEURE!=''";
$sql5 = "SELECT DISTINCT(Application) FROM `error` where Application!=''";
include_once("conn.php");
$result = mysqli_query($con, $sql);
$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);
$version = mysqli_query($con,$sql3);
$DAY =  mysqli_query($con,$sql4);
$APP = mysqli_query($con,$sql5);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<nav class="navbar navbar-light" style="background-color: #e3f2fd;" >
        <h1>Dashboard</h1>
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
        </nav>
     <br><br>
<!--     <div class="card border-primary mb-3" style="align-items: center">-->
     <div class="row" style="align-items: center">
        <div class="col-sm-3 col-md-6 col-lg-4">
          <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-body text-primary">
            <h5 class="card-title">CLIENT</h5>
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
            <a href="Client.php" class="btn btn-outline-primary">
                <td>We have 
                <?php 
                if ($result) {
                    $nums=mysqli_num_rows($result);
                    echo $nums;
                    while ($row = mysqli_fetch_assoc($result)) {
                       $Client_Name = $row['Client_Name'];
                       echo '<tr>
                    
                     <td>'.$Client_Name.'</td>
                        </tr>';
                    }}
            
            ?>Client has Errors </td>
            </a>
          </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4" >
        <div class="card border-success mb-3" style="max-width: 18rem;">
          <div class="card-body text-success">
            <h5 class="card-title">VERSION</h5>
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
            <a href="version.php" class="btn btn-outline-success">
            <?php 
                if ($version) {
                    $num2=mysqli_num_rows($version);
                    echo $num2;
                    while ($row = mysqli_fetch_assoc($result1)) {
                       $Version = $row['Version'];
                       echo '<tr>
                    
                     <td>'.$Version.'</td>
                        </tr>';
                    }}
            
            ?>Version
            </a>
          </div>
        </div>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4">
        <div class="card border-danger mb-3" style="max-width: 18rem;">
          <div class="card-body text-danger">
            <h5 class="card-title">APPLICATION</h5>
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
            <a href="App.php" class="btn btn-outline-danger">
            <?php 
                if ($APP) {
                    $nums=mysqli_num_rows($APP);
                    echo $nums;
                    while ($row = mysqli_fetch_assoc($result)) {
                       $Application = $row['Application'];
                       echo '<tr>
                    
                     <td>'.$Application.'</td>
                        </tr>';
                    }}
            
            ?>
            </a>
          </div>
        </div>
        </div>
    </div>
         <div class="row">
        <div class="col-sm-3 col-md-6 col-lg-4">
        <div class="card border-warning mb-3" style="max-width: 18rem;">
          <div class="card-body text-warning">
            <h5 class="card-title">ERRORS</h5>
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
            <a href="Error.php" class="btn btn-outline-warning"> Number of Error
            <?php 
                if ($result1) {
                    $num=mysqli_num_rows($result1);
                    echo $num;
                    while ($row = mysqli_fetch_assoc($result1)) {
                       $DESI = $row['DESI'];
                       echo '<tr>
                    
                     <td>'.$DESI.'</td>
                        </tr>';
                    }}
            
            ?>
            </a>
          </div>
        </div>
        </div>
   
       
        <div class="col-sm-3 col-md-6 col-lg-4">
        <div class="card border-info mb-3" style="max-width: 18rem;">
          <div class="card-body text-info">
            <h5 class="card-title">DAYS</h5>
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
            <a href="DAY.php" class="btn btn-outline-info">
            <?php 
                if ($DAY) {
                    $nums=mysqli_num_rows($DAY);
                    echo $nums;
                    while ($row = mysqli_fetch_assoc($result)) {
                       $HEURE = $row['HEURE'];
                       echo '<tr>
                    
                     <td>'.$HEURE.'</td>
                        </tr>';
                    }}
            
            ?>
            </a>
          </div>
        </div>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-4">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
          <div class="card-body text-dark">
            <h5 class="card-title">USER</h5>
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
            <a href="UserError.php" class="btn btn-outline-dark">
                 <?php 
                if ($result2) {
                    $num1=mysqli_num_rows($result2);
                    echo $num1;
                    while ($row = mysqli_fetch_assoc($result2)) {
                       $User = $row['User'];
                       echo '<tr>
                    
                     <td>'.$User.'</td>
                        </tr>';
                    }}
            ?></a>
          </div>
        </div>
        
            </div>
    </div>
      </div>