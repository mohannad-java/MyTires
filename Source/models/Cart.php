<?php
Class Cart extends Db {
        protected function setCart($userid, $tireid, $image, $name, $dec, $price, $size1, $size2, $ring, $qty) {
            $sql = "INSERT INTO `cart`(`user_id`, `tire_id`, `pic`, `name`, `dec`, `price`, `size1`, `size2`, `ring_size`, `qty`) 
            VALUES ('$userid','$tireid', '$image','$name','$dec', '$price', '$size1', '$size2', '$ring', '$qty')";

            // $sql = "INSERT INTO cart (`user_id`, `tire_id`,`pic`, `name`, `dec`, `price`, `size1`, `size2`, `Ring_Size`, `qty`) 
            // VALUES ('$userid', '$tireid', '$image', '$name', '$dec', '$price', '$size1', '$size2', '$ring', '$qty')";


            if ($this->connect()->query($sql) === TRUE) {
               header("Location: ../index.php");
                exit();
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        protected function checkCart($tireid,$userid) {

            $sql = "SELECT tire_id FROM cart 
            WHERE tire_id = '$tireid' and user_id = '$userid'";

            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return false;
            } else {
                return true;
            }
        }
         // user fetch product information
         public function getCart($userid) {
            $sql = "SELECT * FROM cart 
            WHERE user_id = '$userid'";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }
        }
        public function deleteCarts($userid, $tireid) {
            $sql = "DELETE FROM cart WHERE user_id= $userid AND tire_id= $tireid";

            if ($this->connect()->query($sql) === TRUE) {
                header("Location: ../cart.php");
                exit();
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
        
    
    ?>