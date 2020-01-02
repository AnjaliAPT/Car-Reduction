<?php

include('PHP/connect.php');

session_start();
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {

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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous">

        <!-- CSS Stylesheet -->
        <link rel="stylesheet" href="css/grab.css">

    </head>

    <body>
        <!-- <div id="loader" class="container-fluid">
            <img src="Resources/images/Group5.png" alt="Ferry" id="loader-img">
        </div> -->

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
                                <a class="nav-link" href="share.php">OFFER &nbsp;<i class="fa fa-superpowers" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="grab.php">GRAB &nbsp;<i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                            <hr id="hrs">
                            <li class="nav-item">
                                <a class="nav-button nav-link nav-a" href="php/logout.php">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    <div class="logout">LOGOUT</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header Section ends -->

        <main>

            <div class="h2s">
                <h1> AVAILABLE RIDES</h1>
            </div>

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
                        <div class="notfound">
                            <h2>No Rides Found</h2>
                            <img src="Resources/images/nodata.png" class="active_img">
                        </div>
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


        <!-- <script>
            var loader = document.getElementById("loader");
            window.addEventListener('load', function() {
                // setTimeout(function() {
                loader.style.display = 'none';
                // }, 3000);
            });
        </script> -->



        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <script>
            function booked(change) {

                var r = 0;

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to confirm your ride",
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#4CAF50',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'CONFIRM'
                }).then((result) => {
                    if (result.value) {
                        r = 1;
                        console.log(r);
                        $.ajax({

                            url: 'php/grab_mail.php',
                            method: "post",
                            data: dat,
                            success: function(res) {
                                // console.log(res);
                                Swal.fire({
                                    title: 'Your ride is confirmed',
                                    width: 600,
                                    type: 'success',
                                    padding: '3em',
                                });
                                window.location.href = "main.php";
                            },
                            error: function(res) {
                                // console.log(res);
                                Swal.fire({
                                    title: 'Something went wrong',
                                    width: 600,
                                    type: 'error',
                                    padding: '3em',
                                });
                            }
                        })
                        // console.log(r);
                    } else {
                        r = 0;
                        // console.log(r);
                        return;
                    }
                });
                // console.log(r);
                var dat = {};

                dat.change = change;



            }
        </script>

    </body>

    </html>


<?php


} else {

    header('location: index.php');
    exit();
}
