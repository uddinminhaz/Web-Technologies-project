<?php include "../../data/product_access.php"; ?>
<?php

       $productId =$_GET['cd'];
      $productcode = getProductByIddd($productId);
    


        $d=0;
        
        $productqt =$_GET['qn'];
        if(isset($_COOKIE['item']))
           {
               foreach($_COOKIE['item'] as $name => $value)
               {
                   $d=$d+1;
               }
               $d=$d+1;
           }
           else
           {
               $d=$d+1;
           }
           $sql = "SELECT * FROM wish WHERE code=$productId";        
           $res3 = executeSQL($sql);
           while($row3=mysqli_fetch_array($res3))
           {
               $img1=$row3["pdpic"];
               $nm=$row3["name"];
               $price=$row3["sprice"];
               $qty=$productqt;
               $total=$price*$qty;
               $cd=$row3["code"];
           }
           
           
           
           if(isset($_COOKIE['item']))
           {
               foreach($_COOKIE['item'] as $name1 => $value)
               {
                   $values11=explode("_",$value);
                   $found=0;
                   if($img1==$values11[0])
                   {
                       $found=$found+1;
                       $qty=$productqt;
                       
                       $tb_qty;
                       $sql = "SELECT * FROM wish WHERE code=$productId"; 
                       $res = executeSQL($sql);
                       while($row=mysqli_fetch_array($res))
                        {
                           $tb_qty=$row["quantity"];
                        }
                       if($tb_qty<$qty)
                       {
                           ?>
                           <script>
                               alert("Quantity Not Available Right Now");
                            
                           </script>
                           
                           <?php
                       }
                       else
                       {   
                           $total=$values11[2]*$qty;
                           setcookie("item[$name1]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+999999999999999999999999999999999999999999999999999999999999999999999999999999);
                        }
                   }
               }
               if($found==0)
               {
                    $tb_qty;
                       $sql = "SELECT * FROM wish WHERE code=$productId"; 
                       $res = executeSQL($sql);
                       while($row=mysqli_fetch_array($res))
                        {
                           $tb_qty=$row["quantity"];
                        }
                       if($tb_qty<$qty)
                       {
                           ?>
                           <script>
                               alert("Quantity Not Available Right Now");
                            
                           </script>
                           
                           <?php
                       }
                       else
                       {   
                           setcookie("item[$d]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+999999999999999999999999999999999999999999999999999999999999999999999999999999);
                       }
               }
           }
        else
        {
             $tb_qty;
                       $sql = "SELECT * FROM wish WHERE code=$productId"; 
                       $res = executeSQL($sql);
                       while($row=mysqli_fetch_array($res))
                        {
                           $tb_qty=$row["quantity"];
                        }
                       if($tb_qty<$qty)
                       {
                           ?>
                           <script>
                               alert("Quantity Not Available Right Now");
                            
                           </script>
                           
                           <?php
                       }
                       else
                       {   
                           setcookie("item[$d]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+999999999999999999999999999999999999999999999999999999999999999999999999999999);
                       }
        }

        header('location:myfavouriteList.php')
?>