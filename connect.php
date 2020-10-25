<?php
    $server = "localhost";
    $username="root";
    $password = "";
    $dbname = "onlinedating";
    $con = mysqli_connect($server,$username,$password,$dbname);
    if(!$con){
        die("connection to database failed due to" . mysqli_connect_error());
    }
    //echo "success";

?>