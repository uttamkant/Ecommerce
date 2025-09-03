<!--connect file--> 
<?php
// Check if the session is already started
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session if not already started
}
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/functions/common_function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website Cart details</title>
    <!--boortstrap CSS link-->
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!--<link rel="stylesheet" href="style/all.min.css">-->
    <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
  font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="style/style.css">
  <style>
    
.cart-img{
width: 80px;
height: 80px;
boject-fit:contain;
}
    </style>
</head>
<body>
    
hello

<!--navbar-->
<div class="container-fluid">
    <!--frist child-->
    

<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid p-0">
   
  <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">product</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">register</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="cart.php">cart <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 32C0 14.3 14.3 0 32 0L48 0c44.2 0 80 35.8 80 80l0 288c0 8.8 7.2 16 16 16l464 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-66.7 0c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16l-197.5 0c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16L144 448c-44.2 0-80-35.8-80-80L64 80c0-8.8-7.2-16-16-16L32 64C14.3 64 0 49.7 0 32zM432 96l0-40c0-4.4-3.6-8-8-8l-80 0c-4.4 0-8 3.6-8 8l0 40 96 0zM288 96l0-40c0-30.9 25.1-56 56-56l80 0c30.9 0 56 25.1 56 56l0 40 0 224-192 0 0-224zM512 320l0-224 16 0c26.5 0 48 21.5 48 48l0 128c0 26.5-21.5 48-48 48l-16 0zM240 96l16 0 0 224-16 0c-26.5 0-48-21.5-48-48l0-128c0-26.5 21.5-48 48-48z"/></svg></a>
        </li>
       
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

<!--calling cart function-->
<?php
cart();
?>
<!--second child--> 
    <?php
    if (isset($_SESSION['username'])) {
    // If set, display the username
    echo '<a class="nav-link" href="#">Welcome ' . htmlspecialchars($_SESSION['username']) . '</a>';
} else {
    // If not set, display the default message
    echo '<a class="nav-link" href="#">Welcome Guest</a>';
}
    ?>
</li>
<li class="nav-item">
  <?php
  if (isset($_SESSION['username'])) {
    // If set, display the Logout link
    echo '<a class="nav-link" href="user_area/user_logout.php">Logout</a>';
} else {
    // If not set, display the Login link
    echo '<a class="nav-link" href="user_area/user_login.php">Login</a>';
}
  ?>
  <?php
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

  ?>
    </ul>
  </ul>
</nav>
<!--third child--> 
<div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>

<!--fourth child-table-->

              <!--php code to display data-->
              <?php

  global $conn;
    $get_user_id = getUSERId();
    $total=0;
    $total_price=0;
    $cart_query="Select * from `cart_details` where 
    user_id='$get_user_id'";
    $result=mysqli_query($conn,$cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id=$row['product_id'];
        $select_product="Select * from `product`
         where product_id=' $product_id'";
             $result_product=mysqli_query($conn,$select_product);
            while($row_product_price=mysqli_fetch_array($result_product)){
        $product_price=$row_product_price['product_price']; 
        $product_title=$row_product_price['product_title'];
        $product_image1=$row_product_price['product_image1'];
         $product_quantity=$row['quantity'];
        $product_value=$product_price*$product_quantity; //[500]
        $total_price+=$product_value;//[500]
            }
          }
           echo "<div class='row'>
    <form action'#'method='post'>
    <table class='table table-bordered'>
      <thead>
        <tr>
          <th>Product Title</th>
          <th>Product Image</th>
          <th>Quantity</th>
          <th>Total Price</th>
          <th>Remove</th>
          <th>Operations</th>
        </tr>
</thead>
<tbody>";

$total_price=20;
cart_listing();


$get_user_id = getUSERId(); 
if(isset($_POST['update_cart'])){
  $qunatities=$_POST['qty'];
  $update_cart="update `cart_details` set  quantity=$qunatities where 
  user_id=$get_user_id";
  $result_products_quantity=mysqli_query($conn,$update_cart);
  $total_price=$total_price*$qunatities;
}

?>



                <td><input type="checkbox"></td>
                <td>
                  <!--<button class="bg-info px-3 py-2
                   border-0 mx-3">Update</button>-->
                  <input type="submit" value="Update Cart" class="bg-info px-3 py-2
                  border-0 mx-3" name="update_cart">
                   
                   <button class="bg-info px-3 py-2
                    border-0 mx-3">Removes</button>

                </td>
              </tr>
              <?php
              ?>
         
          </tbody
        </table>
        <!--subtotal--> 
        <div class="d                    -flex mb-35">
          <h4 class="px-4">subtotal:<strong class="text-info">
            <?php echo  $total_price?>/-</strong></h4>
          <a href="index.php"><<button class="bg-info px-3 py-2
          border-0 mx-3">Contiune Shopping</button>/a>
          <a href="#"><<button class="bg-secondary p-3 py-2
          border-0n text-light">Checkout</button>/a>
        </div>
    </div>
  <tr>
  
  </tr>
</tbody>
  </table>
  <!--subtotal--> 
  <div class="d-flex">
    <h4 class="px-4">subtotal:<strong class="text-info">
      <<?php echo $total_price?>/.-</strong></h4>
    <a href="index.php"><button class="bg info p-3 py-2 border-0">
      Contiune shopping</button></a>
      <a href="#"><button class="bg-secondary p-3 border-0">
      Checkout</button></a>
  </div>
  </div>

</div>
</form>
        

<!--last child--> 
<!--include footer-->
<?php include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/footer.php");?>

</div>
<!--bootstrap js link-->
 <script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>