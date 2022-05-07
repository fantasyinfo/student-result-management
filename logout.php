<?php

include('config.php');
session_destroy();

header('location: ' . $site_Name . '/login.php');