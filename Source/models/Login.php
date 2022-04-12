<?php

    Class Login extends Db {
        protected function getUser($email, $password, $role) {
            $sql = "SELECT password FROM users 
            WHERE email = '$email' AND role = '$role'";

            $result = $this->connect()->query($sql);

            if ($result->num_rows == 0) { 
               header("Location: ../loginaccount.php?error=usernotfound");
               exit();
            }

            $result = $result->fetch_assoc();
            $pwdHashed = $result['password'];
           

            if (password_verify($password, $pwdHashed)) {
                $sql = "SELECT * FROM users 
                WHERE email = '$email' 
                AND password = '$pwdHashed'";

                $result = $this->connect()->query($sql);
                if ($result->num_rows == 0) { 
                    header("Location: ../loginaccount.php?error=usernotfound");
                    exit();
                }

                $user = $result->fetch_assoc();

                session_start();
                $_SESSION["userid"] = $user['user_id'];
                $_SESSION["username"] = $user['name'];
                $_SESSION["role"] = $user['role'];
                $_SESSION['email'] = $user['email'];
            } else {
                header("Location: ../loginaccount.php?error=passnotmatch");
                exit();
            }
        }
    }

?>