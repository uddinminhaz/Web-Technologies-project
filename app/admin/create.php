<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create New</title>
</head>
<body width="1200">
	<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/ali.png" alt="Ali" width="200"></a>
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
    <legend><b>USER | CREATE</b></legend>
    <br/>
    <form method="post">   
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input name="uname" type="text" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
             <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="pass" type="password" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
             <tr>
                <td>Confirm Password</td>
                <td>:</td>
                <td><input name="cpass" type="password" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><input name="address" type="text" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <input name="gender" type="radio" value="male">Male
                    <input name="gender" type="radio" value="female">Female
                    <input name="gender" type="radio" value="other">Other
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text" value="">
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
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
                        <option value="admin">Admin</option>
                        <option value="executive">Executive</option>
                        <option value="user">User</option>
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
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>
                        <option value="blocked">Blocked</option>
                    </select>
                </td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Create"/>
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
</html>
<?php



	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../../Data/user_access.php");
		
		$flag=0;

		if($flag!=1){
			$username=$_REQUEST['uname'];
			$name=$_REQUEST['name'];
			$password=$_REQUEST['pass'];
			$email=$_REQUEST['email'];
			$gender=$_REQUEST['gender'];
			$address=$_REQUEST['address'];
			$dob=$_REQUEST['dob'];
			
			$usertype=$_REQUEST['usertype'];
			$status=$_REQUEST['status'];
			
			
			
			if(adduseradmin($username,$name,$password,$email,$gender,$address,$dob,$usertype,$status)==true){
            echo "<script>
                    alert('Registration Completed , Please wait for admin confirmation for login. Thank you ');
                   
                 </script>";
				 die();
					
					
			}else{
				echo "Server issue's try again later";
			}
		}else{
			  echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  "; 
		}	 
	}
 
?>
