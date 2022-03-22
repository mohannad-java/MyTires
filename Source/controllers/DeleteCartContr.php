<?php
    include '../models/Cart.php';

    class DeleteCartContr extends Cart {
        private $userid;
        private $tireid;

        public function __construct($userid, $tireid) {
            $this->userid = $userid;
            $this->tireid = $tireid;
        }

        public function deleteCart() {
            if ($this->emptyInput() == false) {
                header("Location: ../cart.php?error=emptyinput");
                exit();
            }

            $this->deleteCarts($this->userid, $this->tireid);
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