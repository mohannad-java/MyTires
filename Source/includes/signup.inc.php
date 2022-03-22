<?php

    if(isset($_POST['signUp'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];
        $role = $_POST['role'];
        

        // Instantiate SignupController class
        include '../models/Db.php';
        include '../controllers/signupContr.php';

        $signup = new SignupContr($name, $email, $password, $confirmPass, $role);

         // Running error handlers and user signup
        $signup->signupUser();
        // Going back to front page
        header("Location: ../loginaccount.php");
    } 
    elseif(isset($_POST['csignUp'])) {
        $name = $_POST['cname'];
        $email = $_POST['cemail'];
        $password = $_POST['cpassword'];
        $confirmPass = $_POST['cconfirmPass'];
        $role = $_POST['role'];

        // Instantiate SignupController class
        include '../models/Db.php';
        include '../controllers/signupContr.php';

        $signup = new SignupContr($name, $email, $password, $confirmPass, $role);

         // Running error handlers and user signup
        $signup->signupUser();
        // Going back to front page
        header("Location: ../loginaccount.php");
    } 
    else {
         echo "Error";
    }

?>