<?php
    if(isset($_POST['search'])) {
        $tiername = $_POST['tiername'];
        $size1 = $_POST['size1'];
        $size2 = $_POST['size2'];
        $ring = $_POST['r'];
        

        include "../models/Db.php";
        include "../controllers/FilterContr.php";

        
        $filtr = new FilterContr($size1, $size2, $ring, $tiername);

        $filter = $filtr->filterProducts();
        $filtered=array(array());
        $i=0;
        $z=0;
        while($row = $filter->fetch_assoc()) {
                    $z=0;
                    $z++;
                    $filtered[$i][$z]=$row['user_id'];
                    $z++;
                    $filtered[$i][$z]=$row['tire_id'];
                    $z++;
                    $filtered[$i][$z]=$row['pic'];
                    $z++;
                    $filtered[$i][$z]=$row['name'];
                    $z++;
                    $filtered[$i][$z]=$row['dec'];
                    $z++;
                    $filtered[$i][$z]=$row['price'];
                    $z++;
                    $filtered[$i][$z]=$row['size1'];
                    $z++;
                    $filtered[$i][$z]=$row['size2'];
                    $z++;
                    $filtered[$i][$z]=$row['Ring_Size'];
                    $z++;
                    $filtered[$i][$z]=$row['qty'];
                    $z++;
                    $filtered[$i][$z]=$row['status'];
                    $z++;
                    $i++;
        }
        session_start();
        $_SESSION['Filter'] = $filtered;


        header("Location: ../index.php?error=ok");
    }

?>