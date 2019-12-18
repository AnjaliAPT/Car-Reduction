<?php
$name_error = $email_error = $subject_error = $company_error = $text_error = $sendmessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $n)) {
            $name_error = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["company"])) {
        $name_error = "Company is required";
    }

    if (empty($_POST["subject"])) {
        $name_error = "Subject is required";
    } 

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }
    if (empty($_POST["text"])) {
        $text_error = "Description is required";
    } 


    if ($name_error == "" and $email_error == "" and $title_error == "" and $desc_error == "") {
        $sendmessage = "Your message has been sent. Thank you";
        
        header("location: index.php");
        sleep(5);
        $sendmessage = "";
        die();
    }
    // session_destroy();
}