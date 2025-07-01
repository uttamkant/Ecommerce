<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashborad</title>
    <!--bootstrap css link--> 
     <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/all.min.css">
    <!--css file--> 
  <link rel="stylesheet" href="../style/style.css">
 
</head>
<body>
    
<!--navbar--> 
<div class="container-fluid p-0">
    <!--first child--> 
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/ttp.jpg" alt="" class="logo">
            <nav class="navbar navbar-expand-lg ">
                <ul class="navbar nav">
                    <li class="nav-itme">
                        <a href="" class="nav-link">Wellcome guest</a>
                    </li>
                </ul>
</nav>
        </div>
    </nav>
    <!--second child--> 
    <div class="bg-light">
        <h3 class= "text-center p-2">Mange Details</h3>
    </div>

    <!--third child-->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex alight-itmes-center">
            <div class="px-30">
                <a href="#"><img src="../images/ttp.jpg"  
                alt="" class="admin_image"></a>
                <p class="text-light-center">Admin Name</p>
            </div>
<div class="button text-center my-30 mx-30 py-30 px-30">
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="index.php?insert_product" 
        class="nav-link text-light bg-info my-1">Insert Product</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="" 
        class="nav-link text-light bg-info my-1">View Product</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="index.php?insert_category"
     class="nav-link text-light bg-info my-1">Insert categories</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="" class="nav-link text-light bg-info my-1">Veiw Category</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="index.php?insert_brand"
         class="nav-link text-light bg-info my-1">Insert Brands</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="" class="nav-link text-light bg-info my-1">List user</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="" class="nav-link text-light bg-info my-1">View brands</a></button>
    <button class="my-30 mx-30 py-30 px-30 bg-info">
        <a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
</div>
        </div>
    </div>
</div>

<!--fourth child--> 
<div class="container my-3">
    <?php 
    if(isset($_GET['insert_category'])){
    include('insert_categories.php');
}

    if(isset($_GET['insert_brand'])){
    include('insert_brands.php');
    }

     if(isset($_GET['insert_product'])){
    include('insert_product.php');
    }
    ?>
</div>



<!--last child-->
<div class="bg-info p-3 text-center">
    <p> All rights reserved @- Designed by uttam-2025</p>
    </div>
 <!--bootstrap js link--> 
 <script src="../js/bootstrap.bundle.min.js"></script> 
</body>
</html>