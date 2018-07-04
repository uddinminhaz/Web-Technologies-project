<?php
	if(require_once("db.php"))
    {
		
	 function getAllProduct(){
            $sql = "SELECT * FROM allproducts ";        
            $result = executeSQL($sql);
		
		    $getAllProduct = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $getAllProduct[$i] = $row;
			} 
            return $getAllProduct;
            }
        
    function getAllProductByCatagory($searchkey){
            $sql = "SELECT * FROM allproducts WHERE catagory LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByCatagory = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByCatagory[$i] = $row;
			} 
            return $ProductByCatagory;
            }
        
    function getAllProductBySubCatagory($searchkey){
            $sql = "SELECT * FROM allproducts WHERE subcatagory LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		  
		    $ProductBySubCatagory = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductBySubCatagory[$i] = $row;
			} 
            return $ProductBySubCatagory;
            }
        
    function getAllProductByName($searchkey){
            $sql = "SELECT * FROM allproducts WHERE name LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByName = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByName[$i] = $row;
			} 
            return $ProductByName;
            }
        
    function getAllProductByCode($searchkey){
            $sql = "SELECT * FROM allproducts WHERE code LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByCode = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByCode[$i] = $row;
			} 
            return $ProductByCode;
            }
         function getAllProductByOfferWithParameter($searchkey){
            $sql = "SELECT * FROM allproducts WHERE offer >=$searchkey";        
            $result = executeSQL($sql);
		
		    $ProductByOfferWithParameter = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByOfferWithParameter[$i] = $row;
			} 
            return $ProductByOfferWithParameter;
            }   

        
    function deleteProductByCode($searchkey){
            $sql = "DELETE FROM allproducts WHERE code=$searchkey";        
            $result = executeSQL($sql);
            
            return $result;
            }
        
    function editProduct($product){
            $sql = "UPDATE allproducts SET name='$product[name]', color='$product[color]',material='$product[material]', size='$product[size]',description='$product[description]', bprice='$product[bprice]',sprice='$product[sprice]',offer='$product[offer]', quantity='$product[quantity]' WHERE code=$product[code]";
            $result = executeSQL($sql);
            return $result;
            }
        
        function editProductpic($product){
            $sql = "UPDATE allproducts SET pdpic='$product[pdpic]' WHERE code=$product[code]";
            $result = executeSQL($sql);
            return $result;
            }
        
        
    function AddProduct($product){
			$a =0;
            $sql = "INSERT INTO allproducts(code,name,catagory,subcatagory,color,material,size,description,bprice,sprice,quantity,offer,pdpic) VALUES('$product[code]','$product[name]','$product[catagory]','$product[subcatagory]','$product[color]','$product[material]','$product[size]','$product[description]','$product[bprice]','$product[sprice]','$product[quantity]','$a','$product[pdpic]')";
            $result = executeSQL($sql);
            return $result;
            }
         function getAllProductByRate($rate1,$rate2){
            $sql = "SELECT * FROM badproducts  WHERE  prate LIKE '%$rate1%' OR prate LIKE '%$rate2%' ";        
            $result = executeSQL($sql);
		
		    $getAllProductByRate = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $getAllProductByRate[$i] = $row;
			} 
            return $getAllProductByRate;
            }
        
        ///today offeer
        
        function getAllProductToday(){
            $sql = "SELECT * FROM todaysoffers ";        
            $result = executeSQL($sql);
		
		    $lProductToday = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductToday[$i] = $row;
			} 
            return $ProductToday;
            }
        
    function getAllProductByCatagoryToday($searchkey){
            $sql = "SELECT * FROM todaysoffers WHERE catagory LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByCatagoryToday = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByCatagoryToday[$i] = $row;
			} 
            return $ProductByCatagoryToday;
            }
        
    function getAllProductBySubCatagoryToday($searchkey){
            $sql = "SELECT * FROM todaysoffers WHERE subcatagory LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		  
		    $ProductBySubCatagoryToday = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductBySubCatagoryToday[$i] = $row;
			} 
            return $ProductBySubCatagoryToday;
            }
        
    function getAllProductByNameToday($searchkey){
            $sql = "SELECT * FROM todaysoffers WHERE name LIKE '%$searchkey%'";        
            $result = executeSQL($sql);
		
		    $ProductByNameToday = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByNameToday[$i] = $row;
			} 
            return $ProductByNameToday;
            }
        
    function getAllProductByCodeToday($searchkey){
            $sql = "SELECT * FROM todaysoffers WHERE code LIKE '%$searchkey%'"; 
            $result = executeSQL($sql);
		
		    $ProductByCodeToday = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByCodeToday[$i] = $row;
			}
            
            return $ProductByCodeToday;
            }
         function getAllProductByOfferWithParameterToday($searchkey){
            $sql = "SELECT * FROM todaysoffers WHERE offer >=$searchkey";        
            $result = executeSQL($sql);
		
		    $ProductByOfferWithParameterToday = array();
			for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
			{
            $ProductByOfferWithParameterToday[$i] = $row;
			} 
            return $ProductByOfferWithParameterToday;
            }
        
        function editProductpicToday($product){
            $sql = "UPDATE todaysoffers SET pdpic='$product[pdpic]' WHERE code=$product[code]";
            $result = executeSQL($sql);
            return $result;
            }
        
        function editProductToday($product){
            $sql = "UPDATE todaysoffers SET name='$product[name]', color='$product[color]',material='$product[material]', size='$product[size]',description='$product[description]',cost='$product[cost]',offer='$product[offer]', quantity='$product[quantity]',bprice='$product[bprice]' WHERE code=$product[code]";
            $result = executeSQL($sql);
            return $result;
            }
        
        function AddProductToday($product){
			
            $sql = "INSERT INTO todaysoffers(code,name,catagory,subcatagory,color,material,size,description,cost,quantity,offer,pdpic,bprice) VALUES('$product[code]','$product[name]','$product[catagory]','$product[subcatagory]','$product[color]','$product[material]','$product[size]','$product[description]','$product[cost]','$product[quantity]','$product[offer]','$product[pdpic]','$product[bprice]')";
            $result = executeSQL($sql);
            return $result;
            }
        
        function deleteProductByCodeToday($searchkey){
            $sql = "DELETE FROM todaysoffers WHERE code=$searchkey";        
            $result = executeSQL($sql);
            
            return $result;
            }
	}

	
	else
    {
		echo "Database not found";
	}
	
?>