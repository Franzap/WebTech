<?php
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

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <br> <br> <br> <br>

    <h1 class="heading"> <span>daily posts</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../images/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="../images/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- blogs section ends -->


<!-- START FOOTER -->
<?php footer(); ?>
<!-- END FOOTER -->


</body>
</html>
<!-- footer section ends -->