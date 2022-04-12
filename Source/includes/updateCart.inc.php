<?php

    if(isset($_POST['up'])) {
        // Grabbing the data
        
        $qty = $_POST['qty'];
        $tireid = $_POST['tire_id'];
        // Instantiate Controllers class
        include "../models/Db.php";
        include "../controllers/updateCartContr.php";
            

        $update = new updateCartContr($qty, $tireid);
        $update->updateCart();

        header("Location: ../cart.php");
        }
?>