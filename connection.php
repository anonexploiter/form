<?php
    $dbuser = "root";
    $dbpass = "";
    $dbname = "secure_coding";
    $host = "localhost";
    $connection = mysqli_connect($host, $dbuser, $dbpass, $dbname) or die("Connection Failed: ".mysqli_connect_errno());   
    error_reporting(0); 

?>