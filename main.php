<?php

session_start();
// print_r($_SESSION['user']);
// var_dump(isset($_SESSION['user']));
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {

    include('PHP/contact-form.php');

    // $x = date("m/d/Y");
    // echo $x;
    // $s = explode("/", $x);
    // echo $s[2];



?>

    <script>


    </script>

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
        <link rel="stylesheet" href="css/main.css">

    </head>

    <body>

        <div id="loader" class="container-fluid">
            <img src="Resources/images/Group5.png" alt="Ferry" id="loader-img">
        </div>

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


        <!-- Start of main section -->

        <main>


            <!-- Section a begins -->

            <section class="jumbotron container-fluid container-top section-a">

                <div class="row row-col">


                    <div class="column col-sm-6 share-column">
                        <div class="row">
                            <div class="column-image col-sm-6">
                                <img src="Resources/images/aa (1).png" alt="grab" class="share-image">
                            </div>
                            <div class="column-content col-sm-6 justify-content-center align-items-center">
                                <div class="ag">
                                    <h1>OFFER A RIDE
                                    </h1>
                                </div>

                                <a href="share.php" id="arrow" class="arrow1"><span>&#9658;&#9658;</span></a>

                            </div>
                        </div>
                    </div>



                    <div class="column col-sm-6 grab-column">
                        <div class="row new-row">
                            <div class="column-content col-sm-6 justify-content-center align-items-center">
                                <div class="ag">
                                    <h1>GRAB A RIDE
                                    </h1>
                                </div>

                                <a href="grab.php" id="arrow" class="arrow2"><span>&#9658;&#9658;</span></a>

                            </div>
                            <div class="column-image col-sm-6">
                                <img src="Resources/images/aa (2).png" alt="grab" class="grab-image">
                            </div>

                        </div>
                    </div>

                </div>
            </section> <!-- Section a ends -->

            <!-- Section b starts -->
            <div class="heading-transactions">
                <h2 class="fancy">ACTIVE RIDES</h2>
                <hr align="left" />
            </div>
            <section class="section-a container-fluid">


                <div class="active-transactions container-fluid my-container">

                </div>
            </section>

            <!-- Section b ends -->

            <!-- Section c begins -->
            <div class="heading-transactions">
                <h2 class="fancy1">PAST RIDES</h2>
                <hr align="left" />
            </div>
            <section class="section-b container-fluid">

                <div class="past-transactions container-fluid my-container">


                </div>


            </section>

            <!-- Section 3cends -->

        </main>

        <!-- End of main section -->


        <!-- Contact Section -->

        <section class="jumbotron" id="no-margin">
            <div class="container contact-container">

                <div class="contact-header">
                    <h3>Contact</h3>
                    <p>Fill out the form for any query</p>
                </div>

                <div class="row row-contact-info">

                    <div class="column col-md-4">
                        <div class="contact-email">
                            <img src="Resources/images/email.svg" class="icon-contact" alt="E-MAIL">
                            <h3>E-MAIL</h3>
                            <p><a href="mailto:akcount121@gmail.com">akcount121@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="column col-md-4">
                        <div class="contact-phone">
                            <img src="Resources/images/phone.svg" class="icon-contact" alt="PHONE">
                            <h3>MOBILE</h3>
                            <p><a href="tel:+91 9009546537">+91 9009546537</a></p>
                        </div>
                    </div>

                    <div class="column col-md-4">
                        <div class="contact-linkedin">
                            <img src="Resources/images/linkedin.png" class=" icon-contact" id="a4" alt="LINKEDIN">
                            <h3>LINKEDIN</h3>
                            <p><a href="https://www.linkedin.com/in/akash-sharma-1a5433178/" target="_blank">Akash Sharma</a></p>
                        </div>
                    </div>
                </div>

                <!-- Start of contact form -->
                <div class="contact-form">
                    <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <input class="form-control" type="text" placeholder="Name" name="name" value="<?= htmlentities($nme) ?>" class="form-control">
                                <span class="error"><?= $name_error ?></span>
                            </div>
                            <div class=" form-group col-lg-6">
                                <input class="form-control" type="text" placeholder="Company" name="company" value="<?= htmlentities($cmp) ?>" class=" form-control">
                                <span class="error"><?= $company_error ?></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <input class="form-control" type="text" placeholder="Email" name="email" value="<?= htmlentities($eml) ?>" class=" form-control">
                                <span class="error"><?= $email_error ?></span>
                            </div>
                            <div class="form-group col-lg-6">
                                <input class="form-control" type="text" placeholder="Subject" name="subject" value="<?= htmlentities($sbj) ?>" class=" form-control">
                                <span class="error"><?= $subject_error ?></span>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" type="text" rows="5" data-msg="Enter your message" placeholder="" name="message" class="form-control"><?= htmlentities($msg) ?></textarea>
                                <span class="error"><?= $text_error ?></span>
                            </div>
                        </div>
                        <div>
                            <div class="text-center"><button type="submit" name="contact-form-submit" title="Submit" id="contact-button">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Contact Section ends -->


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


        <!-- Javascript -->




        <script src="JS/jquery.js">
        </script>

        <script>
            $('html, body').css({
                'overflow': 'hidden',
                'height': '100%'
            })
            var loader = document.getElementById("loader");
            window.addEventListener('load', function() {
                setTimeout(function() {
                    $('html, body').css({
                        'overflow': 'auto',
                        'height': 'auto'
                    })
                    loader.style.display = 'none';
                }, 3000);
            });
        </script>



        <script src="JS/form_validation.js"></script>

        <script>
            const text = document.querySelector(".fancy");
            const stringText = text.textContent;
            // console.log(stringText);
            const splitText = stringText.split("");
            // console.log(splitText);
            text.textContent = "";

            for (let i = 0; i < splitText.length; i++) {
                text.innerHTML += "<span>" + splitText[i] + "</span>";
            }

            let char = 0;
            let timer = setInterval(onTick, 300);

            function onTick() {
                // console.log(text);
                const span = text.querySelectorAll('span')[char];
                // console.log(span);
                span.className += "fades";
                char++;

                if (char === splitText.length) {
                    $(".fancy span").removeClass("fades");
                    // clearInterval(timer);
                    // timer = null;
                    char = 0;

                    // timer = setInterval(onTick, 100);

                }
            }
        </script>

        <script>
            const text1 = document.querySelector(".fancy1");
            const stringText1 = text1.textContent;
            // console.log(stringText);
            const splitText1 = stringText1.split("");
            // console.log(splitText);
            text1.textContent = "";

            for (let j = 0; j < splitText1.length; j++) {
                text1.innerHTML += "<span>" + splitText1[j] + "</span>";
            }

            let char1 = 0;
            let timer1 = setInterval(onTick1, 300);

            function onTick1() {
                // console.log(text);
                const span1 = text1.querySelectorAll('span')[char1];
                // console.log(span);
                span1.className += "fades1";
                char1++;

                if (char1 === splitText1.length) {
                    $(".fancy1 span").removeClass("fades1");
                    // clearInterval(timer);
                    // timer = null;
                    char1 = 0;

                    // timer = setInterval(onTick, 100);

                }
            }
        </script>


        <script>
            function loadlink() {
                $('.active-transactions').load('php/active.php', function() {
                    $(this).unwrap();
                });


                $('.past-transactions').load('php/past.php', function() {
                    $(this).unwrap();
                });
            }

            loadlink();
            setInterval(function() {
                loadlink()
            }, 60000);
        </script>
        <script>
            $(document).ready(function() {
                $("#nav-icon").click(function() {
                    $(this).toggleClass('open');
                });
            });
        </script>

        <!-- <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js">
    </script>
    <script>
        window.sr = new ScrollReveal({
            reset: true
        });
        sr.reveal('.my-row', {
            duration: 1500,
            origin: 'left',
            delay: 300,
            distance: '400px',
            easing: 'ease'
        });
        if ($('.my-row').length > 0) {
            sr.init();
        }
    </script> -->



        <!-- 
    <script>
        function debounce(func, wait = 20, immediate = true) {
            var timeout;

            return function executedFunction() {
                var context = this;
                var args = arguments;

                var later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };

                var callNow = immediate && !timeout;

                clearTimeout(timeout);

                timeout = setTimeout(later, wait);

                if (callNow) func.apply(context, args);
            };
        };

        // console.log(slider);
        // setInterval(function() {
        //     console.log($('.my-row').length);
        // }, 1000);


        function checkSlide(e) {
            // console.log($('.my-row').length);
            // console.log('none');
            const slider = document.querySelectorAll('.my-row');
            // console.log(slider.length);
            slider.forEach(slide => {
                // console.log('none');
                const slideInAt = (window.scrollY + window.innerHeight) - slide.clientHeight / 2;
                // console.log(slideInAt);
                const slideBottom = slide.offsetTop + slide.clientHeight;
                // console.log(slideBottom);
                const isHalfShown = slideInAt > slide.offsetTop;
                // console.log(isHalfShown);
                const xs = window.scrollY < slideBottom;
                // console.log(xs);
                if (isHalfShown && xs) {

                    slide.classList.add('slide-active');
                    // console.log('here');
                }

            });
        }
        window.addEventListener('scroll', debounce(checkSlide));;
    </script> -->

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <!-- End of Javascript -->
    </body>

    </html>

<?php

} else {
    // print_r(isset($_SESSSION['user']));
    header('location: index.php');
}
