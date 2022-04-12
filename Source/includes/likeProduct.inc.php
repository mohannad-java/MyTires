<?php
        include '../models/Db.php';
        include "../models/Products.php";

        if(isset($_POST['submit'])) {
            $userid = $_POST['userid'];
            $tireid = $_POST['tireid'];
            $like = 1;
        }

        $likes = new Products();
        $like = $likes->setRating($userid, $tireid, $like);

        


?>