<!--connect file--> 
<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using PHP and MY SQL.</title>
    <!--boortstrap CSS link-->
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/all.min.css">
    <!--font awesome link-->
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
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">product</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">register</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">cart <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 32C0 14.3 14.3 0 32 0L48 0c44.2 0 80 35.8 80 80l0 288c0 8.8 7.2 16 16 16l464 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-66.7 0c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16l-197.5 0c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48s-48-21.5-48-48c0-5.6 1-11 2.7-16L144 448c-44.2 0-80-35.8-80-80L64 80c0-8.8-7.2-16-16-16L32 64C14.3 64 0 49.7 0 32zM432 96l0-40c0-4.4-3.6-8-8-8l-80 0c-4.4 0-8 3.6-8 8l0 40 96 0zM288 96l0-40c0-30.9 25.1-56 56-56l80 0c30.9 0 56 25.1 56 56l0 40 0 224-192 0 0-224zM512 320l0-224 16 0c26.5 0 48 21.5 48 48l0 128c0 26.5-21.5 48-48 48l-16 0zM240 96l16 0 0 224-16 0c-26.5 0-48-21.5-48-48l0-128c0-26.5 21.5-48 48-48z"/></svg></a>
        </li>
        <li class="nav-item">
             <li class="nav-item">
          <a class="nav-link" href="#">total price :100/-</a>
        </li>
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
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
<nav class="navbar-navbar-expannd-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me--auto">
    <ul class="nav-item">
     <a class="nav-link" href="#">Wellcome Guest</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Login</a>

    </ul>
  </ul>
</nav>
<!--third child--> 
<div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communications is at the heart of e-commerce and community</p>

</div>
<!--fourth child--> 
<div class="row">
  <div class="col mod-10">
    <!--products--> 
    <div class="row">
         <div class="col-md-4 mb-2">
          <div class="card">
  <img src="./images/apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
   <a href="#" class="btn btn-primary">Add to cart</a>
     <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
         </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/t-shrit.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
   <a href="#" class="btn btn-primary">Add to cart</a>
     <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
</div>
           <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/pen.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
     <a href="#" class="btn btn-primary">View More</a>
  </div>

   
             </div>
              <div class="col-md-4 me-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/toy.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
   <a href="#" class="btn btn-primary">Add to cart</a>
     <a href="#" class="btn btn-primary">View More</a>
  </div>

   
             </div>
           </div>
           </div>
              <div class="col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/book.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
     <a href="#" class="btn btn-primary">View More</a>
  </div>

   
             </div>
           </div>
             <div class="col-md-4">
            <div class="card" style="width: 18rem;">
  <img src="./images/jeans.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and 
      make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
     <a href="#" class="btn btn-primary">View More</a>
  </div>

   
           
           </div>
        </div>
      </div>

   
<div class="col-md-2 bg-secondary p-0">
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-center">Delivery Brands</a>
    </li>
<?php
$select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brand);
//echo $row_data['brands_title'];
//echo $row_data['brands_title'];
while($row_data=mysqli_fetch_assoc($result_brand));
$brands_title= $row_data['brands_title'];
$brand_id=$row_data['brand_id'];
echo $brands_title;
?>

     <li class="nav-item">
      <a href="#" class="nav-link text-center"> Brand1</a>
    </li>

     <li class="nav-item">
      <a href="#" class="nav-link text-center">Brand2</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-center">Brand3</a>
    </li>
<li class="nav-item">
      <a href="#" class="nav-link text-center">Brand4</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-center">Brand5</a>
    </li>
  </ul>

</div>
<div class="col-md-2 bg-secondary p-0">
  <!--brands to be displayed-->
  <ul class="navbar-nav me-auto text-center">
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

</div>
  </div>
</div>
<!--last child-->
<div class="bg-info p-3 text-center">
    <p> All rights reserved @- Designed by uttam-2025</p>
    </div>
</div>
<!--bootstrap js linl-->
 <script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>