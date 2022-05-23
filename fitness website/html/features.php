
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

<!-- header section ends     -->

<!-- features section starts  -->

<section class="features" id="features">

    <br> <br> <br>

    <h1 class="heading"> <span>Gym Features</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="../images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="../images/icon-1.png" alt="">
                <h3>body building</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="../images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="../images/icon-2.png" alt="">
                <h3>gym for men</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="../images/icon-3.png" alt="">
                <h3>gym for women</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- features section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Link Utili</h3>
            <a class="links" href="#home">Home</a>
            <a class="links" href="#about">Chi Siamo</a>
            <a class="links" href="#features">Features</a>
            <a class="links" href="#pricing">Prezzi</a>
            <a class="links" href="#trainers">Allenatori</a>
            <a class="links" href="#blogs">Blogs</a>
        </div>

        <div class="box">
            <h3>Orari di Apertura</h3>
            <p> Lunedì : <i> 7:00am - 10:30pm </i> </p>
            <p> Martedì : <i> 7:00am - 10:30pm </i> </p>
            <p> Mercoledì : <i> 7:00am - 10:30pm </i> </p>
            <p> Giovedì : <i> 7:00am - 10:30pm </i> </p>
            <p> Venerdì : <i> 7:00am - 10:30pm </i> </p>
            <p> Sabato : <i> 7:00am - 10:30pm </i> </p>
            <p> Domenica : <i> Chiuso </i> </p>
        </div>

        <div class="box">
            <h3>Contatti</h3>
            <p> <i class="fas fa-phone"></i> +39 3896384427 </p>
            <p> <i class="fas fa-envelope"></i> luca98dilaudo@gmail.com </p>
            <p> <i class="fas fa-map"></i> L'Aquila, Italia - 66050 </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>

        </div>
        <div class="box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.5184380962746!2d13.40655521516849!3d42.352789379187385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132fd3017d0dac4f%3A0xb25683b7fda874e!2sVia%20Lanciano%2C%2013%2C%2067100%20L&#39;Aquila%20AQ!5e0!3m2!1sit!2sit!4v1651671578595!5m2!1sit!2sit" width="240" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</section>




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
<!-- footer section ends -->