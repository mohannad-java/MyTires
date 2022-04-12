<?php
    class User extends Db {
        public function updateUser($userid, $name, $email, $password) {

            $sql = "SELECT password FROM users 
            WHERE user_id = '$userid'";

            $result = $this->connect()->query($sql);

            $result = $result->fetch_assoc();
            $oldPwdHashed = $result['password'];
            
            if(password_verify($password, $oldPwdHashed)) {
                $sql = "UPDATE `users` SET `name`='$name',`email`='$email' WHERE `user_id` = '$userid'";

                if ($this->connect()->query($sql) === TRUE) {
                    header("Location: ../index.php?success=updated");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } if (!password_verify($password, $oldPwdHashed)) {

                $hashedPwd = password_hash($password,PASSWORD_BCRYPT);

                $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$hashedPwd' WHERE `user_id` = '$userid'";
                    
                if ($this->connect()->query($sql) === TRUE) {
                    header("Location: ../index.php?success=updated");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    }
?>