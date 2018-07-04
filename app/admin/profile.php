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
	<title>Profile</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.png" alt="Alibaba" width="200" ></a>
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

				<table >
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
						<td>
							<fieldset>
								<legend><h3>PROFILE</h3></legend>
								<table cellpadding="0" cellspacing="0" width="950">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?= $_SESSION['user']['name']; ?></td>
                <td rowspan="7" align="center">
                    <img width="200" src="../res/user/<?= $_SESSION['user']['pp'];?>"/>
                    <br/>
                    <a href="changepp.php">Change</a>
                </td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $_SESSION['user']['email']; ?></td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>			
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?= $_SESSION['user']['gender']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td><?= $_SESSION['user']['dob']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td><?= $_SESSION['user']['usertype']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>Active</td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>User Since</td>
                <td>:</td>
                <td>01/01/2017</td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Last Login</td>
                <td>:</td>
                <td>1 Days Ago</td>
            </tr>
        </table>
        <hr/>
        <a href="editprofile.php">Edit Profile</a>
        <a href="loggedin.php">Home</a>
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
</html>