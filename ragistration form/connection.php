<?php
$uname = "root";
$password = "";
$sname = "localhost";
$db_name = "ragistration";

$con = mysqli_connect($sname,$uname,$password,$db_name);

if(!$con){
    echo "connection Fail";
}

?>