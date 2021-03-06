<?php session_start();
header("X-XSS-Protection: 0");
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Battimixea - Premios</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta property="og:url"                content="https://battimixea.com" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="Battimixea con Battimix" />
        <meta property="og:description"        content="Diviértete combinando la foto que más te guste y gana premios con BattiMix" />
        <meta property="og:image"              content="https://battimixea.com/fb.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="css/component.min.css" />
        <link rel="stylesheet" type="text/css" href="js/fullpage/jquery.fullpage.min.css" />
        <link rel="stylesheet" href="fonts/styles.min.css">
        <link type="text/css" href="css/OverlayScrollbars.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/main.min.css">
    </head>
    <body class="mecanica">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div id="preloader">
            <div class="imgs">
                <div class="pre">
                    <div class="loader">
                        <div class="bn"></div>
                        <div class="color"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="page">
                <div class="header">
                    <div class="info">
                        <a href="./" class="logo"><img src="img/logo.png" alt=""></a>
                        <a href="#" class="burger"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="./">inicio</a></li>
                                <li><a href="participa">participa</a></li>
                                <li><a href="premios">premios</a></li>
                                <li><a href="productos">productos</a></li>
                                <li><a href="galeria">galería</a></li>
                                <li><a href="mecanica" class="active">mecánica</a></li>
                                <li><a href="ganadores">ganadores</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mec">
                    <div class="block">
                        <div class="light">
                            <div class="anim1"><img src="img/mecanica-light1.png" alt=""></div>
                        </div>
                        <div class="bg"></div>
                        <div class="row info">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 img">
                                <img src="img/mecanica-pack.png" class="desktop">
                                <img src="img/mobile/mecanica.png" class="mobile">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 txt">
                                <h2>SOLO SIGUE ESTOS PASOS</h2>
                                <ol>
                                    <li>Battimixea tu foto.</li>
                                    <li>Envíala.</li>
                                    <li>Recibirás una notificación de Facebook, correo o revisa la galería de fotos de la página de Battimix.</li>
                                    <li>Invita a tus amigos a que voten en la galería de la landing.</li>
                                    <li>La foto más votada semanalmente es la ganadora. Son 8 ganadores.</li>
                                    <li>Ver términos y condiciones.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                        <div class="footer">
                            <div class="copyright">© 2018  / Battimix    -    <a href="#" class="md-trigger infoad" data-modal="modal-2">Términos y Condiciones</a></div>
                        </div>

                </div>


            </div>
            <div  id="fullpage">
                <div class="slide slide1"></div>
                <div class="slide slide2"></div>
                <div class="slide slide3"></div>
                <div class="slide slide4"></div>
            </div>

            <div class="md-modal md-effect-3 video-content" id="modal-1">
                <div class="md-content">
                    <a href="#" class="btnclose md-close"></a>
                </div>
            </div>

            <div class="md-modal md-effect-8 terms-content" id="modal-2">
                <div class="md-content">
                    <h3>Términos y condiciones</h3>
                    <?php include "tyc.php"; ?>
                    <a href="#" class="btnclose md-close"></a>
                </div>
            </div>

            <div class="md-overlay"></div>

        </div>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollify.js"></script>
        <script type="text/javascript" src="js/fullpage/jquery.fullpage.min.js"></script>
        <script src="js/plugins.js"></script>
        <script type="text/javascript" src="js/OverlayScrollbars.js"></script>
        <script src="js/main.min.js" async></script>
        <script src="js/classie.js"></script>
        <script src="js/modalEffects.js"></script>
        <script>
            // this is important for IEs
            var polyfilter_scriptpath = '/js/';
        </script>
        <script src="js/cssParser.js"></script>
        <script src="js/css-filters-polyfill.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $('#terms').overlayScrollbars({
                    overflowBehavior : {
                        x : "hidden",
                        y : "scroll"
                    },
                });
            });
        </script>

        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-115989753-1','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>

</html>
