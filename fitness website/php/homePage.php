<?php
include_once("navbarCliente.php");
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

    <!-- START NAV -->
    <?php navbar(); ?>
    <!-- END NAV -->


</header>
<body>
<div
<h1 style="color: white">AREA RISERVATA</h1>
    <h3>Ciao, <?php echo $_SESSION['Username']?> Benvenuto/a gentile utente</h3>
</div>
</body>