<?php include "../../data/product_access.php"; ?>
<?php include "../../data/admin_user_service.php"; ?>
<?php
  
        $catgorymen = discount();
        $offer = todaysoffers();
        $counter = dailyvisitor();
	
?>


<html>

<head><title>Home</title></head>

	<table align="center" width="1200" >
	
			<tr>
         <th colspan="3" align="center" width="60%">
             <a href="home.php"><img src="pictures\ali.png" align="left" align="top" width="20%"></a>
            <br>
            <br>

           
                <input type="text" name="search" placeholder="Enter keyword Here....">
                <input type="submit" value="Search Here"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../account/login.php">Login</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
                <a href="../account/login.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>

    </tr>
		<tr>
		<td  valign="top"  width="10%">
		
		
		
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
		<td></td>
			
			<td valign="top" width="40%" >
					<img src="pictures\home.jpg" align="left" align="top" width="100%" >
					
					<table align="left" width="100%" >
					<tr>
					<tr><td><br></td></tr>
						<tr>

						<td>
							<img src="pictures\images.jpg"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp; <a href="select persons male.php"> Men's Item </a> </h3>
						</td>
						<td>
							<img src="pictures\female.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="select persons female.php"> Female's Item </a> </h3>
						</td>
							<td>
							<img src="pictures\cutmypic.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="select persons kids.php"> kids's Item </a></h3>
						</td>
							<td>
							<img src="pictures\accessories.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="accessories.php"> Accessories </a></h3>
						</td>
							<td>
							<img src="pictures\electronics.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="electronics.php"> Electromics</a></h3>

						</td>
						
						</tr>

						<tr>
						<td>

							<br><br>
							
							</td>
						</tr>


						<tr>

						<br>
						<br>
							<td><h2><font color="red" >Sales Upto 80%</font></h2></td>
						</tr>
						<tr>
						<td>

							<br>
							
							</td>
							</tr>

						<table align="left" width="100%" >
					<?php foreach ($catgorymen as $productn) { ?>
					
						<td>
							<a href="man product.php?id=<?=$productn['code']?>"><img src="pictures\<?=$productn['pdpic'] ;?>" align="left" align="top" width="50%" height="100" ><br><h4><?=$productn['name']; ?> <br>Discount : <?=$productn['offer'] ;?></h4></a>	<br><br><br><br><br><br>
							</td>
							
						
					<?php } ?>	
					</table>


					<tr>
						<td>
							
							</td>
						</tr>


						<tr>
						<td></td>
						<td></td>
						<br>
						<br>
							<td><h2><font color="red" >Flash Deals</font></h2></td>
							<tr>
							<td><br></td>
							</tr>
						</tr>

						<tr>
						<td></td>
						<td></td>
                        <td>

						<table align="left" width="100%" >
					<?php foreach ($offer as $product) { ?>
					
						<td></td>
						<td>
							<a href="flat.php?id=<?=$product['code']?>"><img src="pictures\<?=$product['pdpic'] ;?>" align="left" align="top" width="50%" height="100" ><br><h4><?=$product['name']; ?> <br><?=$product['cost'] ;?></h4></a>	<br><br><br><br><br><br>
							</td>
							
						
					<?php } ?>	
					</table>

					</td>

					</tr>






						</tr>


					
			</td>
			
	</tr>
			
			<tr height="100">
				<th colspan="4">
					<a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="learnmore.php">Learn more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="">Liscence</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
			</tr>	
		
		
	
	
	
	
	</table>


</html>