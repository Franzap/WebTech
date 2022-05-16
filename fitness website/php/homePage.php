<?php include 'connection.php'?>

<?php session_start();?>

<?php

if($_SESSION['ruolo'] == "Admin"){
    header('Location: admin.php');
    exit();
} elseif($_SESSION['ruolo'] == "PT") {
    header('Location: pt.php');
    exit();
}  {
    header('Location: homePage.php');
    exit();
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

    <a href="index.html" class="logo"> <span>L</span>ight<span>W</span>eight</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.html"style="background-color: red">Home</a>
        <a href="about.html">Chi siamo</a>
        <a href="features.html">Features</a>
        <a href="prezzi.html">Prezzi</a>
        <a href="trainers.html">Allenatori</a>
        <a href="blogs.html">Blogs</a>
        <a href="login.html">Login</a>
    </nav>

</header>
<body>
<div
<h1>AREA RISERVATA</h1>
 style="text-decoration-color: white "
    <h3>Ciao, <?php echo $_SESSION['Username']?> Benvenuto/a gentile utente</h3>
</div>
</body>