<?php include "../../data/product_access_admin.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        $productid = $_GET['cd'];

        if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['add']))
        {
            echo"wen";
        $product1['code']=$productid;
        $product1['name']=$_POST['name'];
        $product1['color']=$_POST['color'];
        $product1['material']=$_POST['material'];
        $product1['size']=$_POST['size'];
        $product1['description']=$_POST['description'];
        $product1['bprice']=$_POST['bprice'];
        $product1['cost']=$_POST['cost'];
        $product1['offer']=$_POST['offer'];
        $product1['quantity']=$_POST['quantity'];
        $product1['catagory']=$_POST['catagory'];
        $product1['subcatagory']=$_POST['subcatagory'];
        $product1['pdpic']=$_POST['pdpic'];
        
        
       if(AddProductToday($product1)==true)
       {
                echo "<script>
                    alert('Product Added To Todays Offer');
                    document.location='todays_offer.php';
                 </script>";
                die();
        }
        }
        
       
    }
        $allproduct = getAllProductByCode($productid);
        

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Add Todays Offer</title>
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
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Add Todays Offer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </h3>
                            </label>
                        </th>

                    </tr>
                    </form>
                </table>
                 <br>
                  <fieldset align="left">Message box</fieldset><br>
                 <fieldset>
                    <legend><b>Product Todays Offer| ADD</b></legend>
         <table cellpadding="0" cellspacing="0" width="100%">
         <form method="POST">
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
            <td><input type="text" name="catagory" value="<?=$product['catagory'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Sub-Category</td>
            <td>:</td>
            <td><input type="text" name="subcatagory" value="<?=$product['subcatagory'];?>" readonly/></td>
        </tr>	            
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Code</td>
            <td>:</td>
            <td><input type="text" name="code" value="<?=$product['code'];?>" readonly/></td>
        </tr>		
        <tr><td colspan="3"><hr/></td></tr>			
         <tr>
            <td>Product Name</td>
            <td>:</td>
            <td><input type="text" name="name" value="<?=$product['name'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr/></td></tr>
        <tr>
            <td>Quantity</td>
            <td>:</td>
            <td><input type="text" name="quantity" value="<?=$product['quantity'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Color</td>
            <td>:</td>
            <td><input type="text" name="color" value="<?=$product['color'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Buying Price</td>
            <td>:</td>
            <td><input type="text" name="bprice" value="<?=$product['bprice'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Selling Price</td>
            <td>:</td>
            <td><input type="text" name="cost" value="<?=$product['sprice'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Offer Price(*)</td>
            <td>:</td>
            <td><input type="text" name="offer" value="<?=$product['offer'];?>"/></td>
        </tr>
         <tr><td colspan="3"><hr /></td></tr>
         <tr>
            <td>Product Material</td>
            <td>:</td>
            <td><input type="text" name="material" value="<?=$product['material'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Size</td>
            <td>:</td>
            <td><input type="text" name="size" value="<?=$product['size'];?>" readonly/></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Description</td>
            <td>:</td>
            <td><textarea name="description" readonly><?=$product['description'];?></textarea></td>
            <td><img src="../res/products/<?=$product['pdpic'];?>" /><br>
            <input type="text" name="pdpic" value="<?=$product['pdpic']?>" readonly/>
<!--            <input type="file" name="pdpic" value="../res/products/<?=$product['pdpic'];?>"><br><br><input type="submit" value="Save" name="pdpicchange" />-->
            </td>
        </tr>
         <tr><td colspan="5"><hr /></td></tr>
         <tr>
            <td colspan="2"><a href="loggedin.php">Home</a></td>
             <td></td>
            <td><input type="submit" value="Update" name="add"/></td>
            <td><a href="Dashboard.php">Dashboard</a></td>
            <td></td>
            
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