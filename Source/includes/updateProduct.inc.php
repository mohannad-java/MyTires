<?php

    if(isset($_POST['update'])) {
        // Grabbing the data
        $userid = $_POST['userid'];
        $tireid = $_POST['tireid'];
        // $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
        $image_name = $_FILES['file']['name'];
        $image_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $erorr = $_FILES['file']['error'];
        $name = $_POST['name'];
        $dec = $_POST['dec'];
        $price = $_POST['price'];
        $size1 = $_POST['size1'];
        $size2 = $_POST['size2'];
        $ring = $_POST['ring'];
        $qty = $_POST['qty'];


        // Instantiate SignupController class
        include "../models/Db.php";
        include "../controllers/updateProductsContr.php";

        $update = new UpdateProductContr($userid, $tireid, $image_name, $image_size, $tmp_name, $erorr, $name, $dec, $price, $size1, $size2, $ring, $qty);

        $update->editProduct();

        header("Location: ../company.php");
    }
    
?>