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

<section class="home" id="home">
    <div class="container-fluid bg-white no-padding-xs">
        <div class="container container-padded padding-vertical-big">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-gray-dark3 text-center font-size-xs-36px font-size-xs-27px">Per ogni tuo <span class="text-weight-400">obiettivo</span></h2>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="padding-horizontal-sm">
                        <a class="cursor-pointer block-link-scrolling-mobile" style="text-decoration: none;" data-toggle="modal" data-target="#modalTagInfo">
                            <img src="/ResourcePackages/VAI/assets/dist/images/forza.png" class="img-responsive" style="max-height: 352px;" />
                            <div class="text-uppercase text-22px text-center text-weight-400 letter-spacing-10px text-gray-dark3 margin-top-md margin-bottom-md font-size-xs-14px">Forza</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="padding-horizontal-sm">
                        <a class="cursor-pointer block-link-scrolling-mobile" style="text-decoration: none;" data-toggle="modal" data-target="#modalTagInfo">
                            <img src="/ResourcePackages/VAI/assets/dist/images/equilibrio.png" class="img-responsive" style="max-height: 352px;" />
                            <div class="text-uppercase text-22px text-center text-weight-400 letter-spacing-10px text-gray-dark3 margin-top-md margin-bottom-md font-size-xs-14px">equilibrio</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="padding-horizontal-sm">
                        <a class="cursor-pointer block-link-scrolling-mobile" style="text-decoration: none;" data-toggle="modal" data-target="#modalTagInfo">
                            <img src="/ResourcePackages/VAI/assets/dist/images/resistenza.png" class="img-responsive" style="max-height: 352px;" />
                            <div class="text-uppercase text-22px text-center text-weight-400 letter-spacing-10px text-gray-dark3 margin-top-md margin-bottom-md font-size-xs-14px">RESIsTENZA</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="padding-horizontal-sm">
                        <a class="cursor-pointer block-link-scrolling-mobile" style="text-decoration: none;" data-toggle="modal" data-target="#modalTagInfo">
                            <img src="/ResourcePackages/VAI/assets/dist/images/stabilita.png" class="img-responsive" style="max-height: 352px;" />
                            <div class="text-uppercase text-22px text-center text-weight-400 letter-spacing-10px text-gray-dark3 margin-top-md margin-bottom-md font-size-xs-14px">stabilit&agrave;</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-padded-x4 padding-sm-vertical-md padding-xs-vertical-big">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-gray-dark3 text-center font-size-xs-36px font-size-xs-27px">Scopri i nostri corsi</h2>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/cycle" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/classimage/cycling/350x400_cycleburn.jpg?sfvrsn=7881a4d3_0' alt='Cycle' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">5</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Cycle</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        L'innovativo programma fitness&amp;cycling<br />
                                        firmato Virgin Active. <br />
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/yoga" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/classimage/yoga/265x313_yoga_categoria.jpg?sfvrsn=5d2b9a74_0' alt='Yoga' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">5</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Yoga</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        Sincronizza le posizioni al ritmo del tuo respiro e scegli la pratica giusta per vivere un'esperienza irrinunciabile. Scegli fra i diversi corsi yoga quello pi&ugrave; adatto a te.<br />
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/functional-corsi" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/classimage/functional/265x313_functional_categoria.jpg?sfvrsn=47f55d8d_0' alt='Functional' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">15</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Functional</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        Programmi di allenamento per<br />
                                        un corpo&nbsp;forte, agile, scattante e coordinato.<br />
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/balance" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/classimage/balance/265x313_reformer_ok.jpg?sfvrsn=48a7ba46_0' alt='Balance' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">10</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Balance</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        Programmi di allenamento nei quali&nbsp;equilibrio, flessibilit&agrave; e mobilit&agrave; sono le parole chiave.<br />
                                        <br />
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/water" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/classimage/water/265x313_water.jpg?sfvrsn=a6fa5185_2' alt='Water' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">4</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Water</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        Scegli i programmi in acqua&nbsp;<br />
                                        per un'esperienza di allenamento&nbsp;<br />
                                        completa.
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/dance" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/classimage/dance/265x313_dance.jpg?sfvrsn=e6ed5b55_0' alt='Dance' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">4</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Dance</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        Scegli i nostri corsi dance, per coniugare divertimento, musica e forma fisica e rilassarti scaricando le tensioni giornaliere.&nbsp;<br />
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/strength" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/classimage/cardio-tone/350x400_addominali.jpg?sfvrsn=91bed9be_0' alt='Strength' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">9</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Strength</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        Programmi di allenamento per&nbsp;scolpire il tuo corpo donandogli&nbsp;tonicit&agrave; e flessibilit&agrave;.<br />
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">



                    <div class="thumbnail thumbnail-fixed-height-categoriesclass restyle-2019 position-relative thumbnail-white thumbnail-toolbar no-border no-padding margin-top-big margin-bottom-big no-padding-xs">
                        <a href="https://www.virginactive.it/corsi/running-outdoor" class="block-link-scrolling-mobile">
                            <img class="img-fullheight-top" src='https://vai2018i1.azureedge.net/images/default-source/default-album/265x313_running.jpg?sfvrsn=9636ee9d_0' alt='Running' title='' />

                            <div class="caption">
                                <div class="text-medium text-white text-center text-uppercase margin-bottom-sm">
                                    <span class="text-vertical-align-middle text-bold">3</span>
                                    <span class="text-vertical-align-middle">Corsi</span>
                                </div>
                                <div class="title">
                                    <h5 class="no-margin padding-bottom-sm text-white text-center"><span>Running</span></h5>
                                </div>

                                <div class="tag text-small text-uppercase margin-top-sm text-center text-white text-weight-400">
                                </div>
                                <div class="info-add flex-center">
                                    <h6 class="description text-white line-height-sm no-margin">
                                        Corri libero, all&rsquo;aria aperta. In base alle tue esigenze e ai tuoi obiettivi, potrai scegliere tra differenti tipi di allenamento.
                                    </h6>
                                    <div class="link text-center"><span class="icon-arrow-right white"></span></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
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