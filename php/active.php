<?php

include('connect.php');
date_default_timezone_set("Asia/Kolkata");
// $x = date("m/d/Y");
// echo $x;
// $s = explode("/", $x);
// echo $s[2];



session_start();

$user = $_SESSION['user'];



$extract = "SELECT * FROM share WHERE (username='$user' OR acceptor_username='$user') AND active=1 ORDER BY share_id DESC;";
// echo $extract;
$res = mysqli_query($db, $extract);
// echo $res;
$found = 0;
$res_check = mysqli_num_rows($res);
if ($res_check > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $curr_d = explode("/", date("m/d/Y"));
        $d = explode("/", $row['date']);
        $t = explode(":", $row['time']);
        $curr_t = explode(":", date("H:i"));
        // $found = 0;
        // echo "($curr_d[0] <= $d[0]) && ($curr_d[1] <= $d[1]) && ($curr_d[2] <= $d[2])";


        if ($curr_d[2] > $d[2]) {
            $query = "UPDATE share SET active=0 WHERE share_id='" . $row["share_id"] . "';";
            mysqli_query($db, $query);
            break;
        } else if (($curr_d[2] == $d[2]) && ($curr_d[0] > $d[0])) {
            $query = "UPDATE share SET active=0 WHERE share_id='" . $row["share_id"] . "';";
            mysqli_query($db, $query);
            break;
        } else if (($curr_d[2] == $d[2]) && ($curr_d[0] == $d[0]) && ($curr_d[1] > $d[1])) {
            $query = "UPDATE share SET active=0 WHERE share_id='" . $row["share_id"] . "';";
            mysqli_query($db, $query);
            break;
        } else if (($curr_d[2] == $d[2]) && ($curr_d[0] == $d[0]) && ($curr_d[1] == $d[1])  && ($curr_t[0] > $t[0])) {
            $query = "UPDATE share SET active=0 WHERE share_id='" . $row["share_id"] . "';";
            mysqli_query($db, $query);
            break;
        } else if (($curr_d[2] == $d[2]) && ($curr_d[0] == $d[0]) && ($curr_d[1] == $d[1])  && ($curr_t[0] == $t[0])  &&  ($curr_t[1] > $t[1])) {
            $query = "UPDATE share SET active=0 WHERE share_id='" . $row["share_id"] . "';";
            mysqli_query($db, $query);
            break;
        } else
            $found = 1;

        // echo $row["acceptor_username"] == $username;
        // die();

        if (substr_count($row["source"], ",") > 2) {
            $temp = explode(",", $row["source"]);
            $row["source"] = $temp[0] . "," . $temp[1];
        }

        if (substr_count($row["destination"], ",") > 2) {
            $temp = explode(",", $row["destination"]);
            $row["destination"] = $temp[0] . "," . $temp[1];
        }



?>
        <div class="row my-row slide-active" id="<?= $row["share_id"] ?>">

            <?php
            if ($row["acceptor_username"] == $user) {
            ?>

                <script>
                    document.getElementById("<?= $row["share_id"] ?>").className += " inverted";
                    // console.log(v);
                    // console.log("added1");
                </script>

            <?php

            } else {
            ?>
                <script>
                    document.getElementById("<?= $row["share_id"] ?>").className += " straight";
                    // console.log(v);
                    // console.log("added2");
                </script>

            <?php
            }
            ?>

            <div class="column col-sm-12 col-md-6 my-column-img">
                <img src="<?= $row['image_dir'] ?>">
            </div>
            <div class="column col-sm-12 col-md-6 my-column-data">


                <div class="upper-column">
                    <div class="column-from">
                        <strong><?= $row['source'] ?></strong>
                    </div>
                    <div class="column-from-to-img">
                        <img src="Resources/images/arrow.png">
                    </div>
                    <div class="column-to">
                        <strong><?= $row['destination'] ?></strong>
                    </div>
                </div>
                <div class="lower-column">
                    <p>DATE<br /><span class="has"><?= $row['date'] ?></span></p>
                    <p> TIME<br /><span class="has"><?= $row['time'] ?></span></p>
                    <p>SHARED BY<br /><span class="has"><?= $row['acceptor_username'] ?></span></p>
                </div>
            </div>
        </div>


    <?php
    }
}
if ($found == 0) {
    ?>
    <div class="notfound">
        <h2>No Rides Found</h2>
        <img src="Resources/images/nodata.png" class="active_img">
    </div>
<?php
}

?>