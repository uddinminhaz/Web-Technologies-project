<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Discount Edit</title>
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
				 <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <th align="center"><label>
                        <h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Product Discount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Filter By  <select>
                            <option>Any</option>
                            <option>Name</option>
                            <option>Code</option>
                            </select>
                            <input type="text" name="search" placeholder="Enter keyword Here...."><input type="submit" value="Search Here">
                            </h3>
                            </label>
                </th>
            </tr>
        </table>

        <table align="left" width="100%">

            <tr height="70" align="left">
               <br/>
                <fieldset align="left"><br/>
				<font color="red"> *80% sale on SholderBag  <font> <br/>
				<font color="red"> *40% sale on Shoe  <font> 
				
				
				</fieldset>
				
            </tr>
            <tr>
                <td width="50%" align="center">
                    <h3>
                       Discounted Products : <select>
							
                            <option>Sholder Bag</option>
                            <option>Shoe</option>
                          
                            </select>
                    </h3>
                </td>
                <td width="50%" align="center">
                    <h3>
                        Price :
                        <input type="text" name="price" placeholder="Enter Product Price Here...." value="5000">
                    </h3>
                </td>
            </tr>
            <tr>
                <td width="50%" align="center">
                    <h3>
                        Code :
                        <input type="text" name="code" placeholder="Enter Product Code Here...." value="SB-001">
                    </h3>
                </td>
                <td width="50%" align="center">
                    <h3>
                        Discount :
                        <input type="text" name="discount" placeholder="Enter Product Discount Here...."value="80%">
                    </h3>
                </td>

            </tr>
			<tr>
				<td width="50%" align="center">
                    <h3>
                        
                    </h3>
                </td>
			</tr>
			
            <tr height="30">

            </tr>
            <tr>
                <td align="right">
                    <input type="Submit" name="Update" value="Update" onclick="function1()">
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
<script>
	function function1()
{

window.alert ("Discount Updated");
}
	
	</script>
</html>