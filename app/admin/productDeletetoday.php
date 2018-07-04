<?php include "../../data/product_access_admin.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        $productid = $_GET['cd'];
        if($_SERVER['REQUEST_METHOD']=="POST"){
        if(deleteProductByCodeToday($productid)==true){
            echo "<script>
                    alert('Record Deleted');
                    document.location='todays_offer.php';
                 </script>";
            die();
        }
    }
        $allproduct = getAllProductByCodeToday($productid);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Today Product Settings</title>
</head>

<body width="1200">
    <table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="2">
                <table border="0">
                    <tr align="center">
                        <td width="230" height="100">
                            <a href="loggedin.php"><img src="../res/common/ali.PNG" alt="Alibaba" width="200"></a>
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

                <table>
                    <tr>
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
                   <form method="POST">
                    <tr>
                        <th align="center"><label>
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </h3>
                            </label>
                        </th>

                    </tr>
                    </form>
                </table>
                <br>
                 <fieldset  align="left">
                    <legend><b>Product Today| DELETE | Are Sure ?</b></legend>
         <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td width="100"></td>
            <td width="10"></td>
            <td width="230"></td>
            <td></td>
        </tr>
         <?php foreach ($allproduct as $product) { ?>
        <tr>
            <td>Category</td>
            <td>:</td>
            <td><?=$product['catagory'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Sub-Category</td>
            <td>:</td>
            <td><?=$product['subcatagory']?></td>
        </tr>	            
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Name</td>
            <td>:</td>
            <td><?=$product['name'];?></td>
        </tr>		
        <tr><td colspan="3"><hr/></td></tr>			
        <tr>
            <td>Product Code</td>
            <td>:</td>
            <td><?=$product['code'];?></td>
        </tr>
        <tr><td colspan="3"><hr/></td></tr>
        <tr>
            <td>Quantity</td>
            <td>:</td>
            <td><?=$product['quantity'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Color</td>
            <td>:</td>
            <td><?=$product['color'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Buying Price</td>
            <td>:</td>
            <td><?=$product['bprice'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Selling Price</td>
            <td>:</td>
            <td><?=$product['cost'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Offer Today</td>
            <td>:</td>
            <td><?=$product['offer'];?></td>
        </tr>
         <tr><td colspan="3"><hr /></td></tr>
         <tr>
            <td>Product Material</td>
            <td>:</td>
            <td><?=$product['material'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Size</td>
            <td>:</td>
            <td><?=$product['size'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Description</td>
            <td>:</td>
            <td><?=$product['description'];?></td>
            <td><img src="../res/products/<?=$product['pdpic'];?>" />"</td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <form method="POST">
        <tr>
            <td colspan="2"><a href="loggedin.php">Home</a></td> 
            <td><input type="submit" value="Delete" /></td>
            <td><a href="Dashboard.php">Dashboard</a></td>
        </tr>
        </form>
    </table>
                </fieldset>
            </td>
        </tr>
        <tr align="center">
            <td colspan="3">
                <h3>Copyright © 2017</h3>
            </td>
        </tr>
         <?php } ?>
    </table>
</body>
</html>