<?php

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

        <!-- Mapbox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>

        <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />


        <!-- <script scr="JS/html2canvas.js" type="text/javascript"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js" integrity="sha256-my/qJggBjG+JoaR9MUSkYM+EpxVkxZRNn3KODs+el74=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css" type="text/css" />
        <link rel="stylesheet" href="css/share.css">

    </head>

    <body>

        <!-- 
    <div id="loader" class="container-fluid">
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






            <div class="map-box">
                <div id="map"></div>
            </div>

            <div class="dtp">
                <input id="input" class="dtp_input disabled" width="305" placeholder="Choose Date and Time" disabled autocomplete="off" />
                <script>
                    $('#input').datetimepicker({
                        uiLibrary: 'bootstrap4',
                        modal: true,
                        footer: true
                    });
                </script>
            </div>

        </main>


        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>




        <div class="arrow bounce"><i class="fa fa-arrow-circle-right fa-5x" id="go" aria-hidden="true"></i></div>



        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiYWthc2g5ODkiLCJhIjoiY2s0NWYwM2hrMDVpNTNmbnhtb3A0enBpbyJ9.0e9PSeXTW2P3v8i6szFRkQ';
            var map = new mapboxgl.Map({
                container: 'map', // container id
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [76.693, 22.953], // starting position
                zoom: 5, // starting zoom,
                preserveDrawingBuffer: true
                // preserveDrawingBuffer: true
            });
            // Add geolocate control to the map.
            map.addControl(
                new mapboxgl.GeolocateControl({
                    positionOptions: {
                        enableHighAccuracy: true
                    },
                    trackUserLocation: true
                })
            );


            map.addControl(
                new MapboxDirections({
                    accessToken: mapboxgl.accessToken
                }),
                'top-left'
            );
        </script>

        <!-- <script>
        $(window).scroll(function() {
            $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250);
            //250 is fade pixels
        });
    </script> -->






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


        <script>
            var loader = document.getElementById("loader");
            window.addEventListener('load', function() {
                // setTimeout(function() {
                loader.style.display = 'none';
                // }, 3000);
            });
        </script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous"></script>

        <script>
            const check = document.querySelector("body > div > div > div.modal-footer > button:nth-child(2)");
            check.onclick = function() {

                var yes = 0;

                const dtp_input = document.querySelector('.dtp_input');
                const from = document.querySelector("#mapbox-directions-origin-input > div > input[type=text]");
                const to = document.querySelector("#mapbox-directions-destination-input > div > input[type=text]");


                // console.log(from.value);
                // console.log(to.value);
                // console.log(dtp_input.value);


                el = document.querySelector("#mapbox-directions-origin-input > div > div > button");
                one = window.getComputedStyle(el);
                if (one.display === 'none') {
                    from.style.border = "1px solid red";
                    yes = 1;
                    // console.log("orign");
                } else {
                    from.style.border = "0";
                }


                var el = document.querySelector("#mapbox-directions-destination-input > div > div > button");
                var one = window.getComputedStyle(el);
                if (one.display === 'none') {
                    to.style.border = "1px solid red";
                    yes = 1;
                    // console.log("des");
                } else {
                    to.style.border = "0";
                }

                var array = dtp_input.value.split(" ");
                // console.log(array[0]);
                // console.log(array[1]);


                if (/^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/.test(array[0])) {
                    dtp_input.style.border = "0";
                } else {

                    dtp_input.style.border = "1px solid red";
                    yes = 1;
                    // console.log("time");
                }



                if (/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/.test(array[1])) {
                    dtp_input.style.border = "0";
                } else {

                    dtp_input.style.border = "1px solid red";
                    yes = 1;
                    // console.log("date");
                }

                if (yes === 0) {


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
                            Swal.fire(
                                'Great!',
                                'Your ride is confirmed',
                                'success'
                            )
                        } else {
                            yes = 1;
                        }
                    })

                    if (yes == 1)
                        return;

                    $('#map').height = "100vh";
                    $('#map').width = "100vw";
                    var base64URL = map.getCanvas().toDataURL();

                    var dat = {};

                    dat.from = from.value;
                    dat.to = to.value;
                    dat.time = array[0];
                    dat.date = array[1];
                    dat.image = base64URL;



                    // console.log(dat);

                    $.ajax({
                        url: 'php/share_mail.php',
                        method: "post",
                        data: dat,
                        success: function(res) {
                            // console.log(res);
                            dtp_input.value = "";
                            from.value = "";
                            to.value = "";
                            window.location.href = "main.php";
                        },
                        error: function(res) {
                            // console.log(res);
                            window.location.href = "error.php";
                        }
                    })
                }
            };
        </script>





        <script>
            const go = document.querySelector('#go');


            go.onclick = function() {
                // console.log('Clicked');

                // html2canvas($(".map"), {
                //     dpi: 192,
                //     onrendered: function(canvas) {
                //         var base64URL = canvas.toDataURL("image/png");





                var yes = 0;

                const from = document.querySelector("#mapbox-directions-origin-input > div > input[type=text]");
                const to = document.querySelector("#mapbox-directions-destination-input > div > input[type=text]");


                // console.log(from.value);
                // console.log(to.value);
                // console.log(dtp_input.value);


                el = document.querySelector("#mapbox-directions-origin-input > div > div > button");
                one = window.getComputedStyle(el);
                if (one.display === 'none') {
                    from.style.border = "1px solid red";
                    yes = 1;
                    // console.log("orign");
                } else {
                    from.style.border = "0";
                }


                var el = document.querySelector("#mapbox-directions-destination-input > div > div > button");
                var one = window.getComputedStyle(el);
                if (one.display === 'none') {
                    to.style.border = "1px solid red";
                    yes = 1;
                    // console.log("des");
                } else {
                    to.style.border = "0";
                }


                document.querySelector("body > main > div.dtp > div > span > button").click();
            }
        </script>

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

<?php
} else {
    header('location: index.php');
    exit();
}
