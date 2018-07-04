<?php
	if(require_once("db.php")){
	
		function searchUser($username){
			
				$sql="SELECT * FROM users WHERE username='$username'";
				$result = executeSQL($sql);
			
			 return mysqli_fetch_assoc($result);
		 }
		 function searchEmail($email){
			
				$sql="SELECT * FROM users WHERE email='$email'";
				$result = executeSQL($sql);
			
			 return mysqli_fetch_assoc($result);
		 }
		 
		 
		function addUser($username,$usertype,$password,$name,$gender,$email,$dob,$address,$status){
		
			$sql="INSERT INTO users(username, usertype, password, name,email,gender,dob, address, status) VALUES ('$username','$usertype','$password','$name','$email','$gender','$dob','$address','$status')";
			$result = executeSQL($sql);
			return $result;
		      }
        
        function adduseradmin($username,$name,$password,$email,$gender,$address,$dob,$usertype,$status){
		
			$sql="INSERT INTO users(username, usertype, password, name,email,gender,dob, address, status) VALUES ('$username','$usertype','$password','$name','$email','$gender','$dob','$address','$status')";
			$result = executeSQL($sql);
			return $result;
		      }
		

		 function updateUser($username,$name,$email,$gender,$dob,$add){
	
			 $sql="UPDATE users SET name='$name', email='$email',gender='$gender',dob='$dob',address='$add' WHERE username='$username'";
			 $result = executeSQL($sql);
			
			 
			return searchUser($username) ;
		 }
		 
		function updateUser_pass($uname,$pass){
			
			$sql="UPDATE users SET password='$pass' WHERE username='$uname'";
			$result = executeSQL($sql);
			return 1;
		
		}
		function updateUser_pic($uname,$itempic){
			
			$sql="UPDATE users SET pp='$itempic' WHERE username='$uname'";
			$result = executeSQL($sql);
			return searchUser($uname) ;
		
		}

		function allcustomer()
		{
			global $conn;
			$query="SELECT * FROM users WHERE type='user' ";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$customer[$i]=$row;
			}
			return $customer;
			}
		}
        
       

					
	}else{
		echo "Database not found";
	}
	
?>