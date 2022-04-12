<?php   
    if(isset($_POST['edit'])) {
        $userid = $_POST['userid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];
        

        // Instantiate SignupController class
        include '../models/Db.php';
        include '../controllers/updateUserContr.php';

        $update = new UpdateUserContr($userid, $name, $email, $password, $confirmPass);

        // Running error handlers and user signup
        $update->editUser();
        // Going back to front page
        // header("Location: ../loginaccount.php");
    }
?>