<?php

    Class Products extends Db {
        protected function setProduct($userid, $image, $name, $dec, $price, $size1, $size2, $ring, $qty) {
                
            $sql = "INSERT INTO tires (`user_id`, `pic`, `name`, `dec`, `price`, `size1`, `size2`, `Ring_Size`, `qty`) 
            VALUES ('$userid', '$image', '$name', '$dec', '$price', $size1, $size2, $ring, $qty)";

            if ($this->connect()->query($sql) === TRUE) {
                header("Location: ../company.php");
                exit();
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // user fetch product information
        public function getProduct() {
            $sql = "SELECT * FROM tires";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }
        }

        // company fetch product information
        public function getAllCompanyProduct($userid) {
            $sql = "SELECT * FROM tires WHERE user_id = $userid";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }
        }

        public function getCompanyProduct($userid, $tireid) {
            $sql = "SELECT * FROM tires WHERE user_id= $userid AND tire_id= $tireid";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return false;
            }
        }

        public function updateProduct($userid, $tireid, $image, $name, $dec, $price, $size1, $size2, $ring, $qty) {
            $sql = "UPDATE tires SET `pic`= '$image',`name`= '$name',`dec`= '$dec',`price`= '$price',`size1`= '$size1',`size2`= '$size2',`ring_size`= '$ring',`qty`= '$qty' WHERE `user_id` = $userid AND `tire_id`= $tireid";
            

            if ($this->connect()->query($sql) === TRUE) {
                header("Location: ../company.php");
                exit();
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        public function deleteProducts($userid, $tireid) {
            $sql = "DELETE FROM tires WHERE user_id= $userid AND tire_id= $tireid";

            if ($this->connect()->query($sql) === TRUE) {
                header("Location: ../company.php");
                exit();
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>