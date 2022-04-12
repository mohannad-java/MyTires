<?php

    if(isset($_POST['search'])) {
        $size1 = $_POST['size1'];
        $size2 = $_POST['size2'];
        $ring = $_POST['r'];

        include "../models/Db.php";
        include "../controllers/FilterContr.php";

        $filter = new FilterContr($size1, $size2, $ring);
    }

?>