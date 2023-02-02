<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image\logo1.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS\product.css">
   
    <title>Health and Drug pharmacy</title>
<style>
     form {
    padding-right: 35px;
  }
  
 input {
    width: 100%;
    border: 0;
    height: 50px;
    border-radius: 25px;
    margin-bottom: 25px;
    padding-left: 25px;
    outline: none;
    color: #101010;
    background: #f1f1f1;
  }
  
  input::-webkit-input-placeholder {
    color: #131313;
  }
  
  input:-ms-input-placeholder {
    color: #131313;
  }
  
   input::-ms-input-placeholder {
    color: #131313;
  }
  
   input::placeholder {
    color: #131313;
  }
  
   input.message-box {
    height: 120px;
    border-radius: 15px;
  }
  
   .btn-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 10px;
  }
  
   button {
    display: inline-block;
    padding: 12px 45px;
    background-color: #1b4965;
    color: #ffffff;
    border-radius: 45px;
    border: 1px solid #1b4965;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    width: 100%;
  }
  
  button:hover {
    background-color: transparent;
    color: #1b4965;
  }
</style>
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
        
</header>
   <div>
    <?php
    if(!empty($_GET)){

       
        if(isset($_GET['message'])){
            echo $_GET['message'];
        }
        if(isset($_GET['error'])){
            echo $_GET['error'];
        }
    }
    ?>
   </div> 
<div>
    <form action="Process\Add.php" method="get">
    <input type="number" name="id" placeholder="id"/>
    <input type="text" name="name" placeholder="Name"/>
    <input type="number" name="price" placeholder="price"/>
    <input type="text" name="discription" placeholder="discription" />
    <input type="number" name="Managerid" placeholder="Managerid" />
    <input type="number" name="Branch_ID" placeholder="Branch_ID" />
            <div class="btn-box">
              <button>
                Add products
              </button>

    </form>
</div>
</body>
</html>