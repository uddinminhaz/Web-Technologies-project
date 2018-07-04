<?php
	if(require_once("db.php"))
    {
	function session(){
		
		session_start();
		if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
		}
		
		if(isset($_SESSION['user'])==true)
		{
			if($_SESSION['user']['usertype']!="admin")
			{
				header("location:../account/login.php");
			}
		}

	}
        
    }
	
	else
    {
            echo "Database not found";
	}
	
?>