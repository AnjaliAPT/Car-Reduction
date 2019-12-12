<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ferry | Sharing your journeys</title>
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
    <nav class="row justify-content-between align-items-center">
      <div class="logos col-md-3">
        <a href="index.php"><img src="Resources/images/Group 4.png" id="logo-img"></a>
        <a href="index.php"><img src="Resources/images/img.png" alt="ferry" id="logo"></a>
      </div>
      <div class="btns col-md-4">
        <a href="#loginmodal" data-toggle="modal" id="login-btn" class="btn btn-outline-primary">Login</a>
        <a href="#signupmodal" data-toggle="modal" id="signup-btn" class="btn btn-outline-primary">SignUp</a>
      </div>
    </nav>
    <!-- <div class="hd-header-content text-md-center">
      <h1>Welcome Everyone</h1>
      <p>Sharing your journey..<p>
          <a class="hd-btn">Find Out More</a>
    </div> -->
  </header>
  <!-- Header Section ends -->

  <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container register">
          <div class="row">
            <div class="col-md-3 register-left">
              <img src="Resources/images/img.png" alt="ferry" />
              <h3>Welcome</h3>
              <p>You are 30 seconds away from earning your own money!</p>
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
                            <label class="radio inline">
                              <input type="radio" name="gender" value="male" checked>
                              <span> Male </span>
                            </label>
                            <label class="radio inline">
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
      <!-- End of Form -->



      <section class="section section-a">
        <div class="container">
          <h2>Section A</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et
            maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae
            accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione
            reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
        </div>
      </section>

      <section class="section section-b">
        <div class="container">
          <h2>Section B</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et
            maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae
            accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione
            reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
        </div>
      </section>


      <!-- Javascript -->
      <script src="JS/car_binary.js">
      </script>
      <script src="JS/form_validation.js"></script>
      <!-- End of Javascript -->
</body>

</html>