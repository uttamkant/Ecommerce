<?php

// including connect file
include('./includes/connect/.php');

// getting  product
function getproducts(){
    global $conn;


    // condition to check isset or not 
    if(!isset($_GET['category'])){
        $category_id=$_GET['category'];
    $result_query="Select *from `products` where category_id=";
    $result_query=mysqli_query($conn,$select_query);
$num_of_rows+mysqli_num_rows($select_query);


    // $row=mysqli_fetch_assoc($result_query);
    // echpo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query));{
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_iimage1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brands_id'];
   echo "<div class='col-md-4mb-2'>"
   <div class='card'>
               <img src='./admin_area/product_images/$product_image1'
               class='card-img-top' alt='$product_title'>
               <div class="card-body">
               <h5 class='card-title'>$product_title</h5>
               <p class="card-text">$product_description</p>
               <a href="" ="class btn btn-nfo"> Add to cart</a>
               <a href="#" class="btn btn-seconday">View more</a>
               </div>
               </div>
               </div>;


}
    }
}



// getting unique categories
function get_uniqe_categories(){
    global $conn;
if(!isset($_GET['brand'])){
    $result_query="Select *from `products` order by rand() LIMIT 0,9";
    $result_query=mysqli_query($conn,$select_query);{
    // $row=mysqli_fetch_assoc($result_query);
    // echpo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query));{
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_iimage1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brands_id'];
   echo "<div class='col-md-4mb-2'>"
   <div class='card'>
               <img src='./admin_area/product_images/$product_image1'
               class='card-img-top' alt='$product_title'>
               <div class="card-body">
               <h5 class='card-title'>$product_title</h5>
               <p class="card-text">$product_description</p>
               <a href="" ="class btn btn-nfo"> Add to cart</a>
               <a href="#" class="btn btn-seconday">View more</a>
               </div>
               </div>
               </div>;


}
    }
}
}


// displaying brands in sidenav
function getbrands(){
     global $conn;
    $select_brands="Select * from `brands`";
$result_brands=mysqli_query($conn,$select_brands);
while($row_data=mysqli_fetch_assoc($result_brands)){
$brand_title= $row_data['brand_id'];
$brand_id=$row_data['brand_title'];
echo "<li class='nav-item'>
<a href='index.php?brands=$brands_id' class='nav-link text-light'>$brand_title</a>
</li>";
}
}


// displaying categories in sidenav
function getcategories(){
     global $conn;
     $select_categories="Select * from `categories`";
$result_categories=mysqli_query($conn,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
$categories_id= $row_data['categories_id'];
$categories_title=$row_data['categories_title'];
echo "<li class='nav-item'>
<a href='index.php?category=$categories_id' class='nav-link text-light'>$brand_title</a>
</li>";
}
}
?>