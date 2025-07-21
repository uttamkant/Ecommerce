<!--connect file--> 
<?php
session_start();

// Set session variables
$_SESSION['username'] = 'JohnDoe';
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/functions/common_function.php");
 
if(isset($_POST['user_login'])){
      echo "<script>alert('replace code with section')</script>";
     $user_username=$_POST['user_username'];
     $user_password=$_POST['user_password'];
      echo "<script>alert('replace code with section')</script>";
     // checking empty condition
     if($user_username=='' or   $user_password==''){
         echo "<script>alert('Please fill all the available fields')</script>";
        exit();
     }else{
         $user_query="Select * from `user_table` where username='$user_username'";
    $result_query=mysqli_query($conn,$user_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>This useris not  available for servies</h2>";
    }else{
        $row=mysqli_fetch_assoc($result_query);
        $user_password_data=$row['user_password'];
        if(password_verify ($user_password,$user_password_data)){
            echo "<script>alert('login successfull')</script>";
            // Set session variables
            $_SESSION['username'] = $user_username;
            $_SESSION['userid'] = $row['user_id'];
             echo "<script>alert('login successfull')</script>";
             echo "<script>alert($user_username)</script>";
             header("Location: http://localhost/Ecommerce/index.php");
exit(); // Make sure to call exit after the redirect
        }else{
             echo "<script>alert('your password is not matching')</script>";
        exit();
        }
    
    }
    
     }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Login</title>
     <!--boortstrap CSS link-->
    <link rel="stylesheet" href="./../style/bootstrap.min.css">
    <!--<link rel="stylesheet" href="style/all.min.css">-->
</head>

    
    <body>
        <div class="container-fluid my-3">
            <h2 class="text-center">New User login</h2>
            <div class="row d-flex  align-items-center justify-content-center">
                <div class="lg-12 col-xl-6">
                    <form action="" method="POST">
                        <div class="form-outline mb-4">
                            <!--username field-->
                            <label for="user_username" class="form-lable">Username</label>
                            <input type="text" id="user_username" class="form-control"
                            placeholder="Enter your username" autocomplete="off" 
                            required="required" name="user_username"/>

                        </div>
                       
                        
                         <div class="form-outline">
                            <!--password field-->
                            <label for="user_password" class="form-lable">Password </label>
                            <input type="password" id="user_password" class="form-control"
                            placeholder="Enter your password " autocomplete="off" 
                            required="required" name="user_password"/>

                        </div>
                         
                        
                         
                        <div class="mt-4 pt-2">
                            <input type="submit" 
                            value="login" class="bg-info py-2 px-3 border-0"
                             name="user_login">
                             <p class="small fw-bold mt-2 pt-1 mb-0">Dont't have an account ?
                                <a href="user_registration.php" class="text-danger">Register</a>
                             </p>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
    