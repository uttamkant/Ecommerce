<?php

include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/functions/common_function.php");

if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
   
}



// getting total items and total price of all items
$user_id=getUSERId();
$total_price=0;
$cart_query_price="Select * from `cart_details` where user_id='$user_id'";
$resutl_cart_price=mysqli_query($conn,$$cart_query_price);
$count_products=mysqli_num_rows($resutl_cart_price);
while($row_price=mysqli_fetch_array($resutl_cart_price)){
    $product_id=$row_proce['product_id'];
    $select_product="Select * from `product_id` 
    where product_id='$product_id'";
    $run_price=mysqli_query($conn,$cart_query_price);
    while($row_product_price=mysqli_fetch_array($run_price)){
        $product_price=array($row_product_price['product_price']);
        $product_price=array_sum($product_price);
        $total_price+=$product_values;

    }
}
?>
