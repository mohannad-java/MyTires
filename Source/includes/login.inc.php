<?php

    if (isset($_POST['login'])) {

        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST['role'];

        // Instantiate SignupController class
        include "../models/Db.php";
        // include "../models/login.php";
        include "../controllers/loginContr.php";

        $login = new LoginContr($email, $password, $role);

        // Running error handlers and user signup
        $login->loginUser();
        // Going back to front page
        header("Location: ../index.php?error=ok");
    }

    if (isset($_POST['clogin'])) {

        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST['role'];

        // Instantiate SignupController class
        include "../models/Db.php";
        // include "../models/login.php";
        include "../controllers/loginContr.php";

        $login = new LoginContr($email, $password, $role);

        // Running error handlers and user signup
        $login->loginUser();
        // Going back to front page
        header("Location: ../index.php?error=ok");
    }

?>