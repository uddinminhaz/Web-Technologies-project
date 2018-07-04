<?php include "../../data/product_access.php"; ?>

<?php
  
        
        $order= adminnew();
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            if(isset($_POST['confirm']))
            {
               // ConfirmAdmin();
            }
        }
        session();
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Orders</title>
</head>
<body width="1200">
    <table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="2">
                <table border="0">
                    <tr align="center">
                        <td width="230" height="100">
                            <a href="loggedin.php"><img src="../res/common/ali.png" alt="Alibaba" width="200" ></a>
                        </td>
                        <td width="630"></td>
                        <td>
                            <span>Logged in as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a></span> &nbsp;&nbsp; | &nbsp;&nbsp;
                            <a href="logouthandler.php">Logout</a>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="200" valign="top">
                <br>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</span>

                <table >
                    <tr >
                        <td width="200">
                            <hr>
                        </td>
                    </tr>
                </table>
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
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</span><br>
                <hr>
                <ul>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="create.php">Create New</a></li>
                </ul>
                <hr>
                
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categories</span><br>
        <hr>
        <ul>
            Products
            <hr>
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
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report</span><br>
            <hr>
            <ul>
            User
            <hr>
            <li><a href="statistics_report.php">Statistics Report</a></li>
            <li><a href="activity_report.php">Activity Report</a></li>
            </ul>
            <ul>
            Product
            <hr>
            <li><a href="mostVisitedProduct.php">Most Visited Product</a></li>
            <li><a href="bestSellingProduct.php">Best Selling Product</a></li>
            <li><a href="leastSellingProduct.php">Least Selling Product</a></li>
            <li><a href="runningoutofstock.php">Running Out of Stock Product</a></li>
            <li><a href="badproducts.php">Bad Rated Product</a></li>
            <li><a href="income.php">Total Income</a></li><br>
        </ul>
        </td>
            <td valign="top" height="400" align="center">
                 <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <th align="center"><label><h3>New Orders</h3></label></th>
                    </tr>
                </table>

        <table align="center" width="100%">
            <tr align="center"><br>
                <td>
                    <a href="orders.php"><input type="submit" value="All Orders" ></a>
                </td>
                <td>
                    <a href="pending.php"><input type="submit" value="Pending Deleveries" ></a>
                </td>
                <td>
                    <a href="neworders.php"><input type="submit" value="New Orders" ></a>
                </td>
                <td>
                    <a href="cancelorders.php"><input type="submit" value="Cancelled Orders" ></a>
                </td>
            </tr>   
        </table>
               
                <table align="center" width="100%">
                <form method="post">
            <tr ><br><br>
               <td width="17" align="center">
                   <label><h3>Order Image</h3></label>
               </td>
                <td width="17" align="center">
                    <label><h3>Order Info</h3></label>
                    
                </td>
                 <td width="16" align="center">
                    <label><h3>Customer</h3></label>
                    
                </td>
                 <td width="17" align="center">
                    <label><h3>Shipping Company</h3></label>
                </td>
                 <td width="17" align="center">
                    <label><h3>Track Id</h3></label>
                </td>
                 <td width="16" align="center">
                    <label><h3>Customer Confirmation</h3></label>
                </td>
            </tr>

                    <?php foreach ($order as $productn) { ?>
                    <tr>
                        <td align="center">
                            <img src="pictures\<?=$productn['ppic'] ;?>" align="center" align="top" width="100" height="100" >
                        </td>
                        <td align="center">
                            Name :<?=$productn['pname']; ?><br>
                            Quantity :<?=$productn['quantity']; ?><br>
                            Cost :<?=$productn['cost']; ?><br>
                            Code :<?=$productn['code']; ?><br>
                            Size :<?=$productn['size']; ?><br>
                            Color :<?=$productn['colour']; ?><br><br>
                        </td>
                        <td align="center">
                            <?=$productn['username']; ?>
                        </td> 
                        <td align="center">
                            <?=$productn['shippingsts'] ;?>
                        </td>
                        <td align="center">
                            <?=$productn['tracknumber'] ;?>
                        </td>
                        <td align="center">
                            <?=$productn['customersts'] ;?>
                        </td>    
                    </tr>
                    <tr>
                         <td></td>
                          <td colspan="">
                                <a href="orderhandler.php?tr=<?=$productn['tracknumber'] ;?>&st=confirm"><input type="button" value="Confirm" name="confirm"></a>
                            </td>

                            <td colspan="2">
                                <a href="orderhandler.php?tr=<?=$productn['tracknumber'] ;?>&st=cancel"><input type="button" value="Cancel" name="cancel"></a>
                            </td>

                            <td colspan="2">
                                <a href="orderhandler.php?tr=<?=$productn['tracknumber'] ;?>&st=shipping"><input type="button" value="Sent to Shipping Comany" name="shipping"></a>
                            </td>  
                    </tr>
                    <?php } ?>  
                    </form>
                </table>
           
            </td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <h3>Copyright © 2017</h3>
            </td>
        </tr>
    </table>
</body>

<script>
    function function1()
{

window.alert ("Confirmed");
}
    
    </script>

    <script>
    function function2()
{

window.alert ("Cancelled");
}
    
    </script>

    <script>
    function function3()
{

window.alert ("Sent To Shipping Company");
}
    
    </script>

</html>