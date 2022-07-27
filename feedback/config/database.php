<?php
    define('DB_HOST', 'host_name');
    define('DB_USER', 'db_user_name');
    define('DB_PASS', 'password');
    define('DB_NAME', 'db_name');

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if($conn->connect_error) {
        die('Coneection Failed ' . $conn->connect_error);
    }