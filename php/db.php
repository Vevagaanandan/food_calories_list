<?php

    define('SITEURL', 'http://localhost/food_calories_list');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-calories-list');

    // Database Connection
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

    // Selecting Database
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));


?>