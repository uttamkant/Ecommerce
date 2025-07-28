<?php
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/includes/connect.php");
include($_SERVER["DOCUMENT_ROOT"]."/Ecommerce/Admin_area/functions/common_function.php");

if (isset($_POST['insert_brands'])) {
    if (isset($_POST['brand_title']) && !empty($_POST['brand_title'])) {
        $brands_title = htmlspecialchars($_POST['brand_title']);
        
        // Check if the database connection is established
        if ($conn) {
            // Prepare statement to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM brands WHERE brand_title = ?");
            $stmt->bind_param("s", $brands_title);
            $stmt->execute();
            $result_select = $stmt->get_result();
            $number = $result_select->num_rows;

            if ($number > 0) {
                echo "<script>alert('Brand already exists!')</script>";
            } else {
                // Prepare insert statement
                $insert_stmt = $conn->prepare("INSERT INTO brands (brand_title) VALUES (?)");
                $insert_stmt->bind_param("s", $brands_title);
                if ($insert_stmt->execute()) {
                    echo "<script>alert('Brand inserted successfully!')</script>";
                } else {
                    echo "<script>alert('Error inserting brand')</script>";
                }
                $insert_stmt->close();
            }
            $stmt->close();
        } else {
            echo "<script>alert('Database connection failed!')</script>";
        }
    } else {
        echo "<script>alert('Please enter a brands name')</script>";
    }
}
        <h2 class="text-center">Insert Brands</h2>
        <form action="" method="post" class="mb-2">
                <div class="input-group w-90 mb-2">
                 <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid 
                    fa-receipt"></i></span>
                <input type="text" class="form-control"  name="brand_title" placeholder="Insert Brands"
                aria-lable="brands" aria-describedby="basic-addon1">
                </div>
                <div class="input-group w-10 mb-2 m-auto">
       
        <input type="submit" class="bg-info border-0 p-2 my-3"  name="insert_brands" 
        value="Insert Brands"
        aria-lable="Username" aria-describedby="basic-addon1">
       
    </div>
</form>