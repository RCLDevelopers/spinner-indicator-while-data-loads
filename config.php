<?php
    $connection = new mysqli("localhost","root","","zangticssp");
    if (!$connection) {
        die("Error in database connection". $connection->connect_error);
    }
?>
