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
							<a href="#"><img src="ali.png" alt="Ali baba" width="200"></a>
						</td>
						<td width="630"></td>
						<td>
							<a href="home.php">HOME</a>&nbsp;&nbsp; | &nbsp;&nbsp;
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
											:&nbsp;<input type="text">
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
											:&nbsp;<input type="text">
											&nbsp;&nbsp;<img src="vector_c_i_alphabet_logo.png" alt="" width="30" align="center" >
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
											:&nbsp;<input type="text">
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
											:&nbsp;<input type="Password">
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
											:&nbsp;<input type="Password">
										</td>
									</tr>
								</table>
								<hr>
								<table>
									<tr>
										<td width="450">
											<fieldset>
												<legend>Gender</legend>
												<input type="radio" name="gen" value="Male">Male
												<input type="radio" name="gen" value="Female">Female
												<input type="radio" name="gen" value="Other">Other
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
								<form action="loggedin.php">
								<input type="submit">
                                </form>
								<input type="submit" value="Reset">
							</fieldset>
						</td>
					</tr>
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
</html>