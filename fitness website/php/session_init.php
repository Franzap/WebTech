<?php

include 'connection.php';

session_start();


if($_SESSION['ruolo'] == "Admin") {
    header('Location: admin.php');
} else if($_SESSION['ruolo'] == "PT") {
    header('Location: pt.php');
}

?>