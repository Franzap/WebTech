
<?php

include "../php/session_init.php";
include "../php/footer.php";

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



<!-- START FOOTER -->
<?php footer(); ?>
<!-- END FOOTER -->


</body>
</html>