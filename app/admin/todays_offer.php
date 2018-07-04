<?php include "../../data/session_service.php"; ?>
<?php include "../../data/product_access_admin.php"; ?>
<?php
	session();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
           
        $searchKey = $_POST['search']; 
        $searchfilter = $_REQUEST['filter'];
        if($searchfilter == "any")
        {
            $allproduct = getAllProductToday();
        }
        else if($searchfilter == "catagory")
        {
            $allproduct = getAllProductByCatagoryToday($searchKey);
        }
         else if($searchfilter == "subcatagory")
        {
            $allproduct = getAllProductBySubCatagoryToday($searchKey);
        }
         else if($searchfilter == "name")
        {
            $allproduct = getAllProductByNameToday($searchKey);
        }
        else if($searchfilter == "offer")
        {
            $allproduct = getAllProductByOfferWithParameterToday($searchKey);
                
        }
        else if($searchfilter == "code")
         {
             $allproduct = getAllProductByCodeToday($searchKey);
            if (count($allproduct) == 0)
            {
                 echo "<script>
                    alert('No Product Found');
                     document.location='allProducts.php';
                 </script>";
            die();
            } 
                
            
         }
    } 
    else 
    {
         $allproduct = getAllProductToday();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todays Offer Products</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.PNG" alt="Alibaba" width="200" ></a>
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
                <th align="center"><label><h3>Today's Offer Products</h3></label></th>
            </tr>
        </table>

        <table align="left" width="100%">
        <form method="POST">
				<br/>
				<tr><h3>Filter By : <select name="filter">
                            <option value="any">Any</option>
                            <option value="catagory">Category</option>
                            <option value="subcatagory">Sub-Category</option>
                            <option value="name">Name</option>
                            <option value="code">Code</option>
                             <option value="offer">Offer</option>
                            </select>
                            <input type="text" name="search" placeholder="Enter keyword Here....">
                            <input type="submit" value="Search"></h3></tr><br/>
                            </form>
               <tr>
                <td width="12" align="center">
                    <h3>Image</h3>
                </td>
                <td width="10%" align="center">
                   <h3>Category</h3>
                </td>
                <td width="12%" align="center">
                   <h3>Sub-Category</h3>
                </td>
                 <td width="10" align="center">
                    <h3>Name</h3>
                </td>
                <td width="10%" align="center">
                    <h3>Code</h3>
                </td>
                <td width="11%" align="center">
                    <h3>Buying Price</h3>
                </td>
                 <td width="11%" align="center">
                    <h3>Selling Price</h3>
                </td>
                <td width="11%" align="center">
                    <h3>Today Offer</h3>
                </td>
                 <td width="12%" align="center">
                   
                </td>
            </tr>
            <?php foreach ($allproduct as $product) { ?>
            <tr>
                <td align="center">
                    <img src="../res/products/<?=$product['pdpic']?>" align="center" width="45%" height="25%">
                </td>			
			
			    <td align="center">
                    <h3><?=$product['catagory']?></h3>
                </td>
			    <td align="center">
                    <h3><?=$product['subcatagory']?></h3>
                </td>
                <td align="center">
                    <h3><?=$product['name']?></h3>
                </td>
				
				<td align="center">
                    <h3><?=$product['code']?></h3>
                </td>
                <td align="center">
                    <h3><?=$product['bprice']?></h3>
                </td>
                <td align="center">
                    <h3><?=$product['cost']?></h3>
                </td>
                <td align="center">
                    <h3><?=$product['offer']?></h3>
                </td>
                <td align="center">
                    <a href="productDetailstoday.php?cd=<?=$product['code']?>"><button>Detail</button></a>
                    <a href="productEdittoday.php?cd=<?=$product['code']?>"><button>Edit</button></a>
                    <a href="productDeletetoday.php?cd=<?=$product['code']?>"><button>Delete</button></a>
                </td>		
            </tr>
            <?php } ?>

			
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
</html>