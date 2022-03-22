<?php

    if(isset($_GET['tire_id'])) {
        // Grabbing the data
        session_start();
        $userid = $_SESSION['userid'];
        $tireid = $_GET['tire_id'];
        // Instantiate Controllers class
        include "../models/Db.php";
        include "../controllers/DeleteProductsContr.php";
            

        $delete = new DeleteProductsContr($userid, $tireid);
        $delete->deleteProduct();

        header("Location: ../company.php");
        }
?>