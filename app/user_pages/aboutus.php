<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>

<html>

<head><title>About us</title></head>

	<table align="center" width="1200" >
	
			<tr><th colspan="3" align="right" width="60%">
			<a href="home.php"><img src="pictures\ali.png" align="left" align="top" width="20%"></a>
				<br>
				<br>
		
				<input type="text" name="search" placeholder="Enter keyword Here....">
				<input type="submit" value="Search Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		<tr>
		<td  valign="top"  width="13%">
		<label><b> Account</b></label><br><hr>
			<ul>
			<li><a href="home.php">Home</a>	</li>
			<li><a href="../account/profile.php">View profile</a>	</li>	
			<li><a href="order.php">My Orders </a></li>
			<li><a href="../account/editprofile.php">Settings</a></li>
			<li><a href="../account/changepass.php">Change Password</a></li>
			<li><a href="../account/changepp.php">Change Profile Picture</a></li>
			<li><a href="logouthandler.php">Logout </a></li>
			</ul>
		<label><b>Catagories</b></label><br><hr>
			<ul>
			<a href="select persons male.php">Men's Product</a><hr>
			<li><a href="spm products.php?pname=Shirt">Men's Shirts</a></li>
			<li><a href="spm products.php?pname=Pant">Men's Pants</a></li>
			<li><a href="spm products.php?pname=Shoe">Men's Shoes</a></li>
			<li><a href="spm products.php?pname=Belt">Belt</a></li><br>
			<a href="select persons female.php">Women's Product</a><hr>
			<li><a href="spf products.php?pname=Dress">Dresses</a></li>
			<li><a href="spf products.php?pname=Pant">Pants</a></li>
			<li><a href="spf products.php?pname=Shoe">Shoes</a></li>
			<li><a href="spf products.php?pname=Bags">Bags</a></li><br>
			<a href="select persons kids.php">Kid's Product</a><hr>
			<li><a href="spk products.php?pname=Dress">Dress</a></li>
			<li><a href="spk products.php?pname=Diapers">Diapars</a></li>
			<li><a href="spk products.php?pname=Shoe">Shoes</a></li>
			<li><a href="spk products.php?pname=Toys">Toys</a></li><br>
			<a href="accessories.php">Accessories</a><hr>
			<li><a href="ack products.php?pname=Wallet">Wallet</a></li>
			<li><a href="ack products.php?pname=Bag">Bags</a></li>
			<li><a href="ack products.php?pname=BackCover">Backcovers</a></li>
			<li><a href="ack products.php?pname=HandBand">Handsbands</a></li><br>
			<a href="electronics.php">Electronics</a><hr>
			<li><a href="eck products.php?pname=Mobile">Mobile</a></li>
			<li><a href="eck products.php?pname=TableFan">Table Fans</a></li>
			<li><a href="eck products.php?pname=HeadPhone">Headphones</a></li>
			<li><a href="eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
			</ul>
			<label><b>Report</b></label><hr>
			<ul>
			<li><a href="myPurchase.php">My Purchase Stastics</a></li>
			<li><a href="mylastPurchaseList.php">My Last Purchase List </a></li>
			<li><a href="mymostVisitedProduct.php">My Most Visited Product List </a></li>
			<li><a href="mymostPurchasedProduct.php">My Most Purchased Product List </a></li>
			<li><a href="myfavouriteList.php">My Favourite List </a></li>
			</ul>
		</td>
			<td></td>
			<td valign="top" width="40%" >
			
					<table valign="top" width="100%" >
						
						<tr>
							
							<a href="select persons male.php"><img src="pictures\pros1.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="select persons female.php"><img src="pictures\wprog1.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="select persons kids.php"><img src="pictures\kids1.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="accessories.php"> <img src="pictures\handband.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="electronics.php"> <img src="pictures\mobile.png" align="left" align="top" width="15%" height="100" ></a>	
							
						</tr>
					 </table>	
					
					<table align="center" width="100%" >
						<tr  >
                            <th  align="center"><label><h3>About Us</h3></label></th>
			
						</tr>
					 </table>
					 
					<table align="left" width="100%" >
						
							<tr>
							<u><h3>About Alibaba.com</h3></u>
							<img src="pictures\aboutus3.png" align="right"  width="25%" height="150" >
							<h4>Launched in 2017, Alibaba.com is the leading platform for global <br>wholesale trade. We serve millions of buyers and suppliers around the world.</h4>
							
							
							</tr>
						
							<br><br>
						
						
							<tr>
							<u><h3 align="right">Our Mission</h3></u>
							<img src="pictures\aboutus1.png" align="left" width="25%" height="150" >
							<h4 align="right">As part of the Alibaba Group, our mission is to make it easy to do <br>business anywhere.<br><br>We do this by giving suppliers the tools necessary to reach a global <br>audience for their products, and by helping buyers find products and<br>suppliers quickly and efficiently </h4>
							</tr>
							
							<br><br>
							
							<tr>
							<img src="pictures\aboutus2.png" align="right" width="25%" height="150" >
							<u><h3>Anytime,Anywhere</h3></u>
							<h4>As a platform, we continue to develop services to help businesses do<br> more and discover new opportunities.<br>Whether it's sourcing from your mobile phone or contacting suppliers in<br> their local language, turn to Alibaba.com for all your global business needs. </h4>
							
							
							</tr>		
						
					
					
			
			
			
	 <tr height="200"></tr>
			
			 <tr align="left" height="100">
        <th colspan="2">
            <a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="learnmore.php">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="license.php">License</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </th>
    </tr>	
		</td>
		
	
	</table>
	
	
	</table>


</html>