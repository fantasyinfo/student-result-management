<?php

$site_Name = "http://localhost/fifteenresults";
$host = 'localhost';
$user = 'root';
$password = 'mysql';
$dbname = 'fifteenresults';

if ($conn = mysqli_connect($host, $user, $password, $dbname)) {
    //echo "Database Connected";
    session_start();
} else {
    echo " Database Not Connected, Please Check Config.php File.";
}