<?php

        include "./models/Products.php";
        
        // session_start();
        $userid = $_SESSION["userid"];
        $product = new Products();
        $products = $product->getCompanyProduct($userid);

        if ($products === false) {
            return false;
        } else {
            return $products;
        }
?>