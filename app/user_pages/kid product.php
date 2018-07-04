<?php include "../../data/product_access.php"; ?>
<?php
    $productId =$_GET['id'];
	
    $productcode = getProductById($productId);
	session();
?>
<html>
<form>
<head><title>Kid's Product Details</title></head>

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
			
			<td valign="top" width="40%" >
					<img src="pictures\header.png" align="left" align="top" width="100%" >
					
					<table align="left" width="100%" >
						<tr>
							
							<td valign="top" width="30%"  >
								<img src="pictures\<?= $productcode['pdpic'] ?>" align="left" align="top" height="100%" >
							
								<br><br><br><br><br><br><br>
								<h4>Type:<?= $productcode['name'] ?></h4>
								<h4> Cost :<?= $productcode['sprice'] ?> </h4>
							</td>
							
							<td valign="top" width="60%">
							
								<h3>Product Details </h3>
							
								<h5>Available Quantity: <?= $productcode['quantity'] ?>  </h5>
								<h5> Cost :<?= $productcode['sprice'] ?>  </h5>
								<h5>Material: <?= $productcode['material'] ?>  </h5>
								<h5>Model Number:<?= $productcode['code'] ?></h5>
								<h5>Color:<?= $productcode['color'] ?> </h5>
							
								<fieldset>
									<legend>Select color</legend>
									<input type="radio" name="color"value="Red"/>Red
									<input type="radio" name="color"value="Green"/>Green
									<input type="radio" name="color"value="Blue"/>Blue
									<input type="radio" name="color"value="White"/>White
									<input type="radio" name="color"value="Black"/>Black
									<input type="radio" name="color"value="Pink"/>Pink
								</fieldset>
							
								<fieldset>
									<legend>Select Size</legend>
									<input type="radio" name="Size"value="42"/>S
									<input type="radio" name="Size"value="36"/>M
									<input type="radio" name="Size"value="24"/>L
									<input type="radio" name="Size"value="24"/>XL
									<input type="radio" name="Size"value="24"/>XXL
									
								</fieldset>
								<fieldset>
                                <legend>Select Quantity</legend>
                                Available Quantity : 20 
								    <select name="quantity" id="quantityid">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
					                </select> <button onclick="addc();">+</button>
								</fieldset>
								<br>
								<br>
							
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="purches.php"><input type="submit" value="Purches Now" ><a/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="Add to Cart" onclick="function1()" />
								<button onclick="wish();">+</button>
						
							
							</td>
							
						</tr>
						<tr>
						    <td>
						        
						    </td>
						    <td>
				<table>
                      <tr height="10">
                      </tr>
                       <tr>
                          <td>
                              Rate The Product
                          </td>
                           
                       </tr>
                        <tr>
                            <td>
                                <input type="radio"/>Very Good
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio"/>Good
                            </td>
                            <td>
                                <input type="radio"/>Bad
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio"/>Worse
                            </td>
                        </tr>
                        <tr height="5">
                            
                        </tr>
			            <tr>
			                <td>
			                    (0) Comments
			                </td>
			                <td>
			                    Leave A comment Here
			                </td>
			            </tr>
			            <tr>
			                <td colspan="2">
			                    <textarea  name="textarea1" rows="10" cols="80"></textarea>
			                </td>
			            </tr>
			            <tr>
			                <td>
			                    Enter Your Name  :
			                </td>
			                <td>
			                    <input type="text"/>
			                    <abbr title="Must required field"><b>i</b></abbr>
			                </td>
			            </tr>
			             <tr>
			                <td>
			                    Enter Your Email  :
			                </td>
			                <td>
			                    <input type="text"/>
			                    <abbr title="Must required field hint: sample@example.com"><b>i</b></abbr>
			                </td>
			            </tr>
			             <tr>
			                <td>
			                    <button onclick="addpost();">Post Comment</button>
			                </td>
			            </tr>
			            <tr>
			                <td>
			                    <div id="postcomment"></div>
			                </td>
			            </tr>
			            
			        </table>
						    </td>
						</tr>
					</table>
			</td>
			
	<form>
			
			<tr height="100">
				<th colspan="2">
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
    window.alert ("Added to cart");
}
    function wish()
{
    window.alert ("Added to Wish List");
}
    function addpost()
    {
        window.alert ("Posting A Comment");
        var post = document.getElementById("textarea1").text;
        var d = document.getElementById("postcomment");
        d.innerHTML += post;     
    }
    function addc()
    {
        window.alert ("Incresing Quantity");
        var m = document.getElementById("quantityid");
        var n = m.options[m.selectedIndex].text;
        n = n+1;
        m.options[n.selected];
        
    }

	
	</script>


</html>