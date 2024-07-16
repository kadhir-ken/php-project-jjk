<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql203.infinityfree.com');
define('DB_USERNAME', 'if0_36009060');
define('DB_PASSWORD', 'k4H7J1O1evijp2');
define('DB_NAME', 'if0_36009060_bussinessdb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>