<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products Running Out of Stock</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.PNG" alt="Alibaba" width="200" ></a>
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
				 <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <th align="center"><label><h3>Products Running Out Of Stock (Remaining)</h3></label></th>
            </tr>
        </table>

        <table align="left" width="100%">
            <tr>
                <td width="14%" align="center">
                    <h3>Image</h3>
                </td>
                <td width="14%" align="center">
                   <h3>Category</h3>
                </td>
                <td width="14%" align="center">
                   <h3>Sub-Category</h3>
                </td>
                <td width="14%" align="center">
                    <h3>Code</h3>
                </td>
                <td width="14%" align="center">
                    <h3>Price</h3>
                </td>
                <td width="16%" align="center">
                    <h3>Remaining Quantity</h3>
                </td>
                <td width="14%" align="center">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img src="../res/products/mshirt4.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Men</h3>
                </td>
                <td align="center">
                    <h3>Shirt</h3>
                </td>
                <td align="center">
                    <h3>MS-177</h3>
                </td>
                <td align="center">
                    <h3>550tk</h3>
                </td>
                 <td align="center">
                    <h3>10 </h3>
                </td>
                <td align="center">
                    <a href="settings.php"><input type="submit" value="Edit"/></a>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img src="../res/products/wprog5.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Women</h3>
                </td>
                <td align="center">
                    <h3>Pant</h3>
                </td>
                <td align="center">
                    <h3>WP-111</h3>
                </td>
                <td align="center">
                    <h3>800tk</h3>
                </td>
                <td align="center">
                    <h3>15</h3>
                </td>
                <td align="center">
                    <a href="settings.php"><input type="submit" value="Edit"/></a>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img src="../res/products/kids3.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Kids</h3>
                </td>
                <td align="center">
                    <h3>Shoes</h3>
                </td>
                <td align="center">
                    <h3>KS-8</h3>
                </td>
                <td align="center">
                    <h3>300tk</h3>
                </td>
                <td align="center">
                    <h3>17</h3>
                </td>
                <td align="center">
                    <a href="settings.php"><input type="submit" value="Edit"/></a>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img src="../res/products/mobile.PNG" align="center" width="45%" height="25%">
                </td>
                <td align="center">
                    <h3>Electronics</h3>
                </td>
                <td align="center">
                    <h3>Mobile</h3>
                </td>
                <td align="center">
                    <h3>PS-44</h3>
                </td>
                <td align="center">
                    <h3>10000tk</h3>
                </td>
                <td align="center">
                    <h3>13</h3>
                </td>
                <td align="center">
                    <a href="settings.php"><input type="submit" value="Edit"/></a>
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