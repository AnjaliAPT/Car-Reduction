<?php

include('PHP/connect.php');

session_start();
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
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

    <main>

        <div class="section-a container-fluid my-container">
            <div class="row my-row">
                <?php
                $query = "SELECT * FROM share WHERE active=1 AND username!='$user';";
                // echo $query;
                $res = mysqli_query($db, $query);
                $num = mysqli_num_rows($res);

                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {

                        if (substr_count($row["source"], ",") > 2) {
                            $temp = explode(",", $row["source"]);
                            $row["source"] = $temp[0] . "," . $temp[1];
                        }

                        if (substr_count($row["destination"], ",") > 2) {
                            $temp = explode(",", $row["destination"]);
                            $row["destination"] = $temp[0] . "," . $temp[1];
                        }

                ?>

                        <div class="column col-10 col-md-6 col-lg-4 main-column justify-content-center align-items-center">
                            <div class="col-12 my-column-img">
                                <img src="<?= $row['image_dir'] ?>">
                            </div>

                            <div class="col-12 my-column-data">
                                <div class="upper-column">
                                    <div class="column-from">
                                        <strong><?= $row['source'] ?></strong>
                                    </div>
                                    <div class="column-from-to-img">
                                        <img src="Resources/images/arrow 1.png">
                                    </div>
                                    <div class="column-to">
                                        <strong><?= $row['destination'] ?></strong>
                                    </div>
                                </div>
                                <div class="lower-column">
                                    <p>DATE<br /><span class="has"><?= $row['date'] ?></span></p>
                                    <p>TIME<br /><span class="has"><?= $row['time'] ?></span></p>
                                    <p>OFFERED BY<br /><span class="has"><?= $row['username'] ?></span></p>
                                </div>

                                <div class="button-part">
                                    <button type="button" class="btn btn-success" onclick="booked(this.id)" id="<?= $row['share_id'] ?>">ACCEPT</button>
                                </div>

                            </div>



                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <h1>No rides available</h1>
                <?php
                }

                ?>
            </div>
        </div>




    </main>



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

    <script>
        function booked(change) {
            console.log(change);
            let r = confirm('Confirm Ride');
            var dat = {};

            dat.change = change;

            if (r == true) {
                $.ajax({

                    url: 'php/grab_mail.php',
                    method: "post",
                    data: dat,
                    success: function(res) {
                        // console.log(res);
                        alert('Your ride is confirmed');
                        window.location.href = "main.php";
                    },
                    error: function(res) {
                        // console.log(res);
                        window.location.href = "error.php";
                    }
                })
            } else
                return;
        }
    </script>

</body>

</html>


<?php


    }

    else
    {

        header('location: index.php');

    }