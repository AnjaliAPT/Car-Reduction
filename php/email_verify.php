<?php
ob_start();

include('connect.php');

if (isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['hash']) && !empty($_GET['hash'])) {

    $email = mysqli_escape_string($db, $_GET['email']);
    $hash = mysqli_escape_string($db, $_GET['hash']);
    $search = "SELECT email, hash, email_binary FROM user WHERE email='" . $email . "' AND hash='" . $hash . "' ;";
    // echo($search);
    $query = mysqli_query($db, $search);
    $match = mysqli_num_rows($query);
    if ($match > 0) {
        $result = mysqli_fetch_assoc($query);
        if ($result["email_binary"] == 0) {
            $query = "UPDATE user SET email_binary='1' WHERE email='" . $email . "' AND hash='" . $hash . "';";
            mysqli_query($db, $query);
            echo"<script>";
            echo "alert('Your account has been activated, you can now login');";
            echo "window.location.href = '../index.php';"; // redirect with javascript, after page loads
            echo "</script>";
        }
    else {
            echo"<script>";
            echo "alert('The url is invalid or your account is already active.');";
            echo "window.location.href = '../error.php';"; // redirect with javascript, after page loads
            echo "</script>";
        
        }
    }
}
 else {
            echo"<script>";
            echo "alert('Invalid approach, please use the link that has been send to your email.');";
            echo "window.location.href = '../error.php';"; // redirect with javascript, after page loads
            echo "</script>";


}
