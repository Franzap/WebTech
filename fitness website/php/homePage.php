<?php

include 'connection.php';

session_start();


if($_SESSION['ruolo'] == "Admin") {
    header('Location: admin.php');
} else if($_SESSION['ruolo'] == "PT") {
    header('Location: pt.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive fitness and gym website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<!-- header section starts      -->

<header class="header">

    <a href="../html/index.php" class="logo"> <span>L</span>ight<span>W</span>eight</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="../html/index.php" style="background-color: red">Home</a>
        <a href="../php/eventi.php">Eventi</a>
        <a href="../../fitness%20website/php/prenotazioni.php">Prenotazioni</a>
        <a href="../html/prezzi.php">Prezzi</a>
        <a href="../html/trainers.php">Allenatori</a>
        <a href="../../fitness%20website/php/profilo.php">Profilo</a>
        <a href="../html/index.php"><button type="button" class="btn btn-danger">Logout <?php echo $_SESSION['ruolo']?></a>
    </nav>

</header>
<body>
<div
<h1 style="color: white">AREA RISERVATA</h1>
    <h3>Ciao, <?php echo $_SESSION['Username']?> Benvenuto/a gentile utente</h3>
</div>
</body>