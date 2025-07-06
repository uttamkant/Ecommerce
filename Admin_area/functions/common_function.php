<?php

// including connect file
include('./includes/connect/.php');

// getting  product
function getproducts(){
   ow=mysqli_fetch_assoc($result_query));{
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
                global $conn;


    // condition to check isset or not 
    if(!isset($_GET['category'])){
        $category_id=$_GET['category'];
    $result_query="Select *from `products` where category_id=";
    $result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_row==00){
    echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

}


    // $row=mysqli_fetch_assoc($result_query);
    // echpo $row['product_title'];
    while($r_)<p class="card-text">$product_description</p>
               <a href="" ="class btn btn-nfo"> Add to cart</a>
               <a href="#" class="btn btn-seconday">View more</a>
               </div>
               </div>
               </div>;


}
    }
}



// getting unique categories
function get_uniqe_brand(){
    global $conn;
if(!isset($_GET['brand'])){
    $result_query="Select *from `products` where brand_id=$brand_id";
    $result_query=mysqli_query($conn,$select_query);{
if($num_of_row==00){
    echo "<h2 class='text-center text-denger'> this is not  avaialbe for servies</h2>";

}


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
               <a href="product_details.php?product_id=$product_id" class="btn btn-seconday">View more</a>
               </div>
               </div>
               </div>


}
    }
}
}

//getting all products
function get all products(){
   global $conn;


    // condition to check isset or not 
    if(!isset($_GET['category'])){
        $category_id=$_GET['category'];{
    $result_query="Select *from `products` order by rand();
    $result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_row==00){
    echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

}


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


// getting unique categories
function get_uniqe_brand(){
    global $conn;
if(!isset($_GET['brand_id'])){
    $brand_id_query="Select *from `brands` order by rand() LIMIT 0,9";
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


//searching product funnction

function search_product(){
    global $conn;
    if(isser($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
    $search_query="Select * from `product` where product_keywords like 'search_data_value'"
    $result_query=mysqli_query($conn,$result_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_row==00){
    echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

}


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

//view details funtion
function view_details(){
   ow=(mysqli_fetch_assoc($result_query));{
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
                global $conn;


    // condition to check isset or not 
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(isset($_GET['brand'])){
            $product_id=$_GET['product_id']
        $category_id=$_GET['category'];
    $result_query="Select *from `products` where product_id=$product_id";
    $result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_row==00){
    echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

}
    while($r_)<p class="card-text">$product_description</p>
               <a href="" ="class btn btn-nfo"> Add to cart</a>
               <a href="#" class="btn btn-seconday">View more</a>
               </div>
               </div>
               </div>;


                <div class='col-md-8'>
    <!--realted images--> 
    <div class='row'>
        <div class='col-md-12'>
            <h4 class='text-center text-info mb-6'>Related products</h4>
        </div>
        <div class='col-md-6'>
 <img src='images/toy.jpg'
               class='card-img-top' alt='$product_title'>
        </div>
        <div class='col-md-6'>
 <img src='images/toy.jpg'
               class='card-img-top' alt='$product_title'>
        </div>
    </div>
  </div>


}
    }
}  
}
}
?>