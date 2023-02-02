<?php
include("../config/db_config.php");
// include("..\products.php");
// $get_branche = $_POST['Branch_ID'];
// $get_branch="SELECT * FROM products";


$Branchs=$_POST['products_Branch'];
$get_branch = "SELECT * FROM products WHERE Branch_ID = '$Branchs'";
$products_res = mysqli_query($connection, $get_branch);
//  if (mysqli_query($connection, $get_branch)) {
     while ($data = mysqli_fetch_assoc($products_res)) {
        echo "<td>" .$data['id']."</td>";
        echo "<td>" .$data['name']."</td>";
        echo "<td>" .$data['price']."</td>";
        echo "<td>" .$data['discription']."</td>";
        echo "<td>" .$data['Branch_ID']."</td>";
    
                echo "</tr>";
        }
            ?>




