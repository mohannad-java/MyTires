<?php

    include '../models/Filter.php';

    class FilterContr extends Filter {

        private $size1;
        private $size2;
        private $ring;
        private $category;

        public function __construct($size1, $size2, $ring, $tiername) {
            $this->size1 = $size1;
            $this->size2 = $size2;
            $this->ring = $ring;
            $this->tiername = $tiername;
        }

        public function filterProducts() {

            if ($this->emptyInputCategory() == 'size') {
                
                return $this->getfiltredProductbysize($this->size1, $this->size2, $this->ring);
            }
            if ($this->emptyInputCategory() == 'cate') {
                
                return $this->getfiltredProductbyTirename($this->tiername);
            }
            if ($this->emptyInputCategory() == 'all') {

                return $this->getfiltredProductbyall($this->tiername, $this->size1, $this->size2, $this->ring);
            }
            if ($this->emptyInputCategory() == false) {
                // echo "Empty input!";
                header("Location: ../index.php?error=emptyinput");
                exit();
            }
        }

        private function emptyInputCategory() {
            $result;
            if (empty($this->tiername) && !empty($this->size1) && !empty($this->size2) && !empty($this->ring)) {
                $result = 'size';
            } elseif(!empty($this->tiername) && empty($this->size1) && empty($this->size2) && empty($this->ring)) {
                $result = 'cate';
            } elseif(!empty($this->tiername) && !empty($this->size1) && !empty($this->size2) && !empty($this->ring)) {
                $result = 'all';
            } else {
                $result = false;
            }
            return $result;
        }
    }
?>