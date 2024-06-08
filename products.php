<?php

include("connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {


   $name = $_POST['name'];
   $description = $_POST['description'];
   $price = $_POST['price'];

   $filename = $_FILES["product_image"]["name"];
   $tempname = $_FILES["product_image"]["tmp_name"];
   $folder = "./uploads/" . $filename;
 
   if($name==""||$description==""||$price=="") {
      echo "<script>

      Swal.fire({
         icon: 'warning',
         title: 'Oops...',
         text: 'Please fill all the fields!',
       })
      
      </script>";
      die;
   }       
      else { 
      $query = "insert into products (product_name,product_description,product_price, product_image) values ('$name','$description','$price', '$filename')";
      $is_success=mysqli_query($con, $query);

      if ($is_success) {
         move_uploaded_file($tempname, $folder);
         echo "<script>

      Swal.fire({
         icon: 'success',
         title: 'thank You!!',
         text: 'Your product has been added',
       })
             
         </script>";
      }
      
      }
      
            

     
}