<?php
    include '../models/User.php';
    class UpdateUserContr extends User {
        private $userid;
        private $name;
        private $email;
        private $password;
        private $confirmPass;

       public function __construct($userid, $name, $email, $password, $confirmPass) {
           $this->userid = $userid;
           $this->name = $name;
           $this->email = $email;
           $this->password = $password;
           $this->confirmPass = $confirmPass;
       }

       public function editUser() {
            if ($this->emptyInput() == false) {
                // echo "Empty input!";
                header("Location: ../myaccount.php?error=emptyinput");
                exit();
            }

            if ($this->pwdMatch() == false) {
                // echo "Password don't match!";
                header("Location: ../myaccount.php?error=passwordmatch");
                exit();
            }

            $this->updateUser($this->userid, $this->name, $this->email, $this->password);
        }

        private function emptyInput() {
            
            $result;
            if (empty($this->userid) || empty($this->name) || empty($this->email) || empty($this->password) || empty($this->confirmPass) ) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        private function pwdMatch() {
            $result;
            if($this->password !== $this->confirmPass) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }
?>