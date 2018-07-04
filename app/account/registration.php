<?php include "../../data/user_access.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
</head>
<body width="1200">
	<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="3">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="../visitor/home.php"><img src="ali.png" alt="Ali baba" width="200"></a>
						</td>
						<td width="630"></td>
						<td>
							<a href="../visitor/home.php">HOME</a>&nbsp;&nbsp; | &nbsp;&nbsp;
							<a href="login.php">LOGIN</a>&nbsp;&nbsp; | &nbsp;&nbsp;
							<a href="registration.php">REGISTRATION</a>
					
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="350"  align="center" >
				<table border="0">
				<form method="post">
					<tr> 
						<td width="450">
							<fieldset>
								<legend><h3>REGISTRATION</h3></legend>
								<table>
									<tr>
										<td width="150">
											<span>Name</span>
										</td>
										<td>
											:&nbsp;<input type="text" name="name">
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="150">
											<span>Email</span>
										</td>
										<td>
											:&nbsp;<input type="text" name="email">
											&nbsp;&nbsp;<abbr title="hint: sample@example.com"><img src="vector_c_i_alphabet_logo.png" alt="" width="30" align="center" ></abbr>
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="150">
											<span>User Name</span>
										</td>
										<td>
											:&nbsp;<input type="text" name="uname">
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="150">
											<span>Password</span>
										</td>
										<td>
											:&nbsp;<input type="Password" name="pass">
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="150">
											<span>Confirm Password</span>
										</td>
										<td>
											:&nbsp;<input type="Password" name="cpassword">
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="150">
											<span>Address</span>
										</td>
										<td>
											:&nbsp;<input type="text" name="address">
											<div id="addplace">
											    
											</div>
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="450">
											<fieldset>
												<legend>Gender</legend>
												<input type="radio" name="gender" value="male">Male
												<input type="radio" name="gender" value="female">Female
												<input type="radio" name="gender" value="other">Other
											</fieldset>
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="450">
											<fieldset>
												<legend>Date of Birth</legend>
												<table>
													<tr>
														<td >
															<input type="text" name="day" placeholder="Day" size="7"> /
														</td>
														<td>
															<input type="text" name="month" placeholder="Month" size="7"> /
														</td>
														<td>
															<input type="text" name="year" placeholder="Year" size="7">
														</td>
														<td>
															&nbsp;(dd/mm/yyyy)
														</td>
													</tr>
												</table>
											</fieldset>
										</td>
									</tr>
								</table>
								<hr>
								
								<input type="submit" value="submit">
                               
                                <hr>
								<input type="submit" value="Reset">
							</fieldset>
						</td>
					</tr>
					</form>
				</table>
			</td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<h4>Copyright © 2017</h4>
			</td>
		</tr>
	</table>
</body>
<script>

</html>
<?php



	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../Data/user_access.php");
		
		$flag=0;
		
		$username=$_REQUEST['uname'];
		
		if(str_word_count($_REQUEST['name']<2)){
			echo "Name must contain 2 words";
			$flag=0;
		}
		
		if(!preg_match('/[^a-zA-z_]/',$uname)){
			
			$result=searchUser($uname);
			
			if($result==null){
			}else{
				echo " <ol> <li>Username already in use </li></br>";
				$flag=0;
			}
			
		}else{
			echo " <li>Invalid Characters in UserName</li> </br>";
			$flag=0;
		}
		
		if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
		   
        }else
		{
			 echo "<li>Invalid email format</li> </br>";
			 $flag=0;
		}
		
		if(strlen($_REQUEST['pass'])>=8){
			
			if($_REQUEST['pass']==$_REQUEST['cpass'] ){
			}else{
				echo "<li>Password Didn't Match</li> </br>";
				$flag=0;
			}
		}else{
			echo "<li>Password Needs to be 8 Character long </li></br>";
			$flag=0;
		}
		
		if (empty($_REQUEST['gender']))
		{
			echo 'gender not selected(select Male/Female/Other)';
			$flag=0;
			
		}else{}

		if($flag!=1){
			$username=$_REQUEST['uname'];
			$name=$_REQUEST['name'];
			$password=$_REQUEST['pass'];
			$email=$_REQUEST['email'];
			$gender=$_REQUEST['gender'];
			$address=$_REQUEST['address'];
			$day=$_REQUEST['day'];
			$month=$_REQUEST['month'];
			$year=$_REQUEST['year'];
			$dob="$day/$month/$year";
			
			$usertype="user";
			$status="pending";
			
			
			
			if(addUser($username,$usertype,$password,$name,$gender,$email,$dob,$address,$status)==true){
            echo "<script>
                    alert('Registration Completed , Please wait for admin confirmation for login. Thank you ');
                   
                 </script>";
				 die();
					
					
			}else{
				echo "Server issue's try again later";
			}
		}else{
			  echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  "; 
		}	 
	}
 
?>