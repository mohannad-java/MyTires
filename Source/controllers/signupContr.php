<?php
    include '../models/Signup.php';
    Class SignupContr extends Signup {
        private $name;
        private $email;
        private $password;
        private $confirmPass;
        private $role;

        public function __construct($name, $email, $password, $confirmPass, $role) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->confirmPass = $confirmPass;
            $this->role = $role;
        }

         public function signupUser() {
            if ($this->emptyInput() == false) {
                // echo "Empty input!";
                header("Location: ../signupaccount.php?error=emptyinput");
                exit();
            }
            if ($this->invalidEmail() == false) {
                // echo "Invalid email!";
                header("Location: ../signupaccount.php?error=email");
                exit();
            }

            if ($this->pwdCheck() == false) {
                // echo "Password don't match!";
                header("Location: ../signupaccount.php?error=password_is_low");
                exit();
            }
            if ($this->pwdMatch() == false) {
                // echo "Password don't match!";
                header("Location: ../signupaccount.php?error=passwordmatch");
                exit();
            }
            if ($this->uidTakenCheck() == false) {
                // echo "Username or email taken!";
                header("Location: ../signupaccount.php?error=emailtaken");
                exit();
            }
            
            $this->setUser($this->name, $this->email, $this->password, $this->role);
        }



        // Signup error handlers
        // inputs handler
        private function emptyInput() {
            $result;
            if (empty($this->name) || empty($this->email) || empty($this->password) || empty($this->confirmPass)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
        // Email handler
        private function invalidEmail() {
            $result;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
        // pwd/Cpwd match handler
        private function pwdMatch() {
            $result;
            if($this->password !== $this->confirmPass) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        private function pwdCheck() {
            $result;
            if(strlen($this->password) <= 7) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
        
        private function uidTakenCheck() {
            $result;
            if(!$this->checkUser($this->email)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }

?>