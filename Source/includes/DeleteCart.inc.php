<?php

    if(isset($_GET['tire_id'])) {
        // Grabbing the data
        session_start();
        $userid = $_SESSION['userid'];
        $tireid = $_GET['tire_id'];
        // Instantiate Controllers class
        include "../models/Db.php";
        include "../controllers/DeleteCartContr.php";
            

        $delete = new DeleteCartContr($userid, $tireid);
        $delete->deleteCart();

        header("Location: ../cart.php");
        }
?>