<?php
    $username = "root";
    $password = "M@sters15intern";
    $database = "yelp-dataset";
    $localhost = "127.0.0.1";
    
    $initialQuery = "SELECT * FROM businessSeasons where city='Phoenix' LIMIT 5";
    $seasonQuery = "SELECT DISTINCT season FROM businessSeasons";
?>