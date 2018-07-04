<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Profile</title>
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
			<form method="post" enctype="multipart/form-data">
			<td valign="top" height="400" align="center">
				<table>
					<tr>
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
											<input type="submit"value="Update"/>
											<a href="../user_pages/home.php">Home</a>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
            </form>
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
                    document.location='../account/changepp.php'; 
                 </script>";
			
			
		}else{
			echo "Fix All Errors";
		}
		
		
	


?>

					

