<?php
ob_start();
// print_r($_POST);

// foreach ($_POST as $key => $value)
//     echo $key . '=' . $value . '<br />';


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

    header('Cache-Control: no cache'); //no cache
    session_cache_limiter('private_no_expire'); // works
    //session_cache_limiter('public'); // works too
    include('connect.php');
    $f_name = mysqli_real_escape_string($db, $_POST["name"]);
    $l_name = mysqli_real_escape_string($db, $_POST["last_name"]);
    $e = mysqli_real_escape_string($db, $_POST["email"]);
    $mob = mysqli_real_escape_string($db, $_POST["mobile"]);
    $gend = mysqli_real_escape_string($db, $_POST["gender"]);

   

    $hsh = md5(rand(0, 1000));
    $pswd = rand(10000, 99999);
    $hash_pswd = md5($pswd);
    $user = $f_name . $pswd;

 $email_verify = "http://1a53d9a6.ngrok.io/Car-Reduction/php/email_verify.php?email=$e&hash=$hsh";



    // PHPMailer

    require 'PHPMailerAutoload.php';
    require 'credential.php';

    $mail = new PHPMailer;

    // $mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom(EMAIL, 'ferry');
    $mail->addAddress($e, $f_name . " " . $l_name);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('ferry | <noreply@ferry.com>');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Confirm your Email';



    $mail->Body    = '
    
    
    
    
    
    
    
    
    
<head><style type="text/css" title=""></style>

    <meta name="viewport" content="width = 375, initial-scale = -1">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="UTF-8">

    <title></title>

    

    <style>

.btn{

display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
        color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}
a{
  color: #fff;
}

    @media only screen and (max-device-width: 700px) {

      .table-wrapper {

        margin-top: 0px !important;

        border-radius: 0px !important;

      }



      .header {

        border-radius: 0px !important;

      }

    }

    </style>



  </head>

  <body style="-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;font-size:100%;line-height:1.6">

    <table style="background: #F5F6F7;" width="100%" cellpadding="0" cellspacing="0">

      <tbody><tr>

        <td>

          <!-- body -->

          <table cellpadding="0" cellspacing="0" class="table-wrapper" style="margin:auto;margin-top:50px;border-radius:7px;-webkit-border-radius:7px;-moz-border-radius:7px;max-width:700px !important;box-shadow:0 8px 20px #e3e7ea !important;-webkit-box-shadow:0 8px 20px #e3e7ea !important;-moz-box-shadow:0 8px 20px #e3e7ea !important;box-shadow: 0 8px 20px #e3e7ea !important; -webkit-box-shadow: 0 8px 20px #e3e7ea !important; -moz-box-shadow: 0 8px 20px #e3e7ea !important;">

            <tbody>


            <tr>

              <td class="container content" bgcolor="#FFFFFF" style="padding:35px 40px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;display:block !important;margin:0 auto !important;clear:both !important">

                <!-- content -->

                <div class="content-box" style="max-width:600px;margin:0 auto;display:block">

            



<!-- Content --> <h1 style="font-family:&quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;margin-bottom:15px;color:#47505E;margin:0px 0 10px;line-height:1.2;font-weight:200;font-size:28px;font-weight:bold;margin-bottom:30px">Confirm your email address</h1>



<p style="font-weight:normal;padding:0;font-family:&quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;line-height:1.7;margin-bottom:1.3em;font-size:15px;color:#47505E">

<strong> Username :</strong> '.$user.'      <br/> 
<strong> Password :</strong> '.$pswd.'      <br/> <br/>

Please click the button below to confirm your email address:</p>



<center><a href=" ' .$email_verify. '" class="confirmation-url btn btn-primary" style="color:#1EA69A;word-wrap:break-word;font-family:&quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;text-decoration:none;background-color#075ba8 ;border:solid ##075ba8 ;line-height:2;max-width:100%;font-size:14px;padding:8px 40px 8px 40px;margin-top:30px;margin-bottom:30px;font-weight:bold;cursor:pointer;display:inline-block;border-radius:30px;margin-left:auto;margin-right:auto;text-align:center;background-color:#075ba8;text-decoration:none;color:#FFF !important">Confirm Email</a></center>



