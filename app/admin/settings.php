<?php include "../../data/product_access_admin.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $product['catagory']=$_POST['catagory'];
        $product['subcatagory']=$_POST['subcatagory'];
        $product['code']=$_POST['code'];
        $product['name']=$_POST['name'];
        $product['color']=$_POST['color'];
        $product['material']=$_POST['material'];
        $product['size']=$_POST['size'];
        $product['description']=$_POST['description'];
        $product['bprice']=$_POST['bprice'];
        $product['sprice']=$_POST['sprice'];
        $product['quantity']=$_POST['quantity'];
        $product['pdpic']=$_POST['pdpic'];
        
        if(AddProduct($product)==true){
            echo "<script>
                    alert('Record Added');
                    document.location='allProducts.php';
                 </script>";
            die();
        }
    }
        

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Settings</title>
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
                    <tr>
                        <th align="center"><label>
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Settings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </h3>
                            </label>
                        </th>

                    </tr>
                </table>
                <br>
                <fieldset align="left">Message box</fieldset>
                <br>
                <form method="POST">
                 <fieldset  align="left">
                 <legend ><b>Product | ADD</b></legend>
                <table align="left" width="100%">
                   <br/>
                    <tr height="30">
                        <td>
                            Date : <input type="text" id="date"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                Category :
                                <select name="catagory">
					    <option></option>
						<option value="men">Men</option>
						<option value="women">Women</option>
						<option value="kids">Kids</option>
						<option value="electronic">Electronic</option>
					</select>
                            </h3>
                        </td>
                        <td>
                            <h3>
                                Sub-Category :
                                <select name="subcatagory">
					    <option></option>
						<option value="shirt">Shirt</option>
						<option value="pant">Pant</option>
						<option value="Shoes">Shoe</option>
						<option value="tshirt">T-shirt</option>
					</select>
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <h3>
                                Product Name :
                                <input type="text" name="name" placeholder="Enter Name Here....">
                            </h3>
                        </td>
                        <td width="50%">
                            <h3>
                                Buying Price :
                                <input type="text" name="bprice" placeholder="Enter Buying Price Here....">
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                Code :
                                <input type="text" name="code" placeholder="Enter Code No. of the Product Here....">
                            </h3>
                        </td>
                        <td>
                            <h3>
                                Selling Price :
                                <input type="text" name="sprice" placeholder="Enter Seliing Price Here....">
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>
                                Color :
                                <select name="color">
					    <option></option>
						<option value="red">Red</option>
						<option value="green">Green</option>
						<option value="blue">Blue</option>
						<option value="yellow">Yellow</option>
						<option value="pink">Pink</option>
						<option value="black">Black</option>
						<option value="white">White</option>
						<option value="magenta">Magenta</option>
						<option value="Grey">Grey</option>
					</select>
                            </h3>
                        </td>
                        <td>
                            <h3>
                                Product Quntity :
                                <input type="text" name="quantity" placeholder="Enter Product Quantity Here....">
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../res/products/picemp.jpg" height="100%" width="80%"><br>
                            <input type="file" name="pdpic"><br><br>
                        </td>
                        <td>
                            <textarea name="description" rows="19" cols="60" placeholder="Details About The Product"></textarea>
                        </td>
                    </tr>
                    <tr height="20">

                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                       <td>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                       <input type="submit" value="Add Product"/>
                       </td>
                       <td>
                           <input type="reset" value="Clear Fields"/>
                       </td>
                    </tr>
                     <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            <a href="allProducts.php">All Products</a>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="loggedin.php">Home</a>  
                        </td>
                        <td>
                            <a href="Dashboard.php">Dashboard</a>
                        </td>
                    </tr>
                </table>
                </fieldset>
                </form>
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
function add() {
    window.alert ("Product Added Successfully");
    var a = document.getElementsByTagName("fieldset")[0];
    a.innerHTML = "Product Added Successfully";
    dateToday();
    
}
    
    
}
    function clear() {
    window.alert ("All Field Clear");
    var a = document.getElementsByTagName("fieldset")[0];
    a.innerHTML = "All Field Clear";
    
    
}
    function dateToday()
    {
        var a = document.getElementsById("date");
        var d = new Date();
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getYear();
        a.innerHTML = day+"-"+month+"-"+year;
        
    }
</script>

</html>