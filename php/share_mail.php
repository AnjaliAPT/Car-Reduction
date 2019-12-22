<?php
ob_start();
// print_r($_POST);

// foreach ($_POST as $key => $value)
//     echo $key . '=' . $value . '<br />';
// if (isset($_POST["from"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    header('Cache-Control: no cache'); //no cache
    session_cache_limiter('private_no_expire'); // works
    //session_cache_limiter('public'); // works too
    include('connect.php');


    $source = mysqli_real_escape_string($db, $_POST["from"]);
    $destination = mysqli_real_escape_string($db, $_POST["to"]);
    $date = mysqli_real_escape_string($db, $_POST["date"]);
    $time = mysqli_real_escape_string($db, $_POST["time"]);;


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

    $query = "SELECT * FROM share;";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    $count = $count + 1;
    $query = "INSERT INTO `share`(`share_id`, `username`, `source`,`destination`,  `date`, `time`, `acceptor_username`) VALUES ($count,'test','$source','$destination','$date','$time', 'acceptor');";
    echo ($query);
    mysqli_query($db, $query);


    ob_end_clean();
    die();
    // session_destroy();
}
