<?php 
define("DB_NAME", "ua92backend");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_HOST", "localhost");
//connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
//connection error
if (!$connection) {
    die('Could not connect:'. mysqli_error($connection));
}
//connection to the database name
$db_selected = mysqli_select_db($connection, DB_NAME);
//connection error
if (!$db_selected){
    die('Could not connect:'.mysqli_error($connection));
}
?>