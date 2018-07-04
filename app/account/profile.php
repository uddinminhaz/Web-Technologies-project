<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="user")
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
	<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr><th colspan="3" align="right" width="60%">
				<a href="../user_pages/home.php"><img src="ali.png" align="left" align="top" width="20%"></a>
				<br>
				<br>
		
				<input type="text" name="search" placeholder="Enter keyword Here....">
				<input type="submit" value="Search Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="../account/login.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="../user_pages/order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="../user_pages/cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		<tr>
			<td width="13%" valign="top">
			<label><b> Account</b></label><br><hr>
			<ul>
			<li><a href="../user_pages/home.php">Home</a>	</li>
			<li><a href="profile.php">View profile</a>	</li>	
			<li><a href="../user_pages/order.php">My Orders </a></li>
			<li><a href="editprofile.php">Settings</a></li>
			<li><a href="changepass.php">Change Password</a></li>
			<li><a href="changepp.php">Change Profile Picture</a></li>
			<li><a href="../user_pages/logouthandler.php">Logout </a></li>
			</ul>
		<label><b>Catagories</b></label><br><hr>
			<ul>
			<a href="../user_pages/select persons male.php">Men's Product</a><hr>
			<li><a href="../user_pages/spm products.php?pname=Shirt">Men's Shirts</a></li>
			<li><a href="../user_pages/spm products.php?pname=Pant">Men's Pants</a></li>
			<li><a href="../user_pages/spm products.php?pname=Shoe">Men's Shoes</a></li>
			<li><a href="../user_pages/spm products.php?pname=Belt">Belt</a></li><br>
			<a href="../user_pages/select persons female.php">Women's Product</a><hr>
			<li><a href="../user_pages/spf products.php?pname=Dress">Dresses</a></li>
			<li><a href="../user_pages/spf products.php?pname=Pant">Pants</a></li>
			<li><a href="../user_pages/spf products.php?pname=Shoe">Shoes</a></li>
			<li><a href="../user_pages/spf products.php?pname=Bags">Bags</a></li><br>
			<a href="../user_pages/select persons kids.php">Kid's Product</a><hr>
			<li><a href="../user_pages/spk products.php?pname=Dress">Dress</a></li>
			<li><a href="../user_pages/spk products.php?pname=Diapers">Diapars</a></li>
			<li><a href="../user_pages/spk products.php?pname=Shoe">Shoes</a></li>
			<li><a href="../user_pages/spk products.php?pname=Toys">Toys</a></li><br>
			<a href="../user_pages/accessories.php">Accessories</a><hr>
			<li><a href="../user_pages/ack products.php?pname=Wallet">Wallet</a></li>
			<li><a href="../user_pages/ack products.php?pname=Bag">Bags</a></li>
			<li><a href="../user_pages/ack products.php?pname=BackCover">Backcovers</a></li>
			<li><a href="../user_pages/ack products.php?pname=HandBand">Handsbands</a></li><br>
			<a href="../user_pages/electronics.php">Electronics</a><hr>
			<li><a href="../user_pages/eck products.php?pname=Mobile">Mobile</a></li>
			<li><a href="../user_pages/eck products.php?pname=TableFan">Table Fans</a></li>
			<li><a href="../user_pages/eck products.php?pname=HeadPhone">Headphones</a></li>
			<li><a href="../user_pages/eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
			</ul>
			<label><b>Report</b></label><hr>
			<ul>
			<li><a href="../user_pages/myPurchase.php">My Purchase Stastics</a></li>
			<li><a href="../user_pages/mylastPurchaseList.php">My Last Purchase List </a></li>
			<li><a href="../user_pages/mymostVisitedProduct.php">My Most Visited Product List </a></li>
			<li><a href="../user_pages/mymostPurchasedProduct.php">My Most Purchased Product List </a></li>
			<li><a href="../user_pages/myfavouriteList.php">My Favourite List </a></li>
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
					<img width="150" src="../res/user/<?= $_SESSION['user']['pp'];  ?>"/> 
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
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
                <td>Address </td>
                <td>:</td>
                <td><?= $_SESSION['user']['address']; ?></td>
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