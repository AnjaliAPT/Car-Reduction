<?php

session_start();

session_destroy();
unset($_SESSION['user']);
unset($_SESSION['fname']);
unset($_SESSION['email']);

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
        Swal.fire({
            title: "You are now logged out",
            type: "success"
        }).then(function() {
            window.location = "../index.php";
        });
    });
</script>