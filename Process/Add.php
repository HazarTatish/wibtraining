<?php
session_start();
include("../config/db_config.php");
if(isset($_GET)){

    $error="";
    if(empty($_GET['id']) || empty($_GET['name']) || empty($_GET['price']) || empty($_GET['discription']) || empty($_GET['Managerid']) || empty($_GET['Branch_ID'])){

        $error.="Enter product data";
    }
    if($error != ""){
        header("location:../Add_products.php?error=$error");
    }
    else{
        $user_id= $_SESSION['user_id'];
        $id=$_GET['id'];
        $name=$_GET['name'];
        $price=$_GET['price'];
        $discription=$_GET['discription'];
        $Managerid=$_GET['Managerid'];
        $Branch_ID=$_GET['Branch_ID'];

        // get id
        $manager_query="SELECT * FROM manager WHERE id='$user_id'";
        $manager_res=mysqli_query($connection, $manager_query);
        $manager_data= mysqli_fetch_assoc($manager_res);
        $manager_id= $manager_data['id'];

        //add products

        $products_quary= "INSERT INTO products (id, name, price, discription, Managerid, Branch_ID) VALUES ('$id', '$name', '$price', '$discription', '$Managerid', '$Branch_ID')";

        if(mysqli_query($connection, $products_quary)){
            $message="the product Add successfully";
            header("location:../Add_products.php?message=$message");
        }
        else{
            echo "Error" .$products_quary." ".mysqli_error($connection);
        }
}
}

?>