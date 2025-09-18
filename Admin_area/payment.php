<?php

include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/functions/common_function.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <title>Payment page</title>
       <!--boortstrap CSS link-->
    <link rel="stylesheet" href="../style/bootstrap.min.css">
</head>
<body>
<!--php code to access user id-->
<?php
$user_id=getUSERId();
$get_user="Select * from `user_table` where user_id='$user_id'";
$result=mysqli_query($conn,$get_user);
$run_query=mysqli_fetch_array($result);
$user_id=$run_query['user_id'];

?>


<div class="container">
    <h2 class="text-center text-info">Payment option</h2>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
<a href="https://www.paypal.com" traget="_blank"><img
 src="../images/" alt=""></a>
        </div>
        <div class="col-md-6">
            <a href="order.php?user_id=<?php  echo $user_id   ?>"><h2>Pay offline</h2></a>
        </div> 
        
    </div>
</div>



</body>
</html>

