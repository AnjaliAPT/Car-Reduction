<?php
ob_start();

include('connect.php');


?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" integrity="sha256-2RS1U6UNZdLS0Bc9z2vsvV4yLIbJNKxyA4mrx5uossk=" crossorigin="anonymous"></script>

<?php

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

?>
            <script>
                console.log('Alerted');
                $(document).ready(function() {
                    Swal.fire({
                        title: 'Congrats! Your account is activated.',
                        width: 600,
                        type: 'success',
                        padding: '3em',
                        backdrop: `rgba(41,95,138,0.4)`
                    })
                })

                "window.location.href = '../index.php';"; // redirect with javascript, after page loads
            </script>


        <?php
            exit();
        } else {


        ?>
            <script>
                console.log('Alerted');
                $(document).ready(function() {
                    Swal.fire({
                        title: 'The url is invalid or your account is already active.',
                        width: 600,
                        type: 'info',
                        padding: '3em',
                        backdrop: `rgba(41,95,138,0.4)`
                    })
                })
                // console.log('Alerted');
            </script>


        <?php

            die();
        }
    } else {


        ?>
        <script>
            console.log('Alerted');
            $(document).ready(function() {
                Swal.fire({
                    title: 'Invalid approach, please use the link that has been send to your email.',
                    width: 600,
                    type: 'error',
                    padding: '3em',
                    backdrop: `rgba(41,95,138,0.4)`
                })
            })

            // echo "window.location.href = '../index.php';"; // redirect with javascript, after page loads
        </script>


    <?php
        die();
    }
} else {


    ?>
    <script>
        console.log('Alerted');
        $(document).ready(function() {
            Swal.fire({
                title: 'Invalid approach, please use the link that has been send to your email.',
                type: 'error',
                width: 600,
                padding: '3em',
                backdrop: `rgba(41,95,138,0.4)`
            })
        })
        // console.log('Alerted');
        // echo "window.location.href = '../index.php';"; // redirect with javascript, after page loads
    </script>


<?php
    die();
}
