<?php 

$db_server ="sql203.infinityfree.com";
$db_user="if0_36009060";
$db_pass="k4H7J1O1evijp2";
$db_name="if0_36009060_bussinessdb";
$conn ="";
try{
$conn=mysqli_connect($db_server,
                    $db_user,
                    $db_pass,
                    $db_name);
}
catch(mysqli_sql_exception){
    echo "connection error";
}

?>