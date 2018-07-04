<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>

<?php 
                if(isset($_COOKIE['item1']))
                {
                unset($_COOKIE['item1']);
                 setcookie('item1', '', time() - 3600);
                   
                }
                
                if($_SERVER["REQUEST_METHOD"]=='POST'){
                    
                
                    
                  if(isset($_COOKIE['item']))
                { 
                
                foreach($_COOKIE['item'] as $name1 => $value)
                    {
                       $values11=explode("_",$value);

                        $img1=$values11[0];
                        $nm=$values11[1];
                        $price=$values11[2];
                        $qty=$values11[3];
                         $total=$values11[4];
                        $cd=$values11[5];
                        setcookie("item1[$name1]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+ (86400 * 1800));
                        
                        $productcode = getProductById($cd);
                       // $trackid=getTrackid("tracknumber");
                      //  $trackid += 1;
                      //  $_SESSION['tracknumber']=$trackid;
                    
                        $customersts="Not Received";
                        $adminsts="Not Seen";
                        $sendshipping="Not Sent";
                        $shippingsts="Not Received";
                        $productcode['code']=$cd;
                        $productcode['pname']=$nm;
                        $productcode['cost']=$price;
                        $productcode['size']=$productcode['size'];
                        $productcode['colour']=$productcode['color'];
                        $productcode['quantity']=$qty;
                        $productcode['customersts']=$customersts;
                        $productcode['adminsts']=$adminsts;
                        $productcode['sendshipping']=$sendshipping;
                        $productcode['shippingsts']=$shippingsts;
                        $productcode['ppic']=$img1;
                        $productcode['username']=$_SESSION['user']['username'];
                       // $productcode['tracknumber']=$_SESSION['tracknumber'];
                        
                        
                        if(insertToOrders($productcode)==true)
                        {
                           ?>
                       <script>
                           
                            window.alert("Successfully Payment Done");
                        </script>
                        <?php  
                        }
                    else
                    {
                        
                    }
                        
                    
                    }
                    if(isset($_COOKIE['item']))
                {
                unset($_COOKIE['item']);
                 setcookie('item', '', time() - 3600);
                    
                }
                }
                    
                    
                }
?>
<html>

<head>
    <title>Payment</title>
</head>

<table  align="center" width="1200">

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


    <td valign="top" width="40%">

        <table  align="center" width="100%">
            <tr height="100">
                <th><img src="pictures/ali.PNG" width="100%" height="100%"></th>

            </tr>
            <tr>
                <th align="center"><label><h3>Payment</h3></label></th>

            </tr>
        </table>
			<fieldset>
		<legend><h3>PAYMENT</h3></legend>

        <table align="left" width="100%">
           <form method="POST">
            
            <tr height="30" width="350">
                <td>Choose Your Payment Method :</td>
                <td>Enter Information According to Your Payment Method Selection :</td>
            </tr>
            <tr>
				<td width="350">
				<input type="radio" name="pay" value="Paypal"/>Paypal Account
				</td>
           <td>
               Account No : <input type="text"/>
           </td>
            </tr>
          <tr>
				<td width="350">
				<input type="radio" name="pay" value="dbbl"/>Dutch Bangla Bank(DBBL) Account
				</td>
               <td>
                   Pin No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <input type="text"/>
               </td>
            </tr>
            <tr>
                <td width="350">
                <input type="radio" name="pay" value="bkash"/>Bkash Account
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td width="350">
                <input type="radio" name="pay" value="MCash"/>MCash Account
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="Pay" name="submit" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="location.href='delevaryAddress.php';" >GO Back</button>
                </td>
            </tr>
            <tr height="30"></tr>
            </form>
        </table>
		</fieldset>

    </td>



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

    
window.alert ("product purchesed Grand Total= <?=$_SESSION["pay"]?> <br> This List is added as My last Purchases");
}
	
	</script>

</html>