<?php

include "../php/session_init.php";

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
        <a href="../../fitness%20website/html/index.html">Home</a>
        <a href="../php/eventi.php" >Eventi</a>
        <a href="../../fitness%20website/php/prenotazioni.php" style="background-color: red">Prenotazioni</a>
        <a href="../../fitness%20website/html/prezzi.html">Prezzi</a>
        <a href="../../fitness%20website/html/trainers.html">Allenatori</a>
        <a href="../../fitness%20website/php/profilo.php">Profilo</a>
        <a href="../../fitness%20website/html/index.html"><button type="button" class="btn btn-danger">Logout <?php echo $_SESSION['ruolo']?></a>
    </nav>

</header>

<section class="features" id="features">
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="../images/tabata.jpeg" alt="">
            </div>
            <div class="content">
                <img src="../images/" alt="">
                <h3>TABATA</h3>
                <p>Il protocollo Tabata nasce con l'obiettivo di migliorare le caratteristiche aerobiche e anaerobiche d'oltre soglia (anaerobica).</p>
                <a href="tabellaOrari.php" class="btn">Prenotati</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/yoga.jpeg" alt="">
            </div>
            <div class="content">
                <img src="../images/" alt="">
                <h3>YOGA</h3>
                <p>Attività che comprende ginnastica del corpo e della respirazione, disciplina psicofisica finalizzata alla meditazione e/o al rilassamento</p>
                <a href="#" class="btn">Prenotati</a>
            </div>

        </div>

        <div class="box">
            <div class="image">
                <img src="../images/functional.jpeg" alt="">
            </div>
            <div class="content">
                <img src="../images/" alt="">
                <h3>FUNCTIONAL</h3>
                <p>Esercizi a corpo libero che mirano a migliorare quelle capacità del corpo quali forza, potenza, velocità coordinazione, agilità, equilibrio.</p>
                <a href="#" class="btn">Prenotati</a>
            </div>

        </div>
        <div class="box">
            <div class="image">
                <img src="../images/spinning.jpeg" alt="">
            </div>
            <div class="content">
                <img src="../images/" alt="">
                <h3>SPINNING</h3>
                <p>Attività fitness aerobica/anaerobica che si svolge in una classe con più persone, ovvero in gruppo, in sella a una bicicletta stazionaria chiamata anche SpinBike.</p>
                <a href="#" class="btn">Prenotati</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="../images/crossfit.jpeg" alt="">
            </div>
            <div class="content">
                <img src="../images/" alt="">
                <h3>CROSSFIT</h3>
                <p>Allenamento e condizionamento muscolare che usa diversi movimenti funzionali ad alta intensità.Allena il sistema cardiovascolare, migliora la condizione fisica e sviluppa le tue capacità sportive.</p>
                <a href="#" class="btn">Prenotati</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="../images/boxe.jpeg" alt="">
            </div>
            <div class="content">
                <img src="../images/" alt="">
                <h3>BOXE</h3>
                <p>Il pugilato è uno degli sport da combattimento più antichi e noti, che prevede l'incontro tra due atleti diversi dentro un campo da combattimento denominato ring</p>
                <a href="#" class="btn">Prenotati</a>
            </div>
        </div>


    </div>
    <!--<div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(../images/tabata.jpeg) no-repeat;">
                <div class="content">
                    <span>TABATA</span>
                    <h4>Il protocollo Tabata nasce con l'obiettivo di migliorare le caratteristiche aerobiche e anaerobiche d'oltre soglia (anaerobica). </h4>
                    <a href="#" class="btn">Prenotati</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(../images/yoga.jpeg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(../images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

        </div>


        <div class="swiper-pagination"></div>

    </div>
-->
</section>