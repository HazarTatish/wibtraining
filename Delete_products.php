<?php
include("config/db_config.php");
$get_branch = "SELECT * FROM products";
$products_res = mysqli_query($connection, $get_branch);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image\logo1.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS\product.css">
   
    <title>Health and Drug pharmacy</title>

</head>
<bodyclass="sub_page">

<header class="header" id="header">
        <div class="navigation">
            <nav class="nav d-flex">
                <div class="logo">
                    <a href="index.php">
                        <img src="Image\logo1.png" />
                    </a>
                </div>

            <ul class="nav-list d-flex">

                    <li><a href="manager_home.php">Home</a></li>
                    <li><a href="manager_home.php">About</a></li>
                    <li><a href="BMI.php">BMI</a></li>
                    <li><a href="manager_home.php">Service</a></li>
                    <li><a href="manager_home.php">Products</a></li>
                    <li><a href="manager_home.php">Contact</a></li>
                </ul>

                <!-- <a href="signup.html" class="btn sign-up">Sign Up</a> -->
                <!-- <a href="login.php" class="btn sign-up">login</a> -->

            </nav>
        </div>
        <div>
        <?php
    if(!empty($_GET)){

       
        if(isset($_GET['massage'])){
            echo $_GET['massage'];
        }

    }
    ?>
    </div>
        
</header>

<div class="product">

<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>discription</th>
    <th>Branch_ID</th>
    <th>Delete?</th>
    </tr>

<?php
echo "<tr>";
while($data=mysqli_fetch_assoc($products_res)) {
  
    $product_id=$data['id'];
    echo "<td>" .$data['id']."</td>";
    echo "<td>" .$data['name']."</td>";
    echo "<td>" .$data['price']."</td>";
    echo "<td>" .$data['discription']."</td>";
    echo "<td>" .$data['Branch_ID']."</td>";
    echo "<td>" ."<a href='Process\delete.php?id=$product_id'><i class='fa fa-trash' style='color:black;'></i></a>"."</td>";

            echo "</tr>";
        }




?>
</table>
</div>
</body>
</html>