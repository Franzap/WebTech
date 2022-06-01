<?php

include 'connection.php';

session_start();


if($_SESSION['Ruolo'] == "Admin") {
    header('Location: admin.php');
} else if($_SESSION['Ruolo'] == "PT") {
    header('Location: pt.php');
}

?>