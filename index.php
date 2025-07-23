<!--connect file--> 
<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/functions/common_function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using PHP and MY SQL.</title>
    <!--boortstrap CSS link-->
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!--<link rel="stylesheet" href="style/all.min.css">-->
    <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
  font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
    


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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php 
      cart_item();</sup></a>
        </li>
        <li class="nav-item">
             <li class="nav-item">
          <a class="nav-link" href="#">total price : <?php total_cart_price();?>/-</a>
        </li>
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search"
         placeholder="Search" aria-label="Search" name="search_data">
        <input type="sumit" value="Search" class="btn
         btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!--calling cart function-->
<?php
cart();
?>
<!--second child--> 
<nav class="navbar-navbar-expannd-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me--auto">
    <ul class="nav-item">
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
    echo '<a class="nav-link" href="./user_area/user_logout.php">Logout</a>';
} else {
    // If not set, display the Login link
    echo '<a class="nav-link" href="./user_area/user_login.php">Login</a>';
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
<!--fourth child--> 
<div class="row px-3">
  <div class="col mod-10">
    <!--products--> 
    <div class="row">
<!--fetching product-->

       <?php
       //calling function
          search_products();
       get_unique_categories();
        get_unique_brands();
      //  $ip = getIPAddress();
//echo 'User Real IP Address - ' .$ip;
?>
<!--row end--> 
</div>
<!--colom end--> 
 </div>

   
<div class="col-md-2 bg-secondary p-0">
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-center">Delivery Brands</a>
    </li>
<?php


?>

  </ul>

</div>
<div class="col-md-2 bg-secondary p-0">
  <!--brands to be displayed-->
  <ul class="navbar-nav me-auto text-center">
    <?php
getbrands();
    ?>
</ul>

<!--categories to be displayed--> 
<a href="#" class="nav-link text-center bg-info">Categories</a>
    </li>

     <li class="nav-item">
      <a href="#" class="nav-link text-center"> Categories1</a>
    </li>

     <li class="nav-item">
      <a href="#" class="nav-link text-center">Categories2</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-center">Categories3</a>
    </li>
<li class="nav-item">
      <a href="#" class="nav-link text-center">Categories4</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-center">Categories5</a>
    </li>
  </ul>
<?php
getcategories();
get_unique_categories();
get_unique_brands();
?>
</div>
  </div>
</div>
<!--last child-->
<!--include footer-->
<?php include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/footer.php");?>

</div>
<!--bootstrap js link-->
 <script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>