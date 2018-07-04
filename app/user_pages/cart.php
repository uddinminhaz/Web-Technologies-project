<?php include "../../data/product_access.php"; ?>
<?php
	session();

    
if(isset($_COOKIE['item']))
           {
               foreach($_COOKIE['item'] as $name1 => $value)
               {
                   if(isset($_POST["delete$name1"]))
                   {
                       setcookie("item[$name1]","",time()- 3600);
                       ?>
                       <script>
                           window.location.href = window.location.href;

                        </script>
                        <?php
                   }
               }
              
           }
?>


<html>

<head>
    <title>Cart</title>
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
        <td  valign="top"  width="13%">
        <label><b> Account</b></label><br><hr>
            <ul>
        
            <li><a href="home.php">Home</a>    </li>
            <li><a href="../account/profile.php">View profile</a>  </li>   
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
         
            <tr>
                <th align="center"><label><h3>Cart</h3></label></th>

            </tr>
        </table>

        <table align="left" width="100%">
           <form method="POST">
            
            <?php
            $d=0;
                if(isset($_COOKIE['item']))
                {
                    $d=$d+1;
                }
            if($d==0)
            {
                echo "<h3>You have No Product In the Cart Right Now :(</h3><br><br><br><br><br><br>";
                ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="home.php">Go Shopping</a>     
                <?php
                
                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
            }
            else
            {
                ?>
                <thead>
               <tr>
                <td width="15%">
                    Item Image
                </td>
                 <td width="30%">
                    Product Name
                </td>
                <td width="20%">
                    Price
                </td>
                <td width="20%">
                    Quantity
                </td>
                <td width="20%">
                    Total Price
                </td>
                <td>
                    
                </td>
            </tr>
           </thead>
               <tbody>
               <?php 
                foreach($_COOKIE['item'] as $name1 => $value)
               {
                   $values11=explode("_",$value);
                    
                    ?>
                    <tr>
                <td>
                    <a href=""><img src="../res/products/<?=$values11[0];?>" height="100" width="100"></a>
                </td>
                <td>
                    <h3><?=$values11[1];?></h3>
                </td>
                <td>
                    <h3><?=$values11[2];?></h3>
                </td>
                <td>
<!--                    <input type="text" readonly value="<?=$values11[3];?>"/>-->
                   <h3><?=$values11[3];?></h3>
                </td>
                <td>
                    <h3><?=$values11[4];?></h3>
                </td>
                <td>
                    <input type="submit" name="delete<?=$name1?>" value="X">
                </td>
            </tr>
               
                    <?php
                }
                
                ?>
                
              
                
                <?php
            }
            
            $total =0;
            if(isset($_COOKIE['item']))
           {
            foreach($_COOKIE['item'] as $name1 => $value)
               {
                   $values11=explode("_",$value);
                    $total = $total+$values11[4];
               }
                $_SESSION["pay"]=$total;
            }
            
            ?>
            <?php
            //$d=0;
                if(isset($_COOKIE['item']))
                { ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><h2>Grand Total</h2></td>
                <td><h2><?=$total?></h2></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="delevaryAddress.php"><input type="button" value="Checkout" /></a></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>
            
            
           </tbody>
           </form>
        </table>  

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


</html>