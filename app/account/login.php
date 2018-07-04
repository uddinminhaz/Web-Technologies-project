<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<form method="post">
<body width="1200">
	<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="3">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="../visitor/home.php"><img src="ali.png" alt="Ali" width="200"></a>
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
			<td height="400" valign="center" align="center" colspan="2">
				<table border="0">
					<tr> 
						<td width="350">
							<fieldset>
								<legend><h3>LOGIN</h3></legend>
								<table>
									<tr>
										<td width="100">
											<span>User Name</span>
										</td>
										<td>
											:&nbsp;<input type="text" name="username">
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<td width="100">
											<span>Password</span>
										</td>
										<td>
											:&nbsp;<input type="Password" name ="password">
										</td>
									</tr>
								</table>
								<hr>
								<input type="checkbox">&nbsp; Remember Me
								<br><br>
								
								<input type="submit" value="submit">
                                
								&nbsp;&nbsp;<a href="forgotpassword.php">Forgot Password? </a>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<h3>Copyright © 2017</h3>
			</td>
		</tr>
	</table>
</body>
</form>
</html>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		$name=$_REQUEST['username'];
	
		include_once("../../data/user_access.php");
		
		$result=searchUser($name);
				
			
			if(($_REQUEST['username']==$result['username'] )&&($_REQUEST['password'])==$result['password']){
				session_start();
				$_SESSION['user']=$result;

				if($_SESSION['user']['usertype']=="admin"){
					header("location:../admin/loggedin.php");
				}
				else if($_SESSION['user']['usertype']=="user"){
					header("location:../user_pages/home.php");
				}
				
			}
			else{
				 ?>
                       <script>
                          alert("Invali Username Or Password");
                        </script>
                        <?php
			}
		
	}

?>