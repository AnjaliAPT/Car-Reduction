<?php
ob_start();

include('connect.php');

if (isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['hash']) && !empty($_GET['hash'])) {

    $email = mysqli_escape_string($db, $_GET['email']);
    $hash = mysqli_escape_string($db, $_GET['hash']);
    $search = "SELECT email, hash FROM user WHERE email='" . $email . "' AND hash='" . $hash . "' ;";
    mysqli_query($db, $search);
    $match = mysqli_num_rows($db, $search);
    if ($match > 0) {
        $search = "SELECT email_binary FROM user WHERE email='" . $email . "' AND hash='" . $hash . "' ;";
        $result = mysqli_fetch_assoc($search);
        if ($result == 0) {
            $query = "UPDATE user SET email_bianry='1' WHERE email='" . $email . "' AND hash='" . $hash . "';";
            mysqli_query($db, $query);
            echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
        } else {
            echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
        }
        header('../index.php');
    } else {
        echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
    }
} else {
    echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}
