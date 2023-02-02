

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image\logo1.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS\product.css">
    <title>Products</title>

<style>
    input[type="submit"] {
    margin-bottom: 20px;
    width: 50%;
    height: 20px;
    background-color: #001427;
    color:white;
  }
</style>

</head>

<body class="sub_page">

<header class="header" id="header">
        <div class="navigation">
            <nav class="nav d-flex">
                <div class="logo">
                    <a href="index.php">
                        <img src="Image\logo1.png" />
                    </a>
                </div>

            <ul class="nav-list d-flex">
                    <!-- <li class="nav-item"><a href="#index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li> -->
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="BMI.php">BMI</a></li>
                    <li><a href="index.php">Service</a></li>
                    <li><a href="index.php">Products</a></li>
                    <li><a href="index.php">Contact</a></li>
                    <!-- <li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
                    <li class="nav-item"><a href="#trips" class="nav-link">Trips</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li> -->
                    <!-- <li class="nav-item"><a href="#login" class="nav-link">Login</a></li> -->
                </ul>

                <!-- <a href="signup.html" class="btn sign-up">Sign Up</a> -->
                <a href="login.php" class="btn sign-up">login</a>

            </nav>
        </div>
        
</header>


<div class="error">

 </div>
<!-- <div class="botn">
<button>Amman</button>
<button>Irbid</button>
<button>Aqaba</button>
<button>Zarqa</button>
<button>Al Karak</button>
<button>Ma'an</button>
</div>  -->
<!-- <form action="" method="post">
<div class="bot">
<button class="button button1" value="Amman">Amman</button>
<button class="button button2">Irbid</button>
<button class="button button3">Aqaba</button>
<button class="button button4">Zarqa</button>
<button class="button button5">Al Karak</button>
<button class="button button6">Ma'an</button>

</div>
</form> -->

<div class="container">
   
<form action="show_products.php" method="post" id="select_id">
    <select name="products_Branch">
        <option value="8898">Amman</option>
        <option value="2001">Irbid</option>
        <option value="9999">Aqaba</option>
        <option value="7787">Zarqa</option>
        <option value="3002">Al Karak</option>
        <option value="6365">Ma'an</option>
    </select>
    <input type="submit" name="submit" vlaue="Choose options">
</form>



</table>
</div>


</body>

</html>