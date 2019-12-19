<?php
// ob_start();
$name_error = $email_error = $company_error = $subject_error = $text_error = "";
$nme = $eml = $cmp = $sbj = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $nme = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $nme)) {
            $name_error = "Only letters and white space allowed";
        }
    }


    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $eml = test_input($_POST["email"]);
        if (!filter_var($eml, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }
    if (empty($_POST["company"])) {
        $company_error = "Company is required";
    } else {
        $cmp = test_input($_POST["company"]);
    }

    if (empty($_POST["subject"])) {
        $subject_error = "Subject is required";
    } else {
        $sbj = test_input($_POST["subject"]);
    }
    if (empty($_POST["message"])) {
        $text_error = "Message is required";
    } else {
        $msg = test_input($_POST["message"]);
    }

    if ($name_error == "" and $email_error == "" and $subject_error == "" and $company_error == "" and $text_error == "") {

        $name_error = $email_error = $company_error = $subject_error = $text_error = "";
        $nme = $eml = $cmp = $sbj = $msg = "";


        echo "<script>";
        echo "alert('Your message has been sent. Thank you');";
        echo "window.location = 'index.php';"; // redirect with javascript, after page loads
        echo "</script>";


        // header('Cache-Control: no cache'); //no cache
        // session_cache_limiter('private_no_expire'); // works
        //session_cache_limiter('public'); // works too
        // session_start();
        // include('connect.php');
        // ob_end_clean();
        // header("location: index.php");

        die();
    }
    // session_destroy();

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
