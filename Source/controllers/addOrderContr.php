<?php
    include '../models/Order.php';
    class addOrderContr extends Order {
        private $addToOrders;
        private $i;

        public function __construct($addToOrders,$i) {
            $this->addToOrders = $addToOrders;
            $this->i = $i;
        }
        public function getOrder() {
            if ($this->emptyInput() == false) {
                header("Location: ../cart.php?error=emptyinput");
                exit();
            }

            $this->getOrders($this->addToOrders, $this->i);
        }
        public function addOrder() {
            if ($this->emptyInput() == false) {
                header("Location: ../cart.php?error=emptyinput");
                exit();
            }

            $this->setOrder($this->addToOrders, $this->i);
        }
        public function update_qty() {
            if ($this->emptyInput() == false) {
                header("Location: ../cart.php?error=emptyinput");
                exit();
            }

            $this->updateQty($this->addToOrders, $this->i);
        }
        public function deleteCart() {
            if ($this->emptyInput() == false) {
                header("Location: ../cart.php?error=emptyinput");
                exit();
            }

            $this->deleteCarts($this->addToOrders, $this->i);
        }
        
        private function emptyInput() {
            $result;
            if (empty($this->addToOrders) || empty($this->i)){
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

    }
?>