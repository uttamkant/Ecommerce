<?php

// including connect file
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");

// getting unique categories
function  get_unique_categories(){
     global $conn;
    $category_query="SELECT * FROM `categories`";
    $result_query=mysqli_query($conn,$category_query);
     while($row=mysqli_fetch_assoc($result_query)){
        $category_id=$row['category_id'];
        $category_title=$row['category_title']; 
         echo "<div class='col-md-4mb-2'>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
   
               <h5 class='card-title'>$category_title</h5>
            
            </div>";
     }

 }
    
   

 function     get_unique_brands(){
    global $conn;
    $brand_query="SELECT * FROM `brands`";
    $result_query=mysqli_query($conn,$brand_query);
     while($row=mysqli_fetch_assoc($result_query)){
        $brand_id=$row['brand_id'];
        $brand_title=$row['brand_title']; 
         echo "<div class='col-md-4mb-2'>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
   
               <h5 class='card-title'>$brand_title</h5>
            
            </div>";
     }

 }

 function getbrands() {
  global $conn;
    $brand_query="SELECT * FROM `brands`";
    $result_query=mysqli_query($conn,$brand_query);
     while($row=mysqli_fetch_assoc($result_query)){
        $brand_id=$row['brand_id'];
        $brand_title=$row['brand_title']; 
         echo "<div class='col-md-4mb-2'>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
   
               <h5 class='card-title'>$brand_title</h5>
            
            </div>";
     }

 }
 function getcategories(){
     global $conn;
    $category_query="SELECT * FROM `categories`";
    $result_query=mysqli_query($conn,$category_query);
     while($row=mysqli_fetch_assoc($result_query)){
        $category_id=$row['category_id'];
        $category_title=$row['category_title']; 
         echo "<div class='col-md-4mb-2'>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
   
               <h5 class='card-title'>$category_title</h5>
            
            </div>";
     }

 }

 
 
// getting  products
function get_products(){
    global $conn;
    $brand_id_query="Select *from `products` order by rand() LIMIT 0,9";
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brands_id'];
   echo "<div class='col-md-4mb-2'>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
   <div class='card'>
               <img src='./Admin_area/product_images/$product_image1'
               class='card-img-top' alt='$product_title'>
               <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='product_details.php?product_id' class='btn btn-info'>Add to cart</a>
           <a href='#' class='btn btn-secondary'>View more</a>
           </div>

        </div>
        </div>";
}
               
                global $conn;


    // condition to check isset or not 
    if(!isset($_GET['category'])){
        $category_id=$_GET['category'];
    $result_query="Select *from `products` where category_id=";
    $result_query=mysqli_query($conn,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_row==0){
    echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

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
<a href='index.php?category=$categories_id' class='nav-link text-light'>$category_title</a>
</li>";
}
}


    


// getting unique categories
function get_uniqe_category(){
    global $conn;

    //condition to check isse or not
    if(isset($_GET['category'])){
         if(isset($_GET['brand'])){
        
        $result_query="Select * from `products` order by rand() LIMIT 0,9";
        $result_query=mysqli_query($conn,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_row==00){
            echo "<h2 class='text-center text-denger'> this is not  avaialbe for servies</h2>";

        }
    }

   
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_iimage1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brands_id'];
        echo "<div class='col-md-4mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_images/$product_image1'
                        class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' ='class btn btn-info'> Add to cart</a>
                        <a href='product_details.php?product_id=$product_id'
                            class='btn btn-seconday'>View more</a>
                    </div>
                </div>
               </div>";
    }
    
}  
}



//getting all products

function get_all_products(){
    
    global $conn;


    // condition to check isset or not 
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
        $result_query="Select *from `products` where category_id=$category_id";
        $result_query=mysqli_query($conn,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_row==0){
            echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

        }


    // $row=mysqli_fetch_assoc($result_query);
    // echpo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brands_id'];
   echo "<div class='col-md-4 mb-2'>
        <div class='card'>
               <img src='./admin_area/product_images/$product_image1'
               class='card-img-top' alt='$product_title'>
               <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'>$product_description</p>
               <a href='#' ='class btn btn-ifo'> Add to cart</a>
               <a href='#' class='btn btn-seconday'>View more</a>
               </div>
               </div>
               </div>";


}
    }
}


}


        // getting unique brands

function get_uniqe_brands(){
    global $conn;
if(isset($_GET['brands'])){
    $brands_id=$_GET['brands_id'];
    $brand_id_query="Select *from `Products` where brand_id=$brand_id";
    $result_query=mysqli_query($conn,$select_query);
    $num_of_rows=mysqli_rum_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>This brand is not  available for servies</h2>";
    }
    // $row=mysqli_fetch_assoc($result_query);
    // echpo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_iimage1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brands_id'];
   echo "<div class='col-md-4mb-2'>
            <div class='card'>
               <img src='./admin_area/product_images/$product_image1'
               class='card-img-top' alt='$product_title'>
               <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='#' class='btn btn-info'> Add to cart</a>
                    <a href='#' class='btn btn-seconday'>View more</a>
                </div>
            </div>
        </div>";


}
}
}









//searching product funnction

function search_products(){
    global $conn;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
    $search_query="Select * from `product` where product_keywords like 'search_data_value'";
    $result_query=mysqli_query($conn,$result_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_row==0){
    echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

}


    // $row=mysqli_fetch_assoc($result_query);
    // echpo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_iimage1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brands_id'];
   echo "<div class='col-md-4mb-2'>
   <div class='card'>
               <img src='./admin_area/product_images/$product_image1'
               class='card-img-top' alt='$product_title'>
               <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'>$product_description</p>
               <a href='' class='btn btn-info'> Add to cart</a>
               <a href='#' class='btn btn-seconday'>View more</a>
               </div>
               </div>
               </div>";


}
    }
}

//view details funtion
function view_details(){
  
    global $conn;
    // condition to check isset or not
    if(isset($_GET['product_id'])){
        if(!isset($_GET['category'])){
             if(!isset($_GET['brand'])){
             $brand_id_query="Select *from `products` where product_id=$product_id";
        $result_query=mysqli_query($conn,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $brand_id=$row['brands_id'];
             echo "<div class='col-md-4mb-2'>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                        <div class='card'>
                            <img src='./Admin_area/product_images/$product_image1'
                            class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <a href='#' class='btn btn-info'>Add to cart</a>
                                <a href='#' class='btn btn-secondary'>View more</a>
                            </div>

                        </div>
                    </div>";
        }
   
        }   
    }
 }
}
    





//getip address function();
/*function getIPAddress(){
    //whether ip is from the share internet
    id(!empty($_Server['HTTP_CLINT_IP'])){
        $ip = $_SERVER['HTTP_CLINENT_IP'];
    }
    //where ip is from the proxy
    elesif (!empty($_SERVER['HTTP_X_FORWARD_FOR'])){
$ip = $_SERVER['HTTP_X_FORWARED_FOR'];
    }
    //whether ip id form the remote address
    eles{
        $ip = $SERVER['REMOT_ADDR'];

    } 
    retune $ip;
//$ip = getIPAddress();
//echo 'User Real IP Address - ' .$ip;
}

// cart function
function cart(){

}*/

// cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
    }
}
?>

