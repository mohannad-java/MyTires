<?php

        include "./models/Cart.php";
        $userid = $_SESSION["userid"];
        $Cart = new Cart();
        $Carts = $Cart->getCart($userid);

        if ($Carts === false) {
            return false;
        } else {
            return $Carts;
        }
?>