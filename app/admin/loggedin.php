<?php include "../../data/product_access.php"; ?>
<?php
  
        $catgorymen = discount();
        $offer = todaysoffers();
    
	
?>
<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="admin")
		{
				header("location:../account/login.php");
		}
	}
?>
<html>

<head><title>Home</title></head>

	<table align="center" width="1200" >
	
			<tr>
         <th colspan="3" align="center" width="60%">
             <a href="loggedin.php"><img src="pictures\ali.png" align="left" align="top" width="20%"></a>
            <br>
            <br>

           
<!--
                <input type="text" name="search" placeholder="Enter keyword Here....">
                <input type="submit" value="Search Here"/>
-->
                 
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <span>Logged in as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a></span>&nbsp;&nbsp; | &nbsp;&nbsp;
							<a href="logouthandler.php">Logout</a>

    </tr>
		<tr>
		<td  valign="top"  width="15%">
		
		
		
		<label><b>Account</b></label><br><hr>
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
                <label><b>User</b></label><br>
                <hr>
                <ul>
				<li><a href="search.php">Search</a></li>
				<li><a href="create.php">Create New</a></li>
				</ul>
				<label><b>Categories</b></label><br><hr>
				<ul>
				<label><b>Products</b></label><br><hr>
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
                <label><b>Report</b></label><br>
                <hr>
                <ul>
                <label><b>User</b></label><br>
                <hr>
                <li><a href="statistics_report.php">Statistics Report</a></li>
                <li><a href="activity_report.php">Activity Report</a></li>
                </ul>
                
                <label><b>Product</b></label><br><hr>
                <ul>
                <li><a href="mostVisitedProduct.php">Most Visited Product</a></li>
                <li><a href="bestSellingProduct.php">Best Selling Product</a></li>
                <li><a href="leastSellingProduct.php">Least Selling Product</a></li>
                <li><a href="runningoutofstock.php">Running Out of Stock Product</a></li>
                <li><a href="badproducts.php">Bad Rated Product</a></li>
                <li><a href="income.php">Total Income</a></li><br>
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
							<h3>&nbsp;&nbsp;&nbsp;&nbsp; <a href="allProducts.php"> Men's Item </a> </h3>
                            <a href="allProducts.php"><input type="button" value="Edit"/></a>
						</td>
						<td>
							<img src="pictures\female.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="allProducts.php"> Female's Item </a> </h3>
							<a href="allProducts.php"><input type="button" value="Edit"/></a>
						</td>
							<td>
							<img src="pictures\cutmypic.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp; <a href="allProducts.php"> Kids Item </a> </h3>
							<a href="allProducts.php"><input type="button" value="Edit"/></a>
						</td>
							<td>
							<img src="pictures\accessories.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="allProducts.php"> Accessories </a></h3>
							<a href="allProducts.php"><input type="button" value="Edit"/></a>
						</td>
							<td>
							<img src="pictures\electronics.png"  width="150"><br>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;<a href="allProducts.php"> Electromics</a></h3>
							<a href="allProducts.php"><input type="button" value="Edit"/></a>

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
							<a href="allProducts.php"><img src="pictures\<?=$productn['pdpic'] ;?>" align="left" align="top" width="50%" height="100" ><br><h4><?=$productn['name']; ?> <br>Discount : <?=$productn['offer'] ;?></h4></a><a href="allProducts.php"><input type="button" value="Edit"/></a>	<br><br><br><br><br><br>
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
							<a href="todays_offer.php"><img src="pictures\<?=$product['pdpic'] ;?>" align="left" align="top" width="50%" height="100" ><br><h4><?=$product['name']; ?> <br><?=$product['cost'] ;?></h4></a><a href="todays_offer.php"><input type="button" value="Edit"/></a>	<br><br><br><br><br><br>
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