<p style="font-weight:normal;padding:0;font-family:&quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;line-height:1.7;margin-bottom:1.3em;font-size:15px;color:#47505E">Once confirmed, this email will be uniquely associated with your account.<br/><br/>
In case the above button is not working, put this link manually in your URL : .</p>



<p style="font-weight:normal;padding:0;font-family:&quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;line-height:1.7;margin-bottom:1.3em;font-size:15px;color:#47505E">Cheers,<br>

The Ferry Team</p>



<!-- Auto-generated JSON-ld compliant JSON for showing action buttons in emails -->

<script type="application/ld+json">{"@context":"http://schema.org","@type":"EmailMessage","potentialAction":{"@type":"ConfirmAction","name":"Confirm Email","handler":{"@type":"HttpActionHandler","url":"http://sso.teachable.com/secure/teachable_accounts/confirmation?confirmation_token=4dNuyAZNQin-Sfq48uB4"}}}</script>



                </div>

                <!-- /content -->

              </td>

              <td>



              </td>

            </tr>

          </tbody></table>

          <!-- /body -->

          <div class="footer" style="padding-top:30px;padding-bottom:55px;width:100%;text-align:center;clear:both !important">

            <p style="font-weight:normal;padding:0;font-family:&quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;line-height:1.7;margin-bottom:1.3em;font-size:15px;color:#47505E;font-size:12px;color:#666;margin-top:0px">© ferry, Marcos Akash </p>

          

          </div>

        </td>

      </tr>

    </tbody></table>



    



</body>
    
      ';



    $mail->AltBody = '
    
    
<h1>
Confirm your email address</h1>
Please click the button below to confirm your email address:

Confirm Email: ' .$email_verify. '
Once confirmed, this email will be uniquely associated with your account.

Cheers,
The Ferry Team

© ferry, Marcos Akash
    
    
    ';




    if (!$mail->send()) {
        echo "<script>";
        echo "window.location = '../error.php';"; // redirect with javascript, after page loads
        echo "</script>";
        // echo 'Message could not be sent.';
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }





    //PHPMailer


    // https://myaccount.google.com/u/0/lesssecureapps?pli=1



    if (isset($_POST["car_binary"])) {
        $car_bin = 1;
        $reg = mysqli_real_escape_string($db, $_POST["registration_no"]);
        $type = mysqli_real_escape_string($db, $_POST["car_type"]);
        $no = mysqli_real_escape_string($db, $_POST["car_no"]);
        $query = "SELECT * FROM cars;";
        $result = mysqli_query($db, $query);
        $count = mysqli_num_rows($result);
        $count = $count + 1;
        $query = "INSERT INTO `cars`(`car_id`, `registration_no`, `car_type`,`car_no`,  `username`) VALUES ($count,'$reg','$type','$no','$user');";
        // echo ($query);
        mysqli_query($db, $query);
    } else
    {
        $car_bin = 0;
    }
    $query = "SELECT * FROM user;";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    $count = $count + 1;
    $query = "INSERT INTO `user`(`id`, `first_name`, `last_name`,`email`, `mobile`, `gender`, `password`, `car_binary`, `email_binary`, `username`, `hash`) VALUES ($count,'$f_name','$l_name','$e', '$mob', '$gend','$pswd',$car_bin,0,'$user','$hsh');";
    mysqli_query($db, $query);

    echo "<script>";
    // echo "alert('An email has been sent to you. Confirm your email to login');";
    echo "alert('Thanks for signing up. Please check your email for confirmation!');";
    echo "window.location.href = '../index.php';"; // redirect with javascript, after page loads
    echo "</script>";

    // ob_end_clean();
    // die();
}
// session_destroy();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
