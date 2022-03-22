<?php
    include '../models/Products.php';

    Class UpdateProductContr extends Products {
        private $userid;
        private $tireid;
        private $image_name;
        private $image_size;
        private $tmp_name;
        private $image_erorr;
        private $new_image_name;
        private $name;
        private $dec;
        private $price;
        private $size1;
        private $size2;
        private $ring;
        private $qty;

        public function __construct($userid, $tireid, $image_name, $image_size, $tmp_name, $image_erorr, $name, $dec, $price, $size1,$size2, $ring, $qty) {
            $this->userid = $userid;
            $this->tireid = $tireid;
            $this->image_name = $image_name;
            $this->image_size = $image_size;
            $this->tmp_name = $tmp_name;
            $this->image_erorr = $image_erorr;
            $this->name = $name;
            $this->dec = $dec;
            $this->price = $price;
            $this->size1 = $size1;
            $this->size2 = $size2;
            $this->ring = $ring;
            $this->qty = $qty;
        }

        public function editProduct() {
            if ($this->emptyInput() == false) {
                // echo "Empty input!";
                header("Location: ../add_product.php?error=emptyinput");
                exit();
            }
            if ($this->invalidSize() == false) {
                // echo "Username or email taken!";
                header("Location: ../add_product.php?error=invalidInput");
                exit();
            }
            if($this->imageError() == 'error') {
                $em = "unknown error occurred!";
                header("Location: ../add_product.php?error=$em");
            } elseif ($this->imageError() == 'size') {
                $em = "Sorry, your file is too large.";
                header("Location: ../add_product.php?error=$em");
            } elseif ($this->imageError() == 'allowed') {
                $em = "You can't upload files of this type";
                header("Location: ../add_product.php?error=$em");
            } 

        }

        
        // Signup error handlers
        // inputs handler

        private function emptyInput() {
            
                $result;
                if (empty($this->userid) || empty($this->tireid) || empty($this->image_name) || empty($this->name) || empty($this->price) 
                || empty($this->size1) || empty($this->size2) || empty($this->dec) || empty($this->ring) || empty($this->qty)) {
                    $result = false;
                } else {
                    $result = true;
                }
                return $result;
           
        }

        private function imageError() {
            if($this->image_erorr === 0) {
                if($this->image_size > 12500000) {
                    return 'size';
                } else {
                    $image_ex = pathinfo($this->image_name, PATHINFO_EXTENSION);
                    $image_ex_lc = strtolower($image_ex);

                    $allowed_exs = array("jpg", "jpeg", "png");

                    if(in_array($image_ex_lc, $allowed_exs)) {
                        $this->new_image_name = uniqid("IMG-", true).'.'.$image_ex_lc;
                        $image_upload_path = '../uploads/'.$this->new_image_name;
                        move_uploaded_file($this->tmp_name, $image_upload_path);

                        $this->updateProduct($this->userid, $this->tireid, $this->new_image_name, $this->name, $this->dec, $this->price, $this->size1, $this->size2, $this->ring, $this->qty);
                    } else {
                        return 'allowed';
                    }
                }
            } else {
                return 'error';
            }
        }

        private function invalidSize() {
            $result;
            if (!preg_match("/^[0-9]*$/", $this->size1)) {
                $result = false;
            } 
            elseif (!preg_match("/^[0-9]*$/", $this->size2)) {
                $result = false;
            }
            elseif (!preg_match("/^[0-9]*$/", $this->ring)) {
                $result = false;
            }
            elseif (!preg_match("/^[0-9]*$/", $this->price)) {
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }
    }
?>