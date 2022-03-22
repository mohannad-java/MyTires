<?php
    include '../models/Cart.php';

    Class AddToCartContr extends Cart {
        private $userid;
        private $tireid;
        private $image;
        private $name;
        private $dec;
        private $price;
        private $size1;
        private $size2;
        private $ring;
        private $qty;

        public function __construct($userid, $tireid, $image, $name, $dec, $price, $size1,$size2, $ring, $qty) {
            $this->userid = $userid;
            $this->tireid = $tireid;
            $this->image = $image;
            $this->name = $name;
            $this->dec = $dec;
            $this->price = $price;
            $this->size1 = $size1;
            $this->size2 = $size2;
            $this->ring = $ring;
            $this->qty = $qty;
        }

        public function addCart() {
            if ($this->emptyInput() == false) {
                // echo "Empty input!";
               header("Location: ../cart.php?error=emptyinput");
                exit();
            }
            if ($this->tireidTakenCheck() == false) {
                // echo "Username or email taken!";
                header("Location: ../index.php?error=ProductAlreadyAdded");
                exit();
            }
            $this->setCart($this->userid, $this->tireid,$this->image, $this->name, $this->dec, $this->price, $this->size1, $this->size2, $this->ring, $this->qty);
        }

        
        // Signup error handlers
        // inputs handler

        private function emptyInput() {
            $result;
            if (empty($this->userid) || empty($this->tireid)||  empty($this->image) || empty($this->name) 
            || empty($this->price) || empty($this->size1) || empty($this->size2) || empty($this->ring) || empty($this->qty)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
        private function tireidTakenCheck() {
            $result;
            if(!$this->checkCart($this->tireid,$this->userid)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }
?>