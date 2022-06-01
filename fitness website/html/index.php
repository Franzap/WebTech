<?php

include "../php/session_init.php";
include_once("../php/footer.php");
include "navbarGenerica.php"

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

<!-- START NAVBAR -->
<?php navbarGenerica(); ?>
<!-- END NAVBAR -->

<!-- header section ends     -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(../images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(../images/home-bg-2.jpg) no-repeat;">
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

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="../images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>about us</span>
        <h3 class="title">Every day is a chance to become better</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione quia accusamus dicta inventore nobis obcaecati vero odio, id dolorum. Consequatur ex, aperiam deserunt nostrum perferendis illum unde ipsa? Consequatur, distinctio?</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>body and mind</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>healthy life</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>strategies</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>workout</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
        </div>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span>gym features</span> </h1>

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

<!-- pricing section starts  -->

<section class="pricing" id="pricing">


    <div class="plan">
        <h3>Piano Economico</h3>
        <div class="price"><span>€</span>30<span>/mese</span></div>
        <div class="list">
        <p> <i class="fas fa-check"></i> Cardio</p>
        <p> <i class="fas fa-check"></i> Sala Pesi </p>
        </div>
        <a href="#" class="btn">Scopri i Prezzi</a>
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
       <a href="#" class="btn">get started</a>
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
       <a href="#" class="btn">get started</a>
    </div>

    <div class="plan">
        <h3>Corso Tabata</h3>
        <div class="price"><span>€</span>25<span>/mese</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i>Accesso illimitato al corso Tabata </p>

        </div>
        <a href="#" class="btn">Scopri i Prezzi</a>
    </div>

</section>

<!-- pricing section ends -->

<!-- trainers section starts  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../images/trainer-1.jpg" alt="">
            <div class="content">
                <span>Trainer</span>
                <h3>Francesco Zappacosta</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../images/trainer-2.jpg" alt="">
            <div class="content">
                <span>Trainer</span>
                <h3>Lorenzo Salvi</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../images/trainer-3.jpg" alt="">
            <div class="content">
                <span>Trainer</span>
                <h3>Luca Di Laudo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../images/trainer-4.jpg" alt="">
            <div class="content">
                <span>Trainer</span>
                <h3>Gianna Di Giovanni</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- trainers section ends -->

<!-- banner section starts  -->

<section class="banner">

    <span>join us now</span>
    <h3>get upto 50% discount</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat architecto nesciunt aut sapiente quis inventore quam vitae quod illum incidunt.</p>
    <a href="#" class="btn">get discount</a>

</section>

<!-- banner section ends -->

<!-- review section starts  -->

<section class="review">

    <div class="information">
        <span>testimonials</span>
        <h3>what our clients says</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptas praesentium asperiores fugiat, excepturi odit obcaecati a voluptatibus earum quisquam?</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="../images/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="../images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="../images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="../images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

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