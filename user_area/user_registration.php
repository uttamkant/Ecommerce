<!--connect file--> 
<?php
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/functions/common_function.php");

if(isset($_POST['user_register'])){
     $user_username=$_POST['user_username'];
     $user_email=$_POST['user_email'];

   
    $user_image=$_FILES['user_image']['name'];
    $tmp_image=$_FILES['user_image']['tmp_name'];
   // move_uploaded_file($tmp_image,"./user_images/$user_image");
     $user_password=$_POST['user_password'];
     $conf_user_password=$_POST['conf_user_password'];
     $user_address=$_POST['user_address'];
     $user_contact=$_POST['user_contact'];
     
     // checking empty condition
    if(   $user_username=='' or    $user_email=='' or   
        $user_image=='' or   $user_password=='' or  $conf_user_password==''
        or $user_address==''or   $user_contact==''){
         echo "<script>alert('Please fill all the available fields')</script>";
        exit();
        }else{
          
            if($user_password===$conf_user_password)
            {
                move_uploaded_file($tmp_image,"./user_images/$user_image");
                 $hashed_user_password=password_hash($user_password,PASSWORD_BCRYPT);   
                $insert_user="insert into `user_table` (username,user_email,user_password,
       user_image,  user_ip,user_address,user_mobile) values('$user_username','$user_email','$hashed_user_password','$user_image',
       'NULL',
            '$user_address','$user_contact')";
            $result_query=mysqli_query($conn,$insert_user);
            if($result_query){
                echo "<script>alert('Successfully register the user')</script>";
            }else{
                echo "<script>alert('user have been not register')</script>";
        exit();
            }

            }else{
                   echo "<script>alert('your password is not matching')</script>";
        exit();
            }

        }
     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User -registration</title>
</head>

     <!--boortstrap CSS link-->
    <link rel="stylesheet" href="./../style/bootstrap.min.css">
    <!--<link rel="stylesheet" href="style/all.min.css">-->
    <body>
        <div class="container-fluid my-3">
            <h2 class="text-center">New User Registration</h2>
            <div class="row d-flex  align-items-center justify-content-center">
                <div class="lg-12 col-xl-6">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-outline mb-4">
                            <!--username field-->
                            <label for="user_username" class="form-lable">Username</lablel>
                            <input type="text" id="user_username" class="form-control"
                            placeholder="Enter your username" autocomplete="off" 
                            required="required" name="user_username"/>

                        </div>
                        <div class="form-outline">
                            <!--email field-->
                            <label for="user_email" class="form-lable">Email</lablel>
                            <input type="email" id="user_email" class="form-control"
                            placeholder="Enter your email" autocomplete="off" 
                            required="required" name="user_email"/>

                        </div>
                        <div class="form-outline">
                            <!--image field-->
                            <label for="user_image" class="form-lable">User Image</lablel>
                            <input type="file" id="user_image" class="form-control"
                             required="required" name="user_image"/>

                        </div>
                         <div class="form-outline">
                            <!--password field-->
                            <label for="user_password" class="form-lable">Password </lablel>
                            <input type="password" id="user_password" class="form-control"
                            placeholder="Enter your password " autocomplete="off" 
                            required="required" name="user_password"/>

                        </div>
                         <div class="form-outline">
                            <!-- confirm password field-->
                            <label for="conf_user_password" class="form-lable"> Confirm Password </lablel>
                            <input type="password" id="user_password" class="form-control"
                            placeholder="Confirm password " autocomplete="off" 
                            required="required" name="conf_user_password"/>

                        </div>
                        <div class="form-outline mb-4">
                            <!--Address field-->
                            <label for="user_address" class="form-lable">Address</lablel>
                            <input type="text" id="user_address" class="form-control"
                            placeholder="Enter your address" autocomplete="off" 
                            required="required" name="user_address"/>

                        </div>
                         <div class="form-outline mb-4">
                            <!--Contact field-->
                            <label for="user_contact" class="form-lable">Contact</lablel>
                            <input type="text" id="user_contact" class="form-control"
                            placeholder="Enter your mobile number" autocomplete="off" 
                            required="required" name="user_contact"/>
                        </div>
                        <div class="mt-4 pt-2">
                            <input type="submit" 
                            value="Register" class="bg-info py-2 px-3 border-0" 
                            name="user_register">
                             <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ?
                                <a href="user_login.php" class="text-danger">Login</a>
                             </p>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
    