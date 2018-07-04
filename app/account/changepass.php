<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Change Password</title>
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
			<td valign="top" height="400">
			<br/>
				<fieldset>Message box</fieldset>
<br />
<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <br/>
    <form method="post">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="150"></td>
                <td width="10"></td>
                <td width="150"></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3">Current Password</font></td>
				<td>:</td>
                <td><input type="password" name="cpassword" /></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
				<td>:</td>
                <td><input type="password" name="npassword" /></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
				<td>:</td>
                <td><input type="password" name="rpassword" /></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Update" />
        <a href="../user_pages/home.php">Home</a>

</fieldset>

			</td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<h4>Copyright © 2017</h4>
			</td>
		</tr>
	</table>
</body>
</form>
</html>

<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
			$username=$_SESSION['user']['username'];
			$cpassword=$_REQUEST['cpassword'];
			$npassword=$_REQUEST['npassword'];
			$rpassword=$_REQUEST['rpassword'];
			
			 include "../../data/user_access.php";
			if(($cpassword==$_SESSION['user']['password'])&&($npassword==$rpassword))
			{ 
			 $result=updateUser_pass($username,$rpassword);
			 $_SESSION['user']['password']=$rpassword;
			  header("location:changepass.php");
			 echo "<script>
                    alert('Password Updated');
                    
                 </script>";
	
			}
			else
			{
				 echo "<script>
                    alert('Password Not Updated. Cheak current password/retype password');
                    
                 </script>";
				  header("location:changepass.php");
				
			}

		}		
?>

