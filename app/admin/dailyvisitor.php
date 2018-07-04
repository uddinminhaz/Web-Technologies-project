<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daily Visitor Info</title>
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
			<td valign="top" height="400" >
			<fieldset>
    <legend>
        <b>USER | SEARCH</b>
    </legend>
    Filter By
    <select>
        <option>Any</option>
        <option>Name</option>
        <option>Email</option>
        <option>Status</option>
    </select>
    <input />
    <input type="submit" value="Search" />
    <a href="create.php">Create New</a>
    <a href="Dashboard.php">Go to Dashboard</a>
</fieldset>
<br/>
<fieldset>
    <legend>
        <b>Today Visitor Statistics</b>
    </legend>
    <p>Out of 200 Visitor 58 Registerd User</p>
</fieldset>
<br>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">NAME</th>
        <th align="left">EMAIL</th>
        <th align="left">STATUS</th>
        <th colspan="3"></th>
    </tr>
    <tr>
        <td>Bob Marsh</td>
        <td>bob@aiub.edu</td>
        <td>Active</td>
        <td width="40"><a href="detail.php">Detail</a></td>
        <td width="30"><a href="edit.php">Edit</a></td>
        <td width="45"><a href="delete.php">Delete</a></td>
    </tr>
    <tr>
        <td>Lana Lane</td>
        <td>lana@live.com</td>
        <td>Active</td>
        <td width="40"><a href="detail.php">Detail</a></td>
        <td width="30"><a href="edit.php">Edit</a></td>
        <td width="45"><a href="delete.php">Delete</a></td>
    </tr>
    <tr>
        <td>Clark Kent</td>
        <td>kent@gmail.com</td>
        <td>Active</td>
        <td width="40"><a href="detail.php">Detail</a></td>
        <td width="30"><a href="edit.php">Edit</a></td>
        <td width="45"><a href="delete.php">Delete</a></td>
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
