<?php
include('./includes/connect.php');
if(isset($_Post['insert_product'])){

     $product_title=$_POST['product_title'];
      $product_title=$_POST['product_description'];
       $product_keywords=$_POST['product_keywords'];
        $product_categories=$_POST['product_categories'];
         $product_Brands=$_POST['product_Brands'];
          $product_Price=$_POST['product_Price'];

// accessing image
      $product_image1=$_POST['product_image1'];
      $product_image2=$_POST['product_image2'];
      $product_image3=$_POST['product_image3'];
          

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product-Admin Dashborad</title>
     <!--boortstrap CSS link-->
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <!--<link rel="stylesheet" href="style/all.min.css">-->
 
    <!--font awesome link-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
  font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="../style/style.css">
<!--CSS file--> 
<link rel="stylesheet"  href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" 
                id="product_title" class="form-control" 
                placeholder="Enter product title" autocomplete="off"
                required="required">
            </div>
            <!--description-->  
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" 
                id="description" class="form-control" 
                placeholder="Enter product description" autocomplete="off"
                required="required">
            </div>
            <!--keywords-->  
            <div class="form-outline mb-4 w-50 m-auto">
                <label for=" Product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="keywords" 
                id="description" class="form-control" 
                placeholder="Enter product keywords" autocomplete="off"
                required="required">
            </div>
            <!--categories--> 
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id=""  class="form-select">
                <option value="">Select a Category</option>
                 <?php
                 $select_query="select * from `categories`";
                 $result_query=mysqli_query($conn,$select_query);
                 while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                 }
?>
                
                    
               </select>
            </div>

        <!--Brands--> 
            <div class="form-outline mb-4 w-50 m-auto">
               
               <select name="product_categories" id=""  class="form-select">
                <option value="">Select a Brands</option>
                <?php
                 $select_query="select * from `brands`";
                 $result_query=mysqli_query($conn,$select_query);
                 while($row=mysqli_fetch_assoc($result_query)){
                    $brands_title=$row['brands_title'];
                    $brands_id=$row['brands_id'];
                    echo "<option value='$brands_id'>$brands_title</option>";
                 }
?>
            
                 <option value=""> Brand 1</option>
                  <option value="">Brand 2</option>
                   <option value="">Brand 3</option>
                    <option value="">Brand 4</option>
                    
               </select>
            </div>
             <!--Image 1-->  
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" 
                id="product_image1" class="form-control" 
             required="required">
            </div>


              <!--Image 2-->  
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" 
                id="product_image2" class="form-control" 
             required="required">
            </div>


              <!--Image 3-->  
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" 
                id="product_image3" class="form-control" 
             required="required">
            </div>


             <!--Price-->  
            <div class="form-outline mb-4 w-50 m-auto">
                <label for=" Product_Price" class="form-label">Product price</label>
                <input type="text" name="Product_Price" 
                id="Product_Price" class="form-control" 
                placeholder="Enter product price" autocomplete="off"
                required="required">
            </div>

            <!--Price-->  
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info" value="Insert Products">
            </div>
        </form>
    </div>
</body>
</html>