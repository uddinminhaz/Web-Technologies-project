<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php include "../../data/admin_user_service.php"; ?>
<?php
	$user1="active";
	
        $totalvisitor = getVisitorCount();
        $Users= getUsersBy_Usertype_And_Active($user1);
            $a=0;
            foreach ($Users as $User) { 
                        $a=$a+1;
			}		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.PNG" alt="ali" width="200"></a>
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
		<td valign="top" width="" >
					<hr><h3 align="center">Dash Board</h3><hr>
					<table width="100%">
                        <tr height="20">
                            
                        </tr>
					    <tr align="center">
					        <td>
					            <a href="registereduser.php?st=active"><?=$a?></a>
					        </td>
					        <td>
					            <img src="../res/design/user.png" width="50" height="50" align="left"/>
					        </td>
					        <td>
					            <a href="dailyvisitor.php"><?=$totalvisitor?></a>
					        </td>
					         <td>
					            <img src="../res/design/visitor.png" width="50" height="50" align="left"/>
					        </td>
					        <td>
					            <a href="messages.php">3</a>
					        </td >
					         <td>
					            <img src="../res/design/msg.png" width="50" height="50" align="left"/>
					        </td>
					        <td>
					            <a href="notification.php">5</a>
					        </td>
					         <td>
					            <img src="../res/design/notification.png" width="50" height="50" align="left"/>
					        </td>
					    </tr>
					    <tr align="center">
					        <td>
					            <a href="registereduser.php?st=active">Registered User</a>
					        </td>
					        <td></td>
					        <td>
					            <a href="dailyvisitor.php">Daily Visit</a>
					        </td>
					        <td></td>
					        <td>
					            <a href="messages.php">New Messages</a>
					        </td>
					        <td></td>
					        <td>
					            <a href="notification.php">New Notificatios</a>
					        </td>
					    </tr>
					</table>
					<hr>
					    <h3 align="center">Recent Followers</h3>
					<hr>
					<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="center">Project</th>
        <th align="center">Manager</th>
        <th align="center">Status</th>
        <th align="center">Progress</th>
    </tr>
    <tr>
        <td align="center"><a href="https://www.google.com/">Google</a></td>
        <td align="center">Mr.X</td> 
        <td align="center">Completed</td>
        <td align="center">100%</td>                     
    </tr>
    <tr>
        <td align="center"><a href="https://www.facebook.com/">Facebook</a></td>
        <td align="center">Mr.Y</td>
        <td align="center">In Progress</td>
        <td align="center">50%</td>             
    </tr>
    <tr>
        <td align="center"><a href="https://twitter.com/twitter?lang=en">Twiter</a></td>
        <td align="center">Mr.Z</td>
        <td align="center">In Progress</td>
        <td align="center">75%</td>              
    </tr>
    <tr>
        <td align="center"><a href="https://www.linkedin.com/">Linkedin</a></td>
        <td align="center">Mr.I</td>
        <td align="center">Completed</td>
        <td align="center">100%</td>      
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
