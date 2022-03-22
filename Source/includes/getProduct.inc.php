<?php

        include "./models/Products.php";

        $product = new Products();
        $products = $product->getProduct();

        if ($products === false) {
            return false;
        } else {
            return $products;
        }
?>