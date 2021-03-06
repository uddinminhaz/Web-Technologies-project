<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="admin")
		{
				header("location:../account/login.php");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Profile</title>
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
			<form method="post">
			<td valign="top" height="400" >
			
			<br/>
			<fieldset>Message box</fieldset>
<br/>
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value="<?= $_SESSION['user']['name']; ?>"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="<?= $_SESSION['user']['email']; ?>">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>
		    <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td>
                    <input name="address" type="text" value="<?= $_SESSION['user']['address']; ?>">
                    
                </td>
                <td></td>
            </tr>	
			
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>   
					<input type="radio" name="gender" value="male" <?php if($_SESSION['user']['gender'] =="male") :?> checked<?php endif; ?> >Male
					<input type="radio" name="gender" value="female" <?php if($_SESSION['user']['gender'] =="female") :?> checked<?php endif; ?>>Female
					<input type="radio" name="gender" value="other"<?php if($_SESSION['user']['gender'] =="other") :?> checked<?php endif; ?>  >Other
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text" value="<?= $_SESSION['user']['dob']; ?>">
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </td>
                <td></td>
            </tr>
        </table>
        <hr/>
		<input type="submit" value="Save">
        
        
        <a href="loggedin.php">Home</a>
</fieldset>
			</td>
			</form>
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
		$flag=0;
		
		if(str_word_count($_REQUEST['name']<2)){
			echo "Name must contain 2 words";
			$flag=1;
		}

		if(!isset($_REQUEST['address'])){
			$flag=1;
			echo "Address must not be empty";
		}	
		if(!isset($_REQUEST['dob'])){
			$flag=1;
			echo "Date of Birth must not be empty";
		}	
		
		if($flag!=1){
			$username=$_SESSION['user']['username'];
			$name=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$gender=$_REQUEST['gender'];
			$dob=$_REQUEST['dob'];
			$add=$_REQUEST['address'];
			
			 include "../../data/user_access.php";
			 $result=updateUser($username,$name,$email,$gender,$dob,$add);
			 $_SESSION['user']=$result;
			 var_dump($_SESSION['user']);
			 echo "<script>
                    window.alert('Edit Successfully');
                    document.location='editprofile.php'; 
                 </script>";
			 
			
		}
		
		else{
			echo "Fix All Errors";
		}
	}
		
?>




