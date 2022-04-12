<?php
// session_start();
Class Order extends Db {
    
        protected function getOrders($addToOrders,$i) {
            $sql = "SELECT order_id FROM `orders`";
            $order = $this->connect()->query($sql);
            $maxnum=0;
            while($row = $order->fetch_assoc()){
                if($maxnum<$row['order_id']){
                    $maxnum = $row['order_id'];
                }
            }
            if($maxnum == 0){
                $maxnum = 1;
            }
            elseif($maxnum > 0){
                $maxnum+=1;
            }
            else{
                header("Location: ../index.php?error=error_in_order_id");
            }
            $_SESSION['max']=$maxnum;
        }
        protected function setOrder($addToOrders,$i) {
                   $maxnum = $_SESSION['max'];
            for($x=0;$x<$i;$x++){
                    $addToOrders[$x][0]=$maxnum;
            }
            for($x=0;$x<$i;$x++){
                    $order_id = $addToOrders[$x][0];
                    $user_id = $addToOrders[$x][1];
                    $tire_id = $addToOrders[$x][2];
                    $qty = $addToOrders[$x][3];
                    $total = $addToOrders[$x][4];
                    $sql = "INSERT INTO `orders`(`order_id`, `user_id` , `tire_id`, `qty`, `total`) 
                     VALUES ('$order_id','$user_id', '$tire_id','$qty','$total')";
            
                if ($this->connect()->query($sql) === TRUE) {
                    continue;
                } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            $sql = "SELECT users.email as email, tires.name as name, orders.qty as qty
                FROM ((users INNER JOIN tires ON tires.user_id = users.user_id) 
                INNER JOIN orders ON orders.tire_id = tires.tire_id) 
                WHERE order_id = $maxnum";

            $result = $this->connect()->query($sql);

            $text = "";

            $email = array(array());
            $i = 0;
            $x = 0;

            while ($row = $result->fetch_assoc()) {
               if($i == 0) {
                   $email[$i][0] = $row['email'];
                   $text = $text."Product: ".$row['name']." Qty: ".$row['qty']."\n";
                   $email[$i][1] = $text;
                } elseif($i > 0) {
                    if($email[$x][0] == $row['email']){
                        $text = $text."Product: ".$row['name']." Qty: ".$row['qty']."\n";
                        $email[$x][1] = $text;
                    } else {
                        $email[$i][0] = $row['email'];
                        $text = "";
                        $text = $text."Product: ".$row['name']." Qty: ".$row['qty']."\n";
                        $email[$i][1] = $text;
                    }
                }
                $i++;
            }
            $i = 0;


            foreach($email as $key => $value) {
                $to = $value[0];
                $subject = "Order";
                $message = $value[1];

                mail($to, $subject, $message) ? "OK" : "ERROR";
            }
        }
        protected function updateQty($addToOrders,$i) {
            for($x=0;$x<$i;$x++){
                    $tire_id = $addToOrders[$x][2];
                    $qty = $addToOrders[$x][3];
                    $sql = "UPDATE tires SET `qty`=`qty`- $qty WHERE tire_id=$tire_id";
            
                if ($this->connect()->query($sql) === TRUE) {
                    continue;
                } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        protected function deleteCarts($addToOrders,$i) {
                    $user_id = $addToOrders[0][1];
                    $sql = "DELETE from cart where user_id = $user_id";
            
                if ($this->connect()->query($sql) === TRUE) {

                } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                }
           
        }
        public function getOrdersID($userid) {
            $sql = "SELECT DISTINCT order_id FROM orders WHERE user_id = $userid";

            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION['order_id'] = $result;
            } else {
                return false;
            }
        }
        public function getSelectedOrder($orderId) {
            $sql = "SELECT tires.tire_id as tireid,tires.pic as pic, tires.name as name, tires.price as price, orders.qty as qty, raiting.likes as likes 
            FROM ((tires INNER JOIN orders ON tires.tire_id = orders.tire_id)
            INNER JOIN raiting ON tires.tire_id = raiting.tire_id) 
            WHERE order_id = $orderId
            ORDER BY tires.tire_id";

            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                // session_start();
                 return $result;
            } else {
                header("Location: ../myCart.php?error=noorder");
            }
        }
        
   
}
?>