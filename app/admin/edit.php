<?php include "../../data/admin_user_service.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        $uname = $_GET['un'];
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $username['username']=$uname;
        $username['email']=$_POST['email'];
        $username['name']=$_POST['name'];
        $username['gender']=$_POST['gender'];
        $username['dob']=$_POST['dob'];
        $username['address']=$_POST['address'];
        $username['pp']=$_POST['pp'];
        $username['usertype']=$_POST['usertype'];
        $username['status']=$_POST['status'];
        
        if(UpdateUserByUserName($username)==true){
            echo "<script>
                    alert('Record Updated');
                    document.location='search.php';
                 </script>";
            die();
        }
    }
        $User = getUsersByUserName($uname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.PNG" alt="Ali" width="200"></a>
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
			<td valign="top" height="400" >
			<br/>
			<fieldset>This is message box</fieldset>
<br />
<fieldset>
    <legend><b>USER | EDIT</b></legend>
    <br/>
    <form method="POST">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><?=$User['username'];?></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value="<?=$User['name'];?>"></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="<?=$User['email'];?>">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                  <input type="radio" name="gender" value="male" <?php if($User['gender'] =="male") :?> checked<?php endif; ?> >Male
				  <input type="radio" name="gender" value="female" <?php if($User['gender'] =="female") :?> checked<?php endif; ?>>Female
				  <input type="radio" name="gender" value="other"<?php if($User['gender'] =="other") :?> checked<?php endif; ?>  >Other
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text" value="<?=$User['dob'];?>">
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><input name="address" type="text" value="<?=$User['address'];?>"></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Picture</td>
                <td>:</td>
                <td>
                    <table>
                        <tr>
                            <td><img width="48" src="../res/user/<?=$User['pp'];?>" /></td>
                            <td><input type="file" name="pp"></td>
                        </tr>
                    </table>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>
                    <select name="usertype">
                        <option></option>
                        <option value="admin"<?php if($User['usertype'] =="admin") :?> selected <?php endif; ?> >Admin</option>
                        <option value="executive"<?php if($User['usertype'] =="executiive") :?> selected <?php endif; ?> >Executive</option>
                        <option value="user"<?php if($User['usertype'] =="user") :?> selected <?php endif; ?> >User</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option></option>
                        <option value="active"<?php if($User['status'] =="active") :?> selected <?php endif; ?> >Active</option>
                        <option value="pending"<?php if($User['status'] =="pending") :?> selected <?php endif; ?> >Pending</option>
                        <option value="blocked"<?php if($User['status'] =="blocked") :?> selected <?php endif; ?> >Blocked</option>
                    </select>
                </td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Update" />
        <a href="search.php">Back to Search</a>
    </form>
</fieldset>
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
function myEditFunction1() {
    var a = document.getElementsByTagName("fieldset")[0];
    a.innerHTML = "Profile Edited Successfully";
    window.alert ("Profile Edited Successfully");
    
}
</script>
</html>
