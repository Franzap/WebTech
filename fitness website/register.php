<?php

include_once "connection.php";


if ( !isset($_POST['Email'], $_POST['Username'], $_POST['Password']) ) {
    // Could not get the data that should have been sent.
    exit('Please fill all fields!');
} else {
    // echo "info: " . $_POST['Email'] . $_POST[Username'] . $_POST['password'];
}

$query = "INSERT INTO Utente (Email, Password, Username) 
                VALUES ('" . $_POST['Email'] . "', '" . $_POST['Password'] . "',
                        '" . $_POST['Username'] . "')";


if ($connection->query($query) === TRUE) {

    // redirect alla pagina della lista di todo
    //header("Location: login.php");
    echo "Ciao";

} else {

    // check errore
    echo "Errore: " . $query . '<br />' . $connection->connect_error;

}



?>