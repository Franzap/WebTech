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

<!-- header section ends     -->

<div class="login-wrap">
    <div class="login-html">

        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Accedi</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrati</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form method="post" action="../../fitness%20website/php/login.php">

                    <div class="group">
                        <br>
                        <label for="user" class="label"></label>
                        <input type="text" name="Username" placeholder="Username" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label"></label>
                        <input type="password" name="Password" placeholder="Password" class="input" data-type="password">
                    </div>

                    <div class="group">
                        <br><br>
                        <input type="submit" name="login" class="button" value="Accedi">

                    </div>
                    <div class="hr"></div>
                </form>
            </div>


            <div class="sign-up-htm">
                <form method="post"action="../../fitness%20website/php/register.php">
                    <div class="group">
                        <input  type="text" name="Email" placeholder="Email" class="input">
                    </div>
                    <div class="group">
                        <input id="user" type="text" name="Username" placeholder="Username" class="input">
                    </div>
                    <div class="group">
                        <input type="password" class="input" name="Password" placeholder="Password" data-type="password">
                    </div>
                    <div class="group">
                        <input id="pass" type="password" class="input" placeholder="Ripeti Password" data-type="password">
                    </div>

                    <div class="group">
                        <input type="submit" class="button" name="register" value="Registrati">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                        </label>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- footer section starts  -->


<!-- START FOOTER -->
<?php footer(); ?>
<!-- END FOOTER -->


</body>
</html>