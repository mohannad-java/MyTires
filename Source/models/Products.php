<?php

    Class Products extends Db {
        protected function setProduct($userid, $image, $name, $dec, $price, $size1, $size2, $ring, $qty) {
            $sql = "SELECT MAX(tire_id) as tire_id FROM tires";
            $result = $this->connect()->query($sql);
            $result = $result->fetch_assoc();
            $tireid = $result['tire_id']+1; 
            $sql = "INSERT INTO tires (`user_id`, `tire_id`, `pic`, `name`, `dec`, `price`, `size1`, `size2`, `Ring_Size`, `qty`, `status`) 
            VALUES ('$userid', '$tireid', '$image', '$name', '$dec', '$price', $size1, $size2, $ring, $qty, 'active')";

            if ($this->connect()->query($sql) === TRUE) {
                if ($this->setDefaultRating($userid, $tireid) == TRUE) {
                    header("Location: ../company.php?success=addProducts");
                    exit();
                }
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        protected function setDefaultRating($userid, $tireid) {
            $sql = "INSERT INTO `raiting`(`likes`, `user_id`, `tire_id`) VALUES (0,'$userid','$tireid');";
            if($this->connect()->query($sql) === TRUE) {
                return TRUE;
            }
        }

        public function setRating($userid, $tireid, $like) {
            $sql = "SELECT * FROM `raiting` WHERE `user_id`='$userid' AND `tire_id`='$tireid';";
            $result = $this->connect()->query($sql);
            if ($result->num_rows > 0) { 
                // var_dump($result);
                header("Location:  ../myCart.php?error=alreadyLiked");
                exit();
            }

            // $sql = "SELECT `tire_id`, `likes` FROM `raiting` WHERE `tire_id`='$tireid'";
            // $result = $this->connect()->query($sql);
            // $maxLikes = 1;
            // if ($result->num_rows > 0) {
            //     $maxLikes = 0;
            //     $result = $result->fetch_assoc();
            //     $maxLikes = $result['likes']+$like;
            // }
            $sql = "INSERT INTO `raiting`(`user_id`, `tire_id`, `likes`) VALUES ('$userid','$tireid','$like')";

            if($this->connect()->query($sql) === TRUE) {
                header("Location: ../myCart.php?success=likedProduct");
                exit();
            } else {
                echo "ERROR!";
            }
        }
        // user fetch product information
        public function getProduct() {
            $sql = "SELECT tires.`user_id` as user_id, tires.`tire_id` as tire_id, tires.`pic` as pic, tires.`name` as name, tires.`dec` as `dec`, tires.`price` as price, tires.`size1` as size1, tires.`size2` as size2, tires.`Ring_Size` as Ring_Size, tires.`qty` as qty, tires.`status` as status, raiting.likes as likes 
                FROM tires,raiting 
                WHERE tires.`tire_id` = raiting.`tire_id`
                ORDER BY tires.tire_id;";
            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
               $Product = array(array());
                $i = 0;
                $x = 0; 
                while ($row = $result->fetch_assoc()) {
                    if($i == 0) {
                        $Product[$i]['user_id'] = $row['user_id'];
                        $Product[$i]['tire_id'] = $row['tire_id'];
                        $Product[$i]['pic'] = $row['pic'];
                        $Product[$i]['name'] = $row['name'];
                        $Product[$i]['dec'] = $row['dec'];
                        $Product[$i]['price'] = $row['price'];
                        $Product[$i]['size1'] = $row['size1'];
                        $Product[$i]['size2'] = $row['size2'];
                        $Product[$i]['Ring_Size'] = $row['Ring_Size'];
                        $Product[$i]['qty'] = $row['qty'];
                        $Product[$i]['status'] = $row['status'];
                        $Product[$i]['likes'] = $row['likes'];
                        $i++;
                    } elseif($i > 0) {
                        if($Product[$x]['tire_id'] == $row['tire_id']){
                            $Product[$x]['likes'] = $Product[$x]['likes'] + $row['likes'];
                        } else {
                            $Product[$i]['user_id'] = $row['user_id'];
                            $Product[$i]['tire_id'] = $row['tire_id'];
                            $Product[$i]['pic'] = $row['pic'];
                            $Product[$i]['name'] = $row['name'];
                            $Product[$i]['dec'] = $row['dec'];
                            $Product[$i]['price'] = $row['price'];
                            $Product[$i]['size1'] = $row['size1'];
                            $Product[$i]['size2'] = $row['size2'];
                            $Product[$i]['Ring_Size'] = $row['Ring_Size'];
                            $Product[$i]['qty'] = $row['qty'];
                            $Product[$i]['status'] = $row['status'];
                            $Product[$i]['likes'] = $row['likes'];
                            $x++;
                            $i++;
                        }
                    }
                }
                return $Product;
            } else {
                return false;
            }
        }

        // company fetch product information
        public function getAllCompanyProduct($userid) {
            $sql = "SELECT * FROM tires WHERE user_id = $userid AND `status` = 'active'";
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
            $sql = "UPDATE tires SET `pic`= '$image',`name`= '$name',`dec`= '$dec',`price`= '$price',`size1`= '$size1',`size2`= '$size2',`ring_size`= '$ring',`qty`= '$qty', `status`='active'  WHERE `user_id` = $userid AND `tire_id`= $tireid";
            

            if ($this->connect()->query($sql) === TRUE) {
                header("Location: ../company.php");
                exit();
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        public function deleteProducts($userid, $tireid) {
                       $sql = "UPDATE tires SET `status`='inactive'  WHERE `user_id` = $userid AND `tire_id`= $tireid";

            if ($this->connect()->query($sql) === TRUE) {
                header("Location: ../company.php");
                exit();
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>