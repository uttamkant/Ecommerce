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
            <h2 class="text-center">New Uer Registration</h2>
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
                            <!--password field-->
                            <label for="user_password" class="form-lable">Password </lablel>
                            <input type="password" id="user_password" class="form-control"
                            placeholder="Enter your password " autocomplete="off" 
                            required="required" name="user_password"/>

                        </div>
                         
                        
                         
                        <div class="mt-4 pt-2">
                            <input type="submit" 
                            value="Register" class="bg-info py-2 px-3 border-0"
                             nane="user_register">
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
    