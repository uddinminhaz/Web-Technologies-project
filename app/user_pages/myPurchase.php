<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>


<html>

<head><title>My Purchase</title></head>

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
		<td  valign="top"  width="10%">
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
			
			<td valign="top">
                <fieldset>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <b>MY Purchase Statistics (Last Three Month)</b>
            </td>
            <td align="right">
                <input type="submit" value="Print" onclick="function1()"/>
            </td>
        </tr>
    </table>
</fieldset>
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="center">Month</th>
        <th align="center">My Product Purchasing Price(Total)</th>
        <th align="center">Discount Price(Total)</th>
        <th align="center">No. of Purchase of Product(Total)</th>
        <th align="center" >Total Purchased Amount(By Month)</th>
    </tr>
    <tr>
        <td align="center">January</td>
        <td align="center">10000</td> 
        <td align="center">1500</td>
        <td align="center">5</td>        
        <td align="center">8500</td>               
    </tr>
    <tr>
        <td align="center">February</td>
        <td align="center">15000</td>
        <td align="center">2000</td>
        <td align="center">7</td>        
        <td align="center">13000</td>       
    </tr>
    <tr>
        <td align="center">March</td>
        <td align="center">50000</td>
        <td align="center">5000</td>
        <td align="center">3</td>        
        <td align="center">45000</td>        
    </tr>
    <tr>
        <td align="center"><b>Total</b></td>
        <td align="center"><b>75000</b></td>
        <td align="center"><b>8500</b></td>
        <td align="center"><b>15</b></td>
        <td align="center"><b>66500</b></td>       
    </tr>
</table>
					
			</td>
			
	</tr>
			
			<tr height="100">
				<th colspan="4">
					<a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="learnmore.php">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="license.php">License</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
			</tr>	
	
	</table>
<script>
	function function1()
{

window.alert ("Purchase statstics printed");
}
	
	</script>

</html>