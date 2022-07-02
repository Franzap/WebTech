<?php

    $servername = "localhost";
    $username = "root";
    $password = "MYSQLsdAbdcf3!";
    $databasename = "db_lightweight";

    // Connessione
    $connection = new mysqli($servername, $username, $password, $databasename);

    // Check di Connessione
    if ($connection->connect_error) {
        die("Connection error: " . $connection->connect_error);
    }

?>