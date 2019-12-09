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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="main.css">

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
      <div class="logos col-md-2">
        <a href="index.php"><img src="Resources/images/Group4.png" id="logo-img"></a>
        <a href="index.php"><img src="Resources/images/img.png" alt="ferry" id="logo"></a>
      </div>
      <div class="btns col-md-2">
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
                  <div class="row register-form">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value="" />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                      </div>
                      <div class="form-group">
                        <div class="maxl">
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
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email *" value="" />
                      </div>
                      <div class="form-group">
                        <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                      </div>
                      <input type="submit" class="btnRegister" value="Register" />
                    </div>
                  </div>
                </div>
              </div>
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
</body>

</html>