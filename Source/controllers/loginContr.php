<?php

    include '../models/Login.php';

    Class LoginContr extends Login {

        private $email;
        private $password;
        private $role;

        public function __construct($email, $password, $role) {
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }

        public function loginUser() {
             if ($this->emptyInput() == false) {
                // echo "Empty input!";
                header("Location: ../loginaccount.php?error=emptyinput");
                exit();
            }

            $this->getUser($this->email, $this->password, $this->role);
        }

        // Login error handlers
        // inputs handler
        private function emptyInput() {
            $result;
            if (empty($this->email) || empty($this->password)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }
?>