<?php

    if(isset($_POST['up'])) {
        // Grabbing the data
        
        $qty = $_POST['qty'];
        $tireid = $_POST['tire_id'];
        // Instantiate Controllers class
        include "../models/Db.php";
        include "../controllers/updataCartContr.php";
            

        $updata = new updataCartContr($qty, $tireid);
        $updata->updataCart();

        header("Location: ../cart.php");
        }
?>