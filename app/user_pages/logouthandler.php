<?php
	session_start();
    echo "eeeeeeee";
	//session_unset($_SESSION['username']);
	session_destroy();
    header('location:../visitor/home.php')
?>