<?php

if(isset($_GET['id'])){
    include("../config/db_config.php");
    $product_id= $_GET['id'];
    $product_query="DELETE FROM products WHERE id='$product_id'";

    if(mysqli_query($connection, $product_query)){
        
        $massage=" the selected product has delete successfully";
        header("location:../Delete_products.php?msg=$massage");
    }
    else{
         echo "Error" .$products_quary." ".mysqli_error($connection);
        
        }
     
    }
            else{
           
                echo "404 page not found";
            }


?>