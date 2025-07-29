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

 // displaying brands in sidenav
function getbrands(){
     global $conn;
    $select_brands="Select * from `brands`";
$result_brands=mysqli_query($conn,$select_brands);
while($row_data=mysqli_fetch_assoc($result_brands)){
$brand_id= $row_data['brand_id'];
$brand_title=$row_data['brand_title'];

echo "<li class='nav-item'>
<a href='index.php?brands=$brand_id' class='nav-link text-light'>$brand_title</a>
</li>";
}
}

// displaying categories in sidenav
function getcategories(){
     global $conn;
     $select_categories="Select * from `categories`";
$result_categories=mysqli_query($conn,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
$category_id= $row_data['category_id'];
$category_title=$row_data['category_title'];
echo "<li class='nav-item'>
<a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
</li>";
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
              <a href='idex.php?add_to_cart=$product_id' 
              class='btn btn-info'>Add to cart</a>
           <a href='product_details.php?$product_id' class='btn btn-secondary'>View more</a>
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
}

function insert_brand(){
if(isset($_POST['insert_brands'])){
    $brands_title=$_POST['brand_title'];


    //select data from database
    $select_query="Select * from `brands` where   brand_title='$brands_title'";
    $result_select=mysqli_query($conn,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
         echo "<script>alert('Category has been inserted successfully')</script>";
    }else{
    
    $insert_query="insert into `brands` (brand_title ) values ('$brands_title')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
        echo "<script>alert('Brands is present inside the database')</script>";
    }
    }}

}


function get_all_product(){
    
    global $conn;


    // condition to check isset or not 
  /*  if(isset($_GET['category'])){
        $category_id=$_GET['category'];
        $result_query="Select * from `products` where category_id=$category_id";
        $result_query=mysqli_query($conn,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_row==0){
            echo "<h2 class='text-center text-denger'>No stock for this category</h2>";

        }*/

        $select_query="select * from `product`";
        $result_query=mysqli_query($conn,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
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
                 <a href='index.php?add_to_cart=$product_id' 
              class='btn btn-info'>Add to cart</a>
               <a href='#' class='btn btn-seconday'>View more</a>
               </div>
               </div>
               </div>";


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
                         <a href='idex.php?add_to_cart=$product_id' 
                             class='btn btn-info'>Add to cart</a>
                        <a href='product_details.php?product_id=$product_id'
                            class='btn btn-seconday'>View more</a>
                    </div>
                </div>
               </div>";
    }
    
}  
}



//getting all products





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
                      <a href='idex.php?add_to_cart=$product_id' 
              class='btn btn-info'>Add to cart</a>
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
                <a href='idex.php?add_to_cart=$product_id' 
              class='btn btn-info'>Add to cart</a>
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
                                 <a href='idex.php?add_to_cart=$product_id' 
              class='btn btn-info'>Add to cart</a>
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
function getUSERId(){
  
   // Start the session again if not already started

if (isset($_SESSION['userid'])) {
    $userId =    $_SESSION['userid'];
    echo "User ID: " . $userId;
    return $userId;
} else {
    echo "User is not logged in.";
    return null;
}

}
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $get_user_id= getUSERId();
        $get_product_id=$_GET['add_to_cart'];

        $select_query="Select * from `cart_details` where user_id=
        '$get_user_id'";
        $result_query=mysqli_query($con,$select_query);    
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_row>0){
            
            echo "<script>alert('This item is already present inside the cart')
            </script>";
            echo "<script>window.open('index.php','self')</script>";

            }else{
                $insert_query="insert into `cart_details` (product_id,user_id,quantity) values ($get_user_id,
                '$user_id','0')";
                $result_query=mysqli_query($conn,$insert_query);
                 echo "<script>alert('Item is added to cart')</script>";
                 echo "<script>window.open('index.php','_self')</script>";
            }    
    }
}


// funtion to get cart item numbers
function cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $get_user_id= getUSERId();
        echo $get_user_id;
        $select_query="Select * from `cart_details` where user_id='$get_user_id'";
        $result_query=mysqli_query($conn,$select_query);    
        $count_cart_items=mysqli_num_rows($result_query);
        if( $count_cart_items>0){
            }else{
             $get_product_id=   $_GET['add_to_cart'];
       $insert_query="insert into `cart_details`
        (product_id,user_id,quantity) values ($get_product_id,'$get_user_id',0)";
        $result_query=mysqli_query($conn,$insert_query);
        echo "<script>alert('Item is added to cart')</script>";
        echo "<script>window.open('index.php','_self')<?script>";
    }
}
}



// total price funtion
function total_cart_price(){
$total_price=500;
    /*global $conn;
    $get_ip_add = getIPAddress();
    $total=0;
    $cart_query="Select * from `cart_details` where 
    ip_address='$get_ip_add'";
    $result=mysqli_query($conn,$cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_product="Select * from `products`
         where product_id=' $product_id'";
             $result_products=mysqli_query($conn,$cart_query);
            while($row_product_price=mysqli_fetch_array($result_products)){
        $product_price=array($row_product_price['product_sprice']);  //[200,300]
        $product_value=array_sum($product_price); //[500]
        $total_price+=$product_values;//[500]
            }
    }*/
    echo $total_price;
}
?>

