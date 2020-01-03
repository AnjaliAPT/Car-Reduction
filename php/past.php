<?php

include('connect.php');
date_default_timezone_set("Asia/Kolkata");


session_start();

$user = $_SESSION['user'];



$extract = "SELECT * FROM share WHERE (username='$user' OR acceptor_username='$user') AND active=0 ORDER BY share_id DESC;";

$res = mysqli_query($db, $extract);
$found = 0;
$res_check = mysqli_num_rows($res);
if ($res_check > 0) {
    while ($row = mysqli_fetch_assoc($res)) {

   

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
                </script>

            <?php

            } else {
            ?>
                <script>
                    document.getElementById("<?= $row["share_id"] ?>").className += " straight";
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
else {
    ?>
    <div class="notfound">
        <h2>No Rides Found</h2>
        <img src="Resources/images/nodata.png" class="active_img">
    </div>
<?php

}

?>