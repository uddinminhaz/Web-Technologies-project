<?php include "../../data/product_access.php"; ?>
<?php

    $pnamee =$_GET['pname'];
    $productnames = getProductByNameElectronics($pnamee);
	
?>

<html>

<head><title>male person ditels</title></head>

	<table align="center" width="1200" >
	<tr><th colspan="3" align="right" width="60%">
        <a href="home.php"><img src="pictures\ali.png" align="left" align="top" width="20%" ></a>
				<br>
				<br>
		
				<input type="text" name="search" placeholder="Enter keyword Here....">
				<input type="submit" value="Search Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="../account/login.php">Login</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="../account/login.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		
		<td  valign="top"  width="10%">
		<label><b><a href="home.php">Home</a></b></label><br><hr>
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
		</td>
			
			<td valign="top" width="40%" >
			
					<table align="center" width="100%" >
						<tr>
							
							<a href="select persons male.php"><img src="pictures\pros1.png" align="left" align="top" width="20%" height="100" ></a>
							<a href="select persons male.php"><img src="pictures\pros2.png" align="left" align="top" width="20%" height="100" ></a>
							<a href="select persons male.php"><img src="pictures\pros3.png" align="left" align="top" width="20%" height="100" ></a>
							<a href="select persons male.php"> <img src="pictures\pros4.png" align="left" align="top" width="20%" height="100" ></a>
						</tr>
					 </table>			
			
					
					
					<table align="left" width="100%" >
					  <?php foreach ($productnames as $productn) { ?>
						<tr>
							<td>
							<a href="showdetail.php?id=<?=$productn['code']?>"><img src="pictures\<?=$productn['pdpic'] ;?>" align="left" align="top" width="20%" height="100" ><br><h4><?=$productn['name']; ?> <br><?=$productn['sprice'] ;?></h4></a>	<br><br><br><br><br><br>
							</td>
						</tr>

						 <?php } ?>																												
						
				
					</table>
			
			</td>
			
	
			
			<tr height="100">
				<th colspan="2">
					<a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="learnmore.php">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="license.php">Liscence</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
			</tr>	
		
		
	
	
	
	
	</table>


</html>