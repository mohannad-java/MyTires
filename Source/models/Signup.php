<?php

    Class Signup extends Db {
        protected function setUser($name, $email, $password, $role) {

            $hashedPwd = password_hash($password,PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (name, email, password, role)
            VALUES ('$name', '$email', '$hashedPwd', '$role')";

            
            if ($this->connect()->query($sql) === TRUE) {
                header("Location: ../loginaccount.php?success=Done");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }

        protected function checkUser($email) {

            $sql = "SELECT name FROM users 
            WHERE email = '$email'";

            $result = $this->connect()->query($sql);

            if ($result->num_rows > 0) {
                return false;
            } else {
                return true;
            }
        }
    }

?>