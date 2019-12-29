<?php

include('PHP/connect.php');

session_start();
$_SESSION['user'] = "abcdefghi";
$user = $_SESSION['user'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ferry | Sharing your journeys</title>

    <link rel="icon" type="image/png" href="Resources/images/Group4.png">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Material Google icon theme -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/grab.css">

</head>

<body>
    <!-- Header Section begins-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand"><img src="Resources/images/Group 4.png" id="logo-img"></a>
                <a href="index.php" class="navbar-brand"><img src="Resources/images/img.png" alt="ferry" id="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <div id="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Offer a ride &nbsp;<i class="fa fa-superpowers" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Grab a ride &nbsp;<i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="logout-a" href="">
                                <div class="logout-img">
                                    <i class="material-icons">&#xe851;</i>
                                    &nbsp;&nbsp;<?= $user ?>
                                </div>
                                <div class="logout">LOGOUT</div>
                            </a>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Section ends -->



    <!-- Footer Start -->

    <footer>
        <div class="container-fluid">
            <div class="row text-center">

                <div class="column col-md-4 col-sm-10">
                    <img src="Resources/images/Group 4.png" alt="logo" class="fir">
                    <img src="Resources/images/img.png" alt="ferry" class="sec">
                </div>

                <div class="column col-md-4 col-sm-10">
                    <div class="copyright">
                        &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> Copyright ferry. All Rights Reserved.
                    </div>
                    <div class="credits">
                        Designed and Developed by <strong id="a6">Marcos Akash</strong></a>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-10" id="google_translate_element"></div>

            </div>
    </footer>

    <!-- Footer ends -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>