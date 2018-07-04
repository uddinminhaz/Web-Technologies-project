<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Picture Change</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.png" alt="Ali" width="200"></a>
						</td>
						<td width="630"></td>
						<td>
							<span>Logged in as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a></span> &nbsp;&nbsp; | &nbsp;&nbsp;
							 <a href="logouthandler.php">Logout</a>

						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="200" valign="top">
				<br>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</span>

				<table>
					<tr >
						<td width="200">
							<hr>
						</td>
					</tr>
				</table>
				<ul>
				    <li><a href="Dashboard.php">Dashboard</a></li>
					<li><a href="loggedin.php">Home</a></li>
					<li><a href="profile.php">View Profile</a></li>
					<li><a href="editprofile.php">Edit Profile</a></li>
					<li><a href="changepp.php">Change Profile Picture</a></li>
					<li><a href="changepass.php">Change Password</a></li>
					<li><a href="logouthandler.php">Logout</a></li>
				</ul>
				<hr>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</span><br>
				<hr>
				<ul>
					<li><a href="search.php">Search</a></li>
					<li><a href="create.php">Create New</a></li>
				</ul>
				<hr>
				
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categories</span><br>
        <hr>
        <ul>
            Products
            <hr>
			<li><a href="orders.php">Orders</a></li>
             <li><a href="allProducts.php">All Products</a></li>
            <li><a href="settings.php">Product Settings</a></li>
<!--
            <li><a href="Discount.php">Discount's</a></li>
			<li><a href="editdiscount.php">Edit Discount</a></li>
-->
            <li><a href="todays_offer.php">Today's Offer</a></li><br>
            </ul>
            <hr>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report</span><br>
            <hr>
            <ul>
            User
            <hr>
            <li><a href="statistics_report.php">Statistics Report</a></li>
            <li><a href="activity_report.php">Activity Report</a></li>
            </ul>
            <ul>
            Product
            <hr>
            <li><a href="mostVisitedProduct.php">Most Visited Product</a></li>
            <li><a href="bestSellingProduct.php">Best Selling Product</a></li>
            <li><a href="leastSellingProduct.php">Least Selling Product</a></li>
            <li><a href="runningoutofstock.php">Running Out of Stock Product</a></li>
            <li><a href="badproducts.php">Bad Rated Product</a></li>
            <li><a href="income.php">Total Income</a></li><br>
        </ul>
			</td>
			<td valign="top" height="400" align="center">
				<table>
					<tr>
					<form method="post" enctype="multipart/form-data">
						<td width="1000">
						<br/>
						<fieldset>Message box</fieldset>
							<fieldset>
								<legend><h3>PROFILE PICTURE</h3></legend>
								<table >
									<tr>
									<td align="center">
											<img src="../res/user/<?= $_SESSION['user']['pp']; ?>" alt="admin"width="150" height="200">
											<br><br>
											<input type="file" name="itempic" accept="image/*" required> 
										</td>
									</tr>
									<tr>
										<td >
											<hr>
											<input type="submit" value="Update" />
											<a href="loggedin.php">Home</a>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</form>
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
<?php

	if($_SERVER["REQUEST_METHOD"]=='POST'){
			
		
			include "../../data/user_access.php";
			$uname=$_SESSION['user']['username'];
		
			
			$itempic=$_FILES['itempic']['name'];
			var_dump($itempic);
			
			$target = "../res/user/".basename($_FILES['itempic']['name']);
			
			if(move_uploaded_file($_FILES['itempic']['tmp_name'],$target)) {
					echo "Image uploaded successfully";
			}else{
					echo "Failed to upload image";
			}
			
			$result=updateUser_pic($uname,$itempic);
			$_SESSION['user']=$result;
			
			//var_dump($_SESSION['user']);
			 echo "<script>
                    window.alert('Profile picture uploaded Successfully');
                    document.location='changepp.php'; 
                 </script>";
			
			
		}else{
			echo "Fix All Errors";
		}
		
		
	


?>