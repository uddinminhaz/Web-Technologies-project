<?php
	if(require_once("db.php"))
    {
		
	 function getAllUsers(){
            $sql = "SELECT * FROM users";        
            $result = executeSQL($sql);
         
            $allUser = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $allUser[$i] = $row;
			}
            return $allUser;
            }
        
    function getUsersByName($searchvalue){
            $sql = "SELECT * FROM users WHERE name LIKE '%$searchvalue%'";        
            $result = executeSQL($sql);
         
            $UserByName = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $UserByName[$i] = $row;
			}

            return $UserByName;				
	        }
        
    function getUsersByEmail($searchvalue){
            $sql = "SELECT * FROM users WHERE email LIKE '%$searchvalue%'";        
            $result = executeSQL($sql);

            $Useremail = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $Useremail[$i] = $row;
			}

            return $Useremail;				
	        }
			
        
    function getUsersByType($searchvalue){
            $sql = "SELECT * FROM users WHERE usertype LIKE '%$searchvalue%'  ";   
            $result = executeSQL($sql); 
            $Userstatus = array();
            for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $Userstatus[$i] = $row;
			}
            return $Userstatus;				
	        }
        //imo ai khane
        
    function getUsersByStatus($searchvalue){
            $sql = "SELECT * FROM users WHERE status LIKE '%$searchvalue%'  ";   
            $result = executeSQL($sql); 
            $Userstatus = array();
            for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $Userstatus[$i] = $row;
			}
            return $Userstatus;				
	        }
			
		 function getUsersBy_Usertype_And_Active($active){
            $sql = "SELECT * FROM users WHERE usertype LIKE 'user' And status LIKE '%$active%'";   
            $result = executeSQL($sql); 
            $actives = array();
            for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $actives[$i] = $row;
			}
            return $actives;				
	        }	
			////imo ai khane sesh 2 ta page ar function
        
    function getUsersByUserName($searchvalue){
            $sql = "SELECT * FROM users WHERE username LIKE '%$searchvalue%'";        
            $result = executeSQL($sql);
         
            $UserName = mysqli_fetch_assoc($result);

            return $UserName;				
	        }
        
    function DeleteUsersByUserName($searchvalue){
            $sql = "DELETE FROM users WHERE username='$searchvalue'";        
            $result = executeSQL($sql);
            
            return $result;				
	        }
        
    function UpdateUserByUserName($User){
            $sql = "UPDATE users SET usertype='$User[usertype]', name='$User[name]',email='$User[email]', gender='$User[gender]',dob='$User[dob]', pp='$User[pp]',address='$User[address]',status='$User[status]' WHERE  username='$User[username]'";
            $result = executeSQL($sql);
            return $result;
            }
        
         function dailyvisitor()
        {
            $sql = "SELECT * FROM dailyvisitor";
            $result = executeSQL($sql);
            while($row=mysqli_fetch_assoc($result))
			{
                $visitorCounter = $row['count'];
                $visitorCounterNew =$visitorCounter+1;
                $sql1 = "UPDATE dailyvisitor SET count=$visitorCounterNew";
                $result1 = executeSQL($sql1);
			}			
	   }
        function getVisitorCount()
        {
            $sql = "SELECT * FROM dailyvisitor";
            $result = executeSQL($sql);
            while($row=mysqli_fetch_assoc($result))
			{
                $visitorCounter = $row['count'];
			}
            return $visitorCounter;
        }
        
    }
	
	else
    {
            echo "Database not found";
	}
	
?>