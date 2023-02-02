<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="Image\logo1.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS\login.css">
    <style>

@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);

*:focus {

    outline: none;

}

body {

    margin: 0;
    padding: 0;
    background: #DDD;
    font-size: 16px;
    color: #222;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;

}


#login-box {
    position: relative;
    margin: 5% auto;
    width: 600px;
    height: 400px;
    background: #FFF;
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {

    position: absolute;
    top: 10px;
    left: 20px;
    box-sizing: border-box;
    padding: 40px;
    height: 400px;
}

h1 {
    margin: 70px;
    padding: 12px;
    font-weight: 300;
    font-size: 30px;
    text-align: center;
    margin-top: 50px;

}

/* input[type="text"],
input[type="password"] {
    display: block;
    box-sizing: border-box;
    margin-bottom: 30px;
    padding: 20px;
    width: 220px;
    height: 32px;
    border: none;
    border-bottom: 1px solid #AAA;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
} */

input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 10px;
    margin-left: 3px;
    margin-top: 30px;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;

  }
  

input[type="text"]:focus,
input[type="password"]:focus {
    border-bottom: 2px solid #16a085;
    color: #16a085;
    /* margin: 70%; */
    transition: 0.2s ease;


}

input[type="submit"] {
    /* margin-top: 28px;
    width: 120px;
    height: 32px;
    background: #16a085;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
   
    
    transition: 0.1s ease;
    margin: 60%;
    cursor: pointer; */
    background-color: #1a759f;
    color: white;
    padding: 14px 20px;
    /* margin: 3px; */
    margin-top: 50px;
    border: none;
    cursor: pointer;
    width: 100%;
    font-weight: 500;
    text-transform: uppercase;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
    opacity: 0.8;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;

}

input[type="submit"]:active {

    opacity: 1;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
}



    </style>
</head>
<body>
    <div>
        <?php
        
        if(!empty($_GET['error'])){
            echo $_GET['error'];
        }
        if(isset($_GET['info'])){
            echo $_GET['info'];
        }
        
        ?>
    </div>
    <div id="login-box">
            <h1>Login</h1>
            <div class="left">
            <form action="Process\login_process.php" method="post">

            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="Login_submit" value="Login" />
        </form>
  
</body>

</html>

