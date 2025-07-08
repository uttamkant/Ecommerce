<!--connect file--> 
<?php
include('includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using php and my sql</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" 
     crossorigin="anonymous">
<!--font aweaome link--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--css file-->
<link rel="stylesheet" href="style.css">
<body>
    <!--navbar-->
    <div class="contaier fliud">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/market.jpeg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Conatact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price : 100/-</a>
        </li>
        

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child--> 
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Wellcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
</nav>

<!--third child-->
<div class="bg-light">
    <h3 class="text-center">Fashion</h3>
    <p class="text-center">Communication is at the heart of e-commerce and comunity</p>
</div>
<!--fourth child--> 
<div class="row"></div>
<div class="col-md-10">
    <!--product-->
<div class="row">
     
<!--fetching products--> 
        <?php
$select_query="Select * from `product`";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query)
//echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id']
  $product_title=$row['product_title']
  $product_description=$row['product_description']
  $product_keywords=$row['product_keywords']
  $product_image1=$row['product_image1']
  $product_price=$row['product_price']
  $category_id=$row['category_id']
  $brand_id=$row['brand_id']
echo " <div class='col-md-4 mb-2'>
        <div class='card' style='width: 18rem;'>
  <img src='./images/book4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>Card title</h5>
    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card content.</p>
    <a href='#' class='btn btn-info'> Add to cart</a>
    <a href='#' class='btn btn-secondary'> View more</a>
  </div>
</div>
</div>";
}
       ?>


    <!--div class="col-md-4 mb-2">
        <div class="card" style="width: 18rem;">
  <img src="./images/book4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-info"> Add to cart</a>
    <a href="#" class="btn btn-secondary"> View more</a>
  </div>
</div>
</div>-->

<!--row end--> 
</div>
  <!--col end--> 
    
</div>
<div class="col-md-2 bg-secondary p-0">
    <!--Brands to be displayed-->
    <ul class="navbar-nav me-auto text-center">
</ul>
<!--categoriest be displayed-->
        <li class="nav-items bg-info">
            <a href="#" class="nav-link text-light"><h4>Delivery Barnds</h4></a>

</li>
<?php

$select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
//$row_data="mysqli_fetch_assoc($result_brands)";
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
 echo "<li class=nav-item>
<a href="index.php?brand=$brand_id" class='nav-link text-light'>$result_brands</a>
</li>";
}
</div>
<div class="col-md-2 bg-secondary p-0">
    <!--Brands to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="navitem bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>

</ul>
<!--categories to be displayed-->
        <li class="nav-items bg-info">
            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li>

<?php
$select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
//$row_data="mysqli_fetch_assoc($result_categories)";
// echo $row_data['categories_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $categories_title=$row_data['categories_title'];
  $categories_id=$row_data['categories_id'];
 echo "<li class=nav-item>
<a href="index.php?categories=$categories_id" class='nav-link text-light'>$categories_brands</a>
</li>";
}
?>

            </ul
</div>

</div>





<!--last child-->
<!--div class="bg-info p-3 text-center">
    <p>All right reserved @- Desigend by uttam-2025</p>
</div-->
    </div>




<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
crossorigin="anonymous"></script>
</body>
</html>