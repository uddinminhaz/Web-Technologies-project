<?php
	if(require_once("db.php")){

function menproducts()
		{
			global $conn;
			$sql = "SELECT * FROM allproducts WHERE catagory='Men' AND subcatagory='Shirt' ";        
			$result = executeSQL($sql);
        
			$menproducts = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $menproducts[$i] = $row;
			}
        
        return $menproducts;
		}
	function womenproducts()
		{
			global $conn;
			$sql = "SELECT * FROM allproducts WHERE catagory='Women' AND subcatagory='Shirt' ";        
			$result = executeSQL($sql);
        
			$womenproducts = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $womenproducts[$i] = $row;
			}
        
        return $womenproducts;
		}
		
		function catgorymen()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory FROM allproducts WHERE catagory='Men'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}
		function catgorywomen()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Women'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}

		function catgorykid()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Kids'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}

		function catgoryacc()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Accessories'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}



		function catgoryelec()
		{
			global $conn;
			$sql = "SELECT distinct subcatagory from allproducts WHERE catagory='Electronic'";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}



		
		
		
		
	 function getProductById($productId){
        $sql = "SELECT * FROM allproducts WHERE code=$productId";        
        $result = executeSQL($sql);
        
        $productcode = mysqli_fetch_assoc($result);
        
        return $productcode;
    }
        
        
	
	function getProductByNameMale($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Men' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }

        return $getProductByN;
    }
		function getProductByNameFemale($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Women' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }
	
	function getProductByNameKids($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Kids' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }
		function getProductByNameElectronics($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Electronic' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }
		function getProductByNameAccesories($pnamee){
        $sql = "SELECT * FROM allproducts WHERE catagory='Accessories' AND  subcatagory LIKE '%$pnamee%'";        
        $result = executeSQL($sql);
		
		 for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $getProductByN[$i] = $row;
        }
   
        return $getProductByN;
    }




      function allorders()
		{
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM orders WHERE username LIKE'$user' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		 function receiveorders()
		{
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM orders WHERE username LIKE'$user' AND customersts like 'Received'";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		 function pendingorders()
		{
			global $conn;
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM orders WHERE username LIKE'$user' AND customersts like 'Not Received'";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}
            
        
        function adminorders()
		{
			global $conn;
			
			$sql = "SELECT * FROM orders WHERE adminsts LIKE 'Confirm' AND customersts LIKE 'Received'";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		function adminpending()
		{
			global $conn;
			
			$sql = "SELECT * FROM orders WHERE customersts LIKE 'Not Received' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

		function admincancel()
		{
			global $conn;
			
			$sql = "SELECT * FROM orders WHERE adminsts LIKE 'Cancel' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}


		function adminnew()
		{	
			$sql = "SELECT * FROM orders WHERE adminsts LIKE 'Not Seen' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}

        //order confirm cancel shipping site admin
        
        function orderconfirm($trackid)
        {
            $status="Confirm";
            $sql="UPDATE orders SET adminsts='$status' WHERE tracknumber=$trackid";
            var_dump($sql);
            $result = executeSQL($sql);
            var_dump($result);
            return $result;
        }

    //cookies//-




  function discount()
		{
			global $conn;
			$sql = "SELECT * FROM allproducts WHERE offer != 0";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}
	

  function todaysoffers()
		{
			global $conn;
			$sql = "SELECT * FROM todaysoffers WHERE offer != 0";        
			$result = executeSQL($sql);
        
			$catgorymen = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $catgorymen[$i] = $row;
			}
        
        return $catgorymen;
		}

		 function wish()
		{
			global $conn;
			$user=$_SESSION['user']['username'];
			$sql = "SELECT * FROM wish WHERE username LIKE'$user' ";        
			$result = executeSQL($sql);
        
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $wish[$i] = $row;

        }
        return $wish;
        
		}




		





		 function getProductByIdd($productId){
        $sql = "SELECT * FROM todaysoffers WHERE code=$productId";        
        $result = executeSQL($sql);
        
        $productcode = mysqli_fetch_assoc($result);
        
        return $productcode;
    }



     function getProductByIddd($productId){
        $sql = "SELECT * FROM wish WHERE code=$productId";        
        $result = executeSQL($sql);
        
        $productcode = mysqli_fetch_assoc($result);
        
        return $productcode;
    }
        
        
     function getAllProductmywish($username11){
        $sql = "SELECT * FROM wish WHERE username LIKE '%$username11%'";        
        $result = executeSQL($sql);
        
        $wishlist = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $wishlist[$i] = $row;
			}
        
        return $wishlist;
    }
	
	 function insertcommnet($product)
        {
           $sql = "INSERT INTO badproducts(name,email,comment,prate,pdname,catagory,subcatagory,pdpic,code,bprice,sprice) VALUES('$product[cname]','$product[cemail]','$product[cmnt]','$product[prate]','$product[pdname]','$product[catagory]','$product[subcatagory]','$product[pdpic]','$product[code]','$product[bprice]','$product[sprice]')";
            
            $result = executeSQL($sql);
            return $result;
        }
        
        function getProductforcmnt($productId)
        {
            $sql = "SELECT * FROM badproducts WHERE code=$productId";        
        $result = executeSQL($sql);
        
         $Productforcmnt = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $Productforcmnt[$i] = $row;
			}
        
        return $Productforcmnt;
        }
        
        function addProductToWish($product)
        {
        $sql = "INSERT INTO wish(username,code,name,catagory,subcatagory,color,material,size,description,bpprice,sprice,quantity,offer,pdpic) VALUES('$product[username]','$product[code]','$product[name]','$product[catagory]','$product[subcatagory]','$product[color]','$product[material]','$product[size]','$product[description]','$product[bpprice]','$product[sprice]','$product[quantity]','$product[offer]','$product[pdpic]')";
                    $result = executeSQL($sql);
            return $result;
        }
        
        function getTrackid($product)
        {
            $sql="SELECT LAST_INSERT_ID($product) From orders";
            $result = executeSQL($sql);
            return $result;
        }
        
        function insertToOrders($productcode)
        {
           $sql= "INSERT INTO orders(username,code,pname,cost,size,colour,quantity,customersts,adminsts,sendshipping,shippingsts,tracknumber, ppic) VALUES ('$productcode[username]','$productcode[code]','$productcode[pname]','$productcode[cost]','$productcode[size]','$productcode[colour]','$productcode[quantity]','$productcode[customersts]','$productcode[adminsts]','$productcode[sendshipping]','$productcode[shippingsts]', NULL,'$productcode[ppic]')";
        
            $result = executeSQL($sql);
            return  $result;
        }
        
        




	
	function session(){
		
	session_start();
		if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
		}
		
		if(isset($_SESSION['user'])==true)
		{
			if($_SESSION['user']['usertype']!="user" &&$_SESSION['user']['usertype']!="admin")
			{
				header("location:../account/login.php");
			}
		}

	}
       
        
       
		
					
	}

	
	else{
		echo "Database not found";
	}
	
?>