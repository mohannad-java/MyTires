<?php
    include '../models/Db.php';
    include '../models/Order.php';
    if(isset($_POST['tm'])) {
        $selectedOrder = $_POST['selectedId'];

        $selected = new Order();
    
        $select = $selected->getSelectedOrder($selectedOrder);

        $selectedOrder=array(array());
        // var_dump($select);
        $i = 0;
        $x = 0;
        while($row = $select->fetch_assoc()) {
            if($i == 0) {
                $selectedOrder[$i][0] = $row['tireid'];
                $selectedOrder[$i][1] = $row['pic'];
                $selectedOrder[$i][2] = $row['name'];
                $selectedOrder[$i][3] = $row['price'];
                $selectedOrder[$i][4] = $row['qty'];
                $selectedOrder[$i][5] = $row['likes'];
                $i++;
            } elseif($i > 0) {
                if($selectedOrder[$x][0] == $row['tireid']) {
                    $selectedOrder[$x][5] = $selectedOrder[$x][5] + $row['likes'];
                } else {
                    $selectedOrder[$i][0] = $row['tireid'];
                    $selectedOrder[$i][1] = $row['pic'];
                    $selectedOrder[$i][2] = $row['name'];
                    $selectedOrder[$i][3] = $row['price'];
                    $selectedOrder[$i][4] = $row['qty'];
                    $selectedOrder[$i][5] = $row['likes'];
                    $x++;
                    $i++;
                }
            }
        }
        session_start();
        $_SESSION['selectedOrder'] = $selectedOrder;

        header("Location: ../myCart.php");
    }
?>