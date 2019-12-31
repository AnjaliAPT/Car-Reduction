<?php

session_start();

// if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
// ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

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

        <!-- <script scr="JS/html2canvas.js" type="text/javascript"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js" integrity="sha256-my/qJggBjG+JoaR9MUSkYM+EpxVkxZRNn3KODs+el74=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/share.css">

    </head>

    <body>
        <div class="arrow bounce"><i class="fa fa-arrow-circle-right fa-5x" id="go" aria-hidden="true"></i></div>


        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css" type="text/css" />

        <div id="map"></div>






        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiYWthc2g5ODkiLCJhIjoiY2s0NWYwM2hrMDVpNTNmbnhtb3A0enBpbyJ9.0e9PSeXTW2P3v8i6szFRkQ';
            var map = new mapboxgl.Map({
                container: 'map', // container id
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [76.693, 22.953], // starting position
                zoom: 6, // starting zoom,
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
        <script>
            const go = document.querySelector('#go');


            go.onclick = function() {
                // console.log('Clicked');

                // html2canvas($(".map"), {
                //     dpi: 192,
                //     onrendered: function(canvas) {
                //         var base64URL = canvas.toDataURL("image/png");





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
                            console.log(res);
                            dtp_input.value = "";
                            from.value = "";
                            to.value = "";
                            window.location.href = "main.php";
                        },
                        error: function(res) {
                            console.log(res);
                            window.location.href = "error.php";
                        }
                    })
                }
            }
        </script>



    </body>

    </html>

// 
// } else {

//     header('location: index.php');
// }
