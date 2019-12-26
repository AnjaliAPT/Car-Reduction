<?php

ob_start();

if (isset($_POST['login_user']) && isset($_POST['login_pswd'])) {
    $login_user = $_POST['login_user'];
    $login_pswd = $_POST['login_pswd'];

    if (empty($login_user) || empty($login_pswd)) {
        echo "<p>Invalid Username or Password</p>";
        die();
    } else {
        include('connect.php');

        $query = "SELECT * FROM user WHERE username='$login_user' AND password = '$login_pswd' LIMIT 1;";
        // echo $query;
        $res = mysqli_query($db, $query);
        $num = mysqli_num_rows($res);
        $res = mysqli_fetch_assoc($res);
        if ($num == 1) {
            if ($res['email_binary'] == 0) {
                echo "<p>Your Email is not verified.<br/>Verify your email before Login</p>";
                die();
            } else {
                session_start();
                echo 1;
                $_SESSION['name'] = $res['first_name'];
                $_SESSION['user'] = $res['username'];;
                // header("location: ../main.php");
                ob_end_flush();
                die();
            }
        } else {
            echo "<p>Invalid Username or Password</p>";
            die();
        }
    }
}
