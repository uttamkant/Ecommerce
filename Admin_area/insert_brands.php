<?php
include('./includes/connect.php');
if(isset($_POST['insert_brands'])){
    $brand_title=$_POST['brand_title'];


    //select data from database
    $select_query="Select * from `brands` where   brand_title='$brands_title'";
    $result_select=mysqli_query($conn,$insert_query);
    $number=mysqli_num_row($result_select);
    if(number>0){
         echo "<script>alert('Category has been inserted successfully')</script>";
    }else{
    
    $insert_query="insert into `brands` (brands_title ) values ('$brands_title')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
        echo "<script>alert('Brands is present inside the database')</script>";
    }
    }}
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid 
        fa-receipt"></i></span>
        <input type="text" class="form-control"  name="brand_title" placeholder="Insert Brands"
        aria-lable="brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
       
        <input type="submit" class="bg-info border-0 p-2 my-3"  name="insert_brands" value="Insert Brands"
        aria-lable="Username" aria-describedby="basic-addon1">
       
    </div>
</form>