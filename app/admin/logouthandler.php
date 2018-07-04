<?php
	session_start();
    echo "eeeeeeee";
	session_destroy();
    header('location:../visitor/home.php')
?>