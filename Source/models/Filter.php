<?php    
        
        Class Filter extends Db {
        
        public function getfiltredProductbysize($size1, $size2, $ring) {
            $sql = "SELECT * FROM tires WHERE `status` = 'active' AND `size1` = '$size1' AND `size2` = '$size2' AND `Ring_Size` = '$ring'";
            $result = $this->connect()->query($sql);

            if ($result->num_rows == 0) { 
                header("Location: ../index.php?error=noProductfound");
                exit();
            }

            return $result;
        }
        public function getfiltredProductbyTirename($category) {
            $sql = "SELECT * FROM tires WHERE `status` = 'active' AND `name` = '$category'";
            $result = $this->connect()->query($sql);

            if ($result->num_rows == 0) { 
                header("Location: ../index.php?error=noProductfound");
                exit();
            }
            return $result;
        }
        public function getfiltredProductbyall($category, $size1, $size2, $ring) {
            $sql = "SELECT * FROM tires WHERE `status` = 'active'AND `name` = '$category' AND `size1` = '$size1' AND `size2` = '$size2' AND `Ring_Size` = '$ring'";
            $result = $this->connect()->query($sql);

            if ($result->num_rows == 0) { 
                header("Location: ../index.php?error=noProductfound");
                exit();
            }
            return $result;
        }

    }
?>