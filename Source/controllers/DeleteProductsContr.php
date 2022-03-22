<?php
    include '../models/Products.php';

    class DeleteProductsContr extends Products {
        private $userid;
        private $tireid;

        public function __construct($userid, $tireid) {
            $this->userid = $userid;
            $this->tireid = $tireid;
        }

        public function deleteProduct() {
            if ($this->emptyInput() == false) {
                header("Location: ../company.php?error=emptyinput");
                exit();
            }

            $this->deleteProducts($this->userid, $this->tireid);
        }

         private function emptyInput() {
            $result;
            if (empty($this->userid) || empty($this->tireid)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }
?>