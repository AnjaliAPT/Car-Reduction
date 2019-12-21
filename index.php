<?php
include('PHP/contact-form.php');
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
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <!-- Header Section begins-->

  <header class="hd-v-header hd-container">
    <div class="hd-fullscreen-video-wrap">
      <video src="Resources/videos/Winter_Traffic.mp4" muted autoplay="true" loop="true" class="hd-center">
      </video>
    </div>
    <div class="hd-header-overlay"></div>
    <nav class="row justify-content-between align-items-center navbar-expand-md">

      </div>
      <div class="logos col-lg-3 col-md-4">
        <a href="index.php"><img src="Resources/images/Group 4.png" id="logo-img"></a>
        <a href="index.php"><img src="Resources/images/img.png" alt="ferry" id="logo"></a>
      </div>
      <div class="btns col-md-4" id="main-navbar">
        <a href="#loginmodal" data-toggle="modal" id="login-btn" class="btn btn-outline-primary">Login</a>
        <a href="#signupmodal" data-toggle="modal" id="signup-btn" class="btn btn-outline-primary">SignUp</a>
      </div>
    </nav>
    <div class="hd-header-content text-center">
      <h1 class="header-h1">Carpool. Connect. Conserve.</h1>
      <p class="header-p">Sharing your journey<p>
          <a class="hd-btn" href="#loginmodal">Find out more</a>
    </div>
  </header>

  <!-- Header Section ends -->

  <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container register">
          <div class="row">
            <div class="col-md-3 register-left">
              <img src="Resources/images/img.png" id="b1" alt="ferry" />
              <h3>Welcome</h3>
              <p>You are moments away from creating your account</p>
              <input type="submit" name="" value="Login" /><br />
            </div>
            <div class="col-md-9 register-right">

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <h3 class="register-heading">SignUp</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>


                  <form action="php/signup_validation.php" class="needs-validation" method="post" novalidate>
                    <div class="row register-form">
                      <div class="col-md-6">
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="material-icons">&#xe851;</i></span>
                          </div>

                          <input type="text" class="form-control" placeholder="First Name *" value="" name="name" required />
                          <div class="valid-feedback"></div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="material-icons">&#xe7ff;</i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Last Name *" value="" name="last_name" required />
                          <div class="valid-feedback"></div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@
                          </div>
                          <input type="email" class="form-control" placeholder="Email *" value="" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
                          <div class="valid-feedback"></div>
                          <div class="invalid-feedback">Invalid email.</div>
                        </div>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="material-icons">&#xe0b0;</i></span>
                            </span>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"> Invalid Mobile Number.</div>
                          </div>

                          <input type="tel" class="form-control" placeholder="Mobile Number *" value="" name="mobile" pattern="[789][0-9]{9}" required />
                        </div>
                        <div class="form-group">
                          <div class="maxl">
                            <span style="color:#8E959B">Gender : &nbsp;</span>
                            <label class="radio-inline">
                              <input type="radio" name="gender" value="male" checked>
                              <span> Male </span>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="gender" value="female">
                              <span>Female </span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox form-group">
                          <input type="checkbox" class="custom-control-input" id="customCheck" name="car_binary">
                          <label class="custom-control-label" for="customCheck">Do you have a car :&nbsp; </label>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" id="np" placeholder="Registration Number *" value="" name="registration_no" disabled required />
                          <div class="valid-feedback"></div>
                          <div class="invalid-feedback"> Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="nr" placeholder="Car Model *" value="" name="car_type" disabled required />
                          <div class="valid-feedback"></div>
                          <div class="invalid-feedback"> Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="ns" placeholder="Car Number *" value="" name="car_no" disabled required />
                        </div>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"> Please fill out this field.</div>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btnRegister" value="Register" />
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End of Form -->

  <!-- Section a starts -->


  <section class="section section-a text-center">
    <div class="section-a-heading">
      <h4>CARPOOLING BENIFITS</h4>
      <h2>Why <span id="a1">Carpool?</span></h2>
      <hr />
    </div>

    <div class="row section-a-content align-center justify-content-center text-center">

      <div class="column col-lg-3 col-md-6 col-sm-10 column-a-content">
        <div class="row section-a-img">
          <img src="Resources/images/congestion.png" alt="Reduce Congestion">
        </div>
        <div class="row section-a-txt">
          <h2 class="section-a-h2"> Reduce Congestion
          </h2>
          <p class="section-a-p"> Help reduce the number of cars on the roads. Transform the cities we live in.
          </p>
        </div>
      </div>


      <div class="column col-lg-3 col-md-6 col-sm-10 column-a-content">
        <div class="row section-a-img">
          <img src="Resources/images/friends.png" alt="Make friends">
        </div>
        <div class="row section-a-txt">
          <h2 class="section-a-h2">
            Make Friends
          </h2>
          <p class="section-a-p">
            Meet new people in the community. Living in the city can be a social experience.
          </p>
        </div>
      </div>


      <div class="column col-lg-3 col-md-6 col-sm-10 column-a-content">
        <div class="row section-a-img">
          <img src="Resources/images/wallet.png" alt="Split Costs">
        </div>
        <div class="row section-a-txt">
          <h2 class="section-a-h2">
            Split Costs
          </h2>
          <p class="section-a-p">
            Defray the cost of each trip. Riders contribute an amount based on distance travelled.
          </p>
        </div>
      </div>


      <div class="column col-lg-3 col-md-6 col-sm-10 column-a-content">
        <div class="row section-a-img">
          <img src="Resources/images/network.png" alt="Expand Network">
        </div>
        <div class="row section-a-txt">
          <h2 class="section-a-h2">
            Expand Network
          </h2>
          <p class="section-a-p">
            Get to know more professionals to expand your business network.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section a ends -->


  <div class="banner container-fluid text-center">
    <h1>How does it works</h1>
  </div>

  <!-- Section c starts -->

  <section class="section section-c container-fluid">

    <div class="row">




      <div class="video-part column col-lg-7 col-md-10">

        <div class="video-capture">
          <video poster="Resources/images/restore.jpg" muted loop autoplay>
            <source src="Resources/videos/vision.mp4" type="video/mp4">
          </video>
          <div class="shadow"></div>
        </div>
      </div>



      <div class="textpart column col-lg-5 col-md-10">
        <p class="line anim-typewriter"></p>
      </div>






    </div>


  </section>



  <!-- Section c ends -->

  <!-- Section b starts -->

  <section class="section section-b text-center">
    <div class="section-b-heading">
      <h1>Journey made available on<span id="a2"> <img src="Resources/images/img.png" alt="ferry"></span></h1>
    </div>

    <div class="row section-b-content align-center justify-content-center text-center">

      <div class="column col-lg-3 col-xs-10 column-b-content">
        <div class="row section-b-img">
          <i class="fa fa-users"></i>
        </div>
        <div class="row section-b-txt">
          <h2 class="row section-b-h2">
            In Control<br />
          </h2>
          <p class="row section-b-p">Verified member profiles and ratings mean you know exactly who you're travelling with.
          </p>
        </div>
      </div>


      <div class="column col-lg-3 col-xs-10 column-b-content">
        <div class="row section-b-img">
          <i class="fa fa-hand-peace-o"></i>
        </div>
        <div class="row section-b-txt">
          <h2 class="row section-b-h2">
            Carpool with confidence<br />
          </h2>
          <p class="row section-b-p">
            ID and home address verification adds another level of security to member profiles.
          </p>
        </div>
      </div>


      <div class="column col-lg-3 col-xs-10 column-b-content">
        <div class="row section-b-img">
          <i class="fa fa-key"></i>
        </div>
        <div class="row section-b-txt">
          <h2 class="row section-b-h2">
            Your booking is protected<br />
          </h2>
          <p class="row section-b-p">
            We offer 100% full refund for cancelation either by driver, or passenger.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section b ends -->



  <!-- Contact Section -->


  <section class="jumbotron" id="no-margin">
    <div class="container contact-container">

      <div class="contact-header">
        <h3>Contact</h3>
        <p>Fill out the form for any query</p>
      </div>

      <div class="row row-contact-info">

        <div class="col-md-4">
          <div class="contact-email">
            <img src="Resources/images/email.svg" class="icon-contact" alt="E-MAIL">
            <h3>E-MAIL</h3>
            <p><a href="mailto:akcount121@gmail.com">akcount121@gmail.com</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <img src="Resources/images/phone.svg" class="icon-contact" alt="PHONE">
            <h3>MOBILE</h3>
            <p><a href="tel:+91 9009546537">+91 9009546537</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-linkedin">
            <img src="Resources/images/linkedin.png" class=" icon-contact" id="a4" alt="LINKEDIN">
            <h3>LINKEDIN</h3>
            <p><a href="linkedin.com/in/akash-sharma-1a5433178/">Akash Sharma</a></p>
          </div>
        </div>
      </div>
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
  <script src="JS/jquery.js"></script>
  <script src="JS/car_binary.js">
  </script>
  <script src="JS/form_validation.js"></script>
  <script src="observer.js"></script>
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