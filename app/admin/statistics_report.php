<?php include "../../data/admin_user_service.php"; ?>
<?php
        $user11="user";
        $admin1="admin";
        $executive1="executive";
        $Users = getUsersByType($user11);
		$admins = getUsersByType($admin1);
        $executives = getUsersByType($executive1);
		$a=0;
		$b=0;
		$c=0;
		$t=0;
			foreach ($Users as $User) { 
				$a=$a+1;
			}	
			foreach ($admins as $admin) { 
				$b=$b+1;
			}	
			foreach ($executives as $executive) { 
				$c=$c+1;
			}	
			$t=$a+$b+$c;	
?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Statistic Report | User</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.PNG" alt="Ali" width="200"></a>
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
					<li><a href="../account/login.php">Logout</a></li>
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
			<td valign="top" height="400" >
			<fieldset>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <b>USER | STATISTICS</b>
            </td>
            <td align="right">
                <input type="submit" value="Print"/>
            </td>
        </tr>
    </table>
</fieldset>
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">

    <tr>
        <th align="left">ROLE</th>
        <th align="center" width="110">NO OF USERS</th>
    </tr>
	  
		<tr>
        <td>User</td>
        <td align="center"><?=$a?></td>          
		</tr>
		
		<tr>
        <td>Admin</td>
        <td align="center"><?=$b?></td>          
		</tr>
		
		<tr>
        <td>Executive</td>
        <td align="center"><?=$c?></td>          
		</tr>
    <tr>
        <td align="right"><b>Total</b></td>
        <td align="center"><b><?=$t?></b></td>        
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
