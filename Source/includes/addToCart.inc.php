<?php

if(isset($_POST['add_product'])) {
    session_start();
        if($_SESSION['userid']){
         // Grabbing the data  
            $userid = $_POST['userid'];
            $tireid = $_POST['tire_id'];
            $image = $_POST['image'];
            $name = $_POST['name'];
            $dec = $_POST['dec'];
            $price = $_POST['price'];
            $size1 = $_POST['size1'];
            $size2 = $_POST['size2'];
            $ring = $_POST['ring'];
            $qty =1;
          
         // Instantiate SignupController class
            include "../models/Db.php";
            include "../controllers/addToCartContr.php";

            $add = new AddToCartContr($userid, $tireid, $image, $name, $dec, $price, $size1, $size2, $ring, $qty);

            $add->addCart();

            header("Location: ../index.php");
        }
        else{
            header("Location: ../loginaccount.php");
        }
    }
    else{
        echo "Error";
    }



?>