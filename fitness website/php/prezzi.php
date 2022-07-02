
<?php

include "../php/session_init.php";
include "../php/footer.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive fitness and gym website design</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<!-- header section starts      -->

<header class="header">

    <a href="index.php" class="logo"> <span>L</span>ight<span>W</span>eight</a>

    <nav class="navbar">
        <a href="../html/index.php" style="background-color: red">Home</a>
        <a href="../html/about.php">Chi siamo</a>
        <a href="../html/features.php">Features</a>
        <a href="../html/prezzi.php">Prezzi</a>
        <a href="../html/trainers.php">Allenatori</a>
        <a href="../html/blogs.php">Blogs</a>
        <a href="../html/login.php">Login</a>
    </nav>


</header>
<ng-component></ng-component>

<!-- header section ends     -->

<!-- pricing section starts  -->
<section class="pricing" id="pricing">

    <div class="plan">
        <h3>Piano Economico</h3>
        <div class="price"><span>€</span>30<span>/mese</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i> Cardio</p>
            <p> <i class="fas fa-check"></i> Sala Pesi </p>
        </div>
        <a href="#" class="btn">Prenotati</a>
    </div>

    <div class="plan basic">
        <h3>Piano Base</h3>
        <div class="price"><span>€</span>50<span>/mese</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i> Personal Trainer</p>
            <p> <i class="fas fa-check"></i> Cardio</p>
            <p> <i class="fas fa-check"></i> Sala Pesi </p>
            <p> <i class="fas fa-check"></i> Accesso ad un singolo corso a scelta </p>

        </div>
        <a href="#" class="btn">Prenotati</a>
    </div>

    <div class="plan">
        <h3>Piano Premium </h3>
        <div class="price"><span>€</span>80<span>/mese</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i> personal trainer </p>
            <p> <i class="fas fa-check"></i> cardio  </p>
            <p> <i class="fas fa-check"></i> sala pesi </p>
            <p> <i class="fas fa-check"></i> dieta </p>
            <p> <i class="fas fa-check"></i> risultati complessivi </p>
            <p> <i class="fas fa-check"></i> Accesso a tutti i corsi </p>
        </div>
        <a href="#" class="btn">Prenotati</a>
    </div>

    <div class="plan">
        <h3>Corso Tabata</h3>
        <div class="price"><span>€</span>25<span>/mese</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i>Accesso illimitato al corso Tabata </p>

        </div>
        <a href="#" class="btn">Prenotati</a>
    </div>
    <div class="plan">
        <h3>Corso Crossfit</h3>
        <div class="price"><span>€</span>25<span>/mese</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i>Accesso illimitato al corso Crossfit </p>

        </div>
        <a href="#" class="btn">Prenotati</a>
    </div>

</section>

<!-- footer section starts  -->


<!-- START FOOTER -->
<?php footer(); ?>
<!-- END FOOTER -->


</body>
</html>