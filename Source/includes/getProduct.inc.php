<?php

        include "./models/Products.php";

        $product = new Products();
        $products = $product->getProduct();

        if ($products === false) {
            return false;
        } else {
            // session_start();
            $_SESSION['products'] = $products;
        }
        
?>