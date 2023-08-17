<?php
$con = new mysqli('localhost', 'root', '', 'yogicpractest_db');

if($con->connect_errno){
    echo "connection error" . mysqli_connect_error();
}
?>