<?php

    session_start();
    session_unset();
    unset($_SESSION['filter']);


    // Going back to front page
    header("Location: ../index.php");
?>