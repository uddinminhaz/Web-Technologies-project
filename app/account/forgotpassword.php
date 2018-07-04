<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body width="1200">
	<table width="1080" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="3">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="../visitor/home.php"><img src="ali.png" alt="Ali" width="200"></a>
						</td>
						<td width="530"></td>
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
				<form method="post">
					<tr> 
						<td width="350">
							<fieldset>
								<legend><h3>FORGOT PASSWORD</h3></legend>
								<table>
									<tr>
										<td width="100" >
											<span>Enter Email</span>
										</td>
										<td>
											:&nbsp;<input type="text" name="email">
										</td>
									</tr>
								</table>
								<hr>
								
								<input type="submit" value="submit">
                               
							</fieldset>
						</td>
					</tr>
					</form>
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
</html>
<?php

		if($_SERVER["REQUEST_METHOD"]=='POST'){

			$email=$_REQUEST['email'];
			
			include_once("../../data/user_access.php");
			$result=searchEmail($email);
			var_dump($result);

			if($email==$result['email'] ){
					session_start();
					$_SESSION['user']=$result;


					if($_SESSION['user']['usertype']=="user"){
					header("location:../user_pages/home.php");
					}
			}else{
				echo "<script>
                    window.alert('Wrong Email');
                    document.location='login.php'; 
                 </script>";
				//header("location:login.php");
				}

		}






?>
