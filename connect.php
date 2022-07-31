 <?php
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "login");



$con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($con) {
//echo "Connection successfully";
}
else {
    die(mysqli_error($con));
}

?>