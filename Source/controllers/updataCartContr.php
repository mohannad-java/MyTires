<?php
    include '../models/Cart.php';

    class updataCartContr extends Cart {
        private $qty;
        private $tireid;

        public function __construct($qty, $tireid) {
            $this->qty = $qty;
            $this->tireid = $tireid;
        }

        public function updataCart() {
            if ($this->emptyInput() == false) {
                header("Location: ../cart.php?error=emptyinput");
                exit();
            }

            $this->updataCarts($this->qty, $this->tireid);
        }

         private function emptyInput() {
            $result;
            if (empty($this->qty) || empty($this->tireid)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }
?>