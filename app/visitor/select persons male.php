<?php include "../../data/product_access.php"; ?>
<?php
  
        $catgorymen = catgorymen();
    
	
?>
<html>

<head><title>person ditels</title></head>

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
							
							<a href="select persons male.php"><img src="pictures\pros1.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="select persons female.php"><img src="pictures\wprog1.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="select persons kids.php"><img src="pictures\kids1.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="accessories.php"> <img src="pictures\handband.png" align="left" align="top" width="15%" height="100" ></a>
							<a href="electronics.php"> <img src="pictures\mobile.png" align="left" align="top" width="15%" height="100" ></a>					
						</tr>
					 </table>						
					
					<table align="center" width="100%" >
						<tr  >
                            <th  align="center"><label><h3>MEN PRODUCTS</h3></label></th>
			
						</tr>
					 </table>
					 
					<table align="left" width="100%" >
					<?php foreach ($catgorymen as $product) { ?>
					<tr>
						<td>
							<a href="spm products.php?pname=<?=$product['subcatagory'] ?>">
							<img src="<?php if($product['subcatagory'] =="Shirt") :?>pictures\mshirt1.PNG<?php endif; ?><?php if($product['subcatagory'] =="Pant") :?>pictures\pros2.PNG<?php endif; ?><?php if($product['subcatagory'] =="Shoe") :?>pictures\leather.jpg<?php endif; ?><?php if($product['subcatagory'] =="Belt") :?>pictures\belt1.jpg<?php endif; ?>" align="left" align="top" width="20%" height="50%" >
							<br><h4><?=$product['subcatagory'] ;?><br></h4></a>
									
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
					<a href="">Liscence</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
			</tr>	
		
		
	
	
	
	
	</table>


</html>