<?php
include('config.php');

if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('location: ' . $site_Name . '/login.php');
}


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
}

$sql_d_select = "delete from results where id = '$id'";

$select_s_query = mysqli_query($conn, $sql_d_select);

if ($select_s_query) {
    header('location: ' . $site_Name . '/index.php');
}