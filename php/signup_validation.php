<?php
ob_start();
// print_r($_POST);

foreach ($_POST as $key => $value)
    echo $key . '=' . $value . '<br />';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

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


    //     $to      = $email; 
    //     $subject = 'Signup | Verification'; 
    //     $message = '

    //     Thanks for signing up!
    //     Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

    //     ------------------------
    //     Username: ' . $username . '
    //     Password: ' . $password . '
    //     ------------------------

    //     Please click this link to activate your account:
    //     http://www.yourwebsite.com/verify.php?email=' . $email . '&hash=' . $hash . '

    // '; 

    //     $headers = 'From:noreply@yourwebsite.com' . "\r\n"; 
    //     mail($to, $subject, $message, $headers); 

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
        echo ($query);
        mysqli_query($db, $query);
    } else
        $car_bin = 0;
    $query = "SELECT * FROM user;";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    $count = $count + 1;
    $query = "INSERT INTO `user`(`id`, `first_name`, `last_name`,`email`, `mobile`, `gender`, `password`, `car_binary`, `email_binary`, `username`, `hash`) VALUES ($count,'$f_name','$l_name','$e', '$mob', '$gend','$pswd',$car_bin,0,'$user','$hsh');";
    mysqli_query($db, $query);

    // ob_end_clean();
    // die();
}
session_destroy();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
