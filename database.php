<?php
//configuration
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PWD", "");
define("DB_NAME", "aem");

//database connection
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

if(!$conn) {
    die ("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>

