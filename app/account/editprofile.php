<?php
	 session_start();
	 
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
	
	if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="user")
		{
				header("location:../account/login.php");
		}
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Profile</title>
</head>
<body width="1200">
	<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr><th colspan="3" align="right" width="60%">
				<a href="../user_pages/home.php"><img src="ali.png" align="left" align="top" width="20%"></a>
				<br>
				<br>
		
				<input type="text" name="search" placeholder="Enter keyword Here....">
				<input type="submit" value="Search Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="../account/login.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="../user_pages/order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="../user_pages/cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		<tr>
			<td width="13%" valign="top">
                <label><b> Account</b></label><br><hr>
			<ul>
			<li><a href="../user_pages/home.php">Home</a>	</li>
			<li><a href="profile.php">View profile</a>	</li>	
			<li><a href="../user_pages/order.php">My Orders </a></li>
			<li><a href="editprofile.php">Settings</a></li>
			<li><a href="changepass.php">Change Password</a></li>
			<li><a href="changepp.php">Change Profile Picture</a></li>
			<li><a href="../user_pages/logouthandler.php">Logout </a></li>
			</ul>
		<label><b>Catagories</b></label><br><hr>
			<ul>
			<a href="../user_pages/select persons male.php">Men's Product</a><hr>
			<li><a href="../user_pages/spm products.php?pname=Shirt">Men's Shirts</a></li>
			<li><a href="../user_pages/spm products.php?pname=Pant">Men's Pants</a></li>
			<li><a href="../user_pages/spm products.php?pname=Shoe">Men's Shoes</a></li>
			<li><a href="../user_pages/spm products.php?pname=Belt">Belt</a></li><br>
			<a href="../user_pages/select persons female.php">Women's Product</a><hr>
			<li><a href="../user_pages/spf products.php?pname=Dress">Dresses</a></li>
			<li><a href="../user_pages/spf products.php?pname=Pant">Pants</a></li>
			<li><a href="../user_pages/spf products.php?pname=Shoe">Shoes</a></li>
			<li><a href="../user_pages/spf products.php?pname=Bags">Bags</a></li><br>
			<a href="../user_pages/select persons kids.php">Kid's Product</a><hr>
			<li><a href="../user_pages/spk products.php?pname=Dress">Dress</a></li>
			<li><a href="../user_pages/spk products.php?pname=Diapers">Diapars</a></li>
			<li><a href="../user_pages/spk products.php?pname=Shoe">Shoes</a></li>
			<li><a href="../user_pages/spk products.php?pname=Toys">Toys</a></li><br>
			<a href="../user_pages/accessories.php">Accessories</a><hr>
			<li><a href="../user_pages/ack products.php?pname=Wallet">Wallet</a></li>
			<li><a href="../user_pages/ack products.php?pname=Bag">Bags</a></li>
			<li><a href="../user_pages/ack products.php?pname=BackCover">Backcovers</a></li>
			<li><a href="../user_pages/ack products.php?pname=HandBand">Handsbands</a></li><br>
			<a href="../user_pages/electronics.php">Electronics</a><hr>
			<li><a href="../user_pages/eck products.php?pname=Mobile">Mobile</a></li>
			<li><a href="../user_pages/eck products.php?pname=TableFan">Table Fans</a></li>
			<li><a href="../user_pages/eck products.php?pname=HeadPhone">Headphones</a></li>
			<li><a href="../user_pages/eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
			</ul>
			<label><b>Report</b></label><hr>
			<ul>
			<li><a href="../user_pages/myPurchase.php">My Purchase Stastics</a></li>
			<li><a href="../user_pages/mylastPurchaseList.php">My Last Purchase List </a></li>
			<li><a href="../user_pages/mymostVisitedProduct.php">My Most Visited Product List </a></li>
			<li><a href="../user_pages/mymostPurchasedProduct.php">My Most Purchased Product List </a></li>
			<li><a href="../user_pages/myfavouriteList.php">My Favourite List </a></li>
			</ul>
		
			</td>
			<td valign="top" height="400" >
			
			<br/>
			<fieldset>Message box</fieldset>
<br/>
<form method="post">
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
         <a href="../user_pages/home.php">Home</a>
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
</form>
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
                    document.location='../account/editprofile.php'; 
                 </script>";
			 
			
		}
		
		else{
			echo "Fix All Errors";
		}
	}
		
?>
	
