<?php
session_start();
include("config/db_config.php");
// include("Process\get_question.php");
$get_res = "SELECT * FROM question";
$Qustion_res = mysqli_query($connection, $get_res);


?>


<!DOCTYPE html>
<html lang="en">

<!-- head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image\logo1.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="CSS\ST.css">
   
    <title>Health and Drug pharmacy</title>

<style>
    .nav {
    max-width: 996px;
    margin: 0 auto;
    padding: 0 2rem;
    justify-content: space-between;
    color: white;
}
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;

}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #023047;
  color: white;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.footer .row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    padding: 5rem 3rem;
}
.contact_section table {
    padding-right: 35px;
  }

  .contact_section button {

 background-color: #1b4965;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  /* margin: 4px 2px; */
  transition-duration: 0.4s;
  cursor: pointer;
  margin-top: 20px
    
  }
  .contact_section .btn-box button a{
    text-decoration: none;
    color: #ffffff;
  }
  .contact_section .btn-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 10px;
  }
  
  
  .contact_section button:hover {
    background-color: transparent;
    color: #1b4965;
  }
</style>
</head>

<body>
    


    <!-- header -->
    <header class="header" id="header">
        <div class="navigation">
            <nav class="nav d-flex">
                <div class="logo">
                    <a href="index.php">
                        <img src="Image\logo1.png" />
                    </a>
                </div>

            <ul class="nav-list d-flex">
                    <!-- <li class="nav-item"><a href="#index.php" class="nav-link">Home</a></li> -->
                    <li class="nav-item"><a href="#header" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li><a href="BMI.php">BMI</a></li>
                    <li class="nav-item"><a href="#user_Qustion" class="nav-link">Qustions</a></li>
                    <li class="nav-item"><a href="#our" class="nav-link">our pharmicy</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    <li class="nav-item">
                        <?php echo ucfirst($_SESSION['username'])?>
</li>

                    <!-- <li class="nav-item"><a href="#login" class="nav-link">Login</a></li> -->
                </ul>

                <a href="Process\logout.php" class="btn sign-up">logout</a>

                <div class="hamburger">
                    <i class="bx bx-menu-alt-left"></i>
                </div>
            </nav>
        </div>

        <div class="swiper-container slider-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="Image\ph1.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph2.jpg" alt="image" />
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph12.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\pexels-artem-podrez-5893883.mp4" type="video/mp4" />
                        <source src="Image\pexels-artem-podrez-5893883.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph3.jpg" alt="image" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\pexels-gabby-k-5838986.mp4" type="video/mp4" />
                        <source src="Image\pexels-gabby-k-5838986.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph4.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\pexels-maksim-goncharenok-6067806.mp4" type="video/mp4" />
                        <source src="Image\pexels-maksim-goncharenok-6067806.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph11.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\pexels-tima-miroshnichenko-5453775.mp4" type="video/mp4" />
                        <source src="Image\pexels-tima-miroshnichenko-5453775.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph5.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\pexels-alina-blumberg-6925815.mp4" type="video/mp4" />
                        <source src="Image\pexels-alina-blumberg-6925815.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph6.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\production ID_4074432.mp4" type="video/mp4" />
                        <source src="Image\production ID_4074432.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph7.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\pexels-artem-podrez-5893883.mp4" type="video/mp4" />
                        <source src="Image\pexels-artem-podrez-5893883.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph8.jpg" alt="" />
                </div>

                <div class="swiper-slide">
                    <video muted loop autoplay>
                        <source src="Image\pexels-gabby-k-5838986.mp4" type="video/mp4" />
                        <source src="Image\pexels-gabby-k-5838986.webm" type="video/webm" />
                    </video>
                </div>

                <div class="swiper-slide">
                    <img src="Image\ph9.jpg" alt="" />
                </div>

            </div>
        </div>

        <!-- content -->
        <div class="content">
            <h1>
            Health and Drug<br />
                 pharmacy

            </h1>
        </div>

        <!-- <  or >  -->
        <div class="arrows d-flex">
            <div class="swiper-prev d-flex">
                <i class="bx bx-chevron-left swiper-icon"></i>
            </div>
            <div class="swiper-next d-flex">
                <i class="bx bx-chevron-right swiper-icon"></i>
            </div>
        </div>

    </header>



    <!-- main -->
    <main class="main">
        <!-- About us -->
        <section class="section about" id="about">
            <div class="row container">
                <div class="col">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <p>
                    We are a retail pharmacy chain with 5 branches distributed throughout cities in Jordan in Irbid, Amman, Aqaba, Zarqa, Karak and Ma'an 
                    We provide high quality services at competitive prices and we have cosmetic and medical products
                    and the products available to us can be found in each of the branches offered
                    </p>
                </div>
                <div class="col">
                    <div class="swiper-container slider-2">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                            <img src="Image\about.jpg" alt="about us image" />
                            </div>

                            <div class="swiper-slide">
                                <video muted loop autoplay>
                                <source src="Image\pexels-nataliya-vaitkevich-7525922.mp4" type="video/mp4" />
                                    <source src="Image\pexels-nataliya-vaitkevich-7525922.webm" type="video/webm" />
                                </video>
                            </div>

                            <div class="swiper-slide">
                            <img src="Image\ph13.jpg" alt="pharmicy image" />
                            </div>

                            <div class="swiper-slide">
                                <video muted loop autoplay>
                                <source src="Image\pexels-tima-miroshnichenko-5453776.mp4" type="video/mp4" />
                                <source src="Image\pexels-tima-miroshnichenko-5453776.webm" type="video/webm" />
                                </video>
                            </div>

                            <div class="swiper-slide">
                            <img src="Image\ph.jpg" alt="pharmicy image" />
                            </div>

                            <div class="swiper-slide">
                                <video muted loop autoplay>
                                <source src="Image\pexels-tima-miroshnichenko-5453775.mp4" type="video/mp4" />
                                    <source src="Image\pexels-tima-miroshnichenko-5453775.webm" type="video/webm" />
                                </video>
                            </div>

                        </div>

                        <div class="swiper-button-next">
                            <i class="bx bx-chevron-right swiper-icon"></i>
                        </div>

                        <div class="swiper-button-prev">
                            <i class="bx bx-chevron-left swiper-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--  Service Section -->
        <!-- <section class="section service" id="service">
            <div class="row container">
                <div class="col">
                    <div class="title">
                        <h1>ِAsk Qustions?</h1>
                    </div>
                    <p>
                    </p>
                    <div class="d-flex">
                        
                    </div>
                </div>
            </div>
        </section> -->
        <section class="contact_section layout_padding" id="user_Qustion">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              user Qustions
            </h2>
          </div>
          <div class="product">
          <table>
          <tr>
          <th>Phone_Number</th>
          <th>Name</th>
          <th>Ask_Question</th>

          </tr>
        
          <?php
         
          while($data=mysqli_fetch_assoc($Qustion_res)) {
            echo "<tr>";
              echo "<td>" .$data['Phone_Number']."</td>";
              echo "<td>" .$data['Name']."</td>";
              echo "<td>" .$data['Ask_Question']."</td>";
              echo "</tr>"; 
                  }
                
          ?>

            </table>
            </div>
            <div class="btn-box">
              <button><a href="Add_products.php">Add product</a></button>
              <button><a href="Delete_products.php">Delete product</a></button>
            </div>
            </div>
  </section>
            <!--
          
          <form action="Process\process.php" methode="get">
              <input type="text" name="name" placeholder="Name" />
              <input type="text" name="phonenumber"  placeholder="Phone Number" />
              <input type="text" name="massage" class="message-box" placeholder="Message" />
            <div class="btn-box">
              <button>
                SEND
              </button>
          </form>
        </div> -->
   


        <!-- discount Section -->
        <section class="section discount">
            <div class="overlay">
                <video class="video">
                    <source src="Image\pexels-nataliya-vaitkevich-7525922.mp4" type="video/mp4" />
                    <source src="Image\pexels-nataliya-vaitkevich-7525922.webm" type="video/webm" />
                </video>
            </div>
            <div class="content">
                <h1>
                    Discount <br />
                    on the product
                </h1>
                <a href="products.php" class="btn">Explore the product</a>
                <span class="video-control d-flex"><i class="bx bx-play"></i></span>
            </div>
        </section>

        <!-- Trip Section -->
        <section class="section trip" id="our">
            <div class="title">
                <h1>
                Our <br />
                pharmacy
                </h1>
                <p>
                In our pharmacy we have all cosmetics and range of skin and hair care medical and medicines of all kinds
                </p>
            </div>

            <div class="row container">
                <div class="swiper-container slider-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Image\ph20.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph21.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph22.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph23.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph24.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph25.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph26.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph27.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph28.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph29.jpg" alt="image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Image\ph30.jpg" alt="image" />
                        </div>
                        
                    </div>
                </div>
                <div class="custom-next d-flex">
                    <i class="bx bx-chevron-right swiper-icon"></i>
                </div>
                <div class="custom-prev d-flex">
                    <i class="bx bx-chevron-left swiper-icon"></i>
                </div>
                <div class="custom-pagination d-flex"></div>
            </div>
        </section>

        <!-- More Section -->
        <section class="section more">
            <div class="row container">
                <div class="col">
                    <div class="title">
                        <h1>
                    
                    </div>
                    <!-- <div class="tours">
                        <div class="box">
                            <img src="./images/pic-2.jpg" alt="" />
                            <h3>Visit to Bali</h3>
                            <h4>$600</h4>
                        </div>
                        <div class="box">
                            <img src="./images/pic-3.jpg" alt="" />
                            <h3>Visit to Russia</h3>
                            <h4>$700</h4>
                        </div>
                    </div>
                    <a href="#" class="btn">Explore more tours now</a>
                </div>
                <div class="col">
                    <img src="./images/pic-4.jpg" alt="" />
                </div> -->
            </div>
        </section>



        <!-- Contact Section -->
        <section class="section contact" id="contact">
            <div class="title">
                <h1>Contact Us</h1>
                <p>
                    You can contact us
                </p>
            </div>

            <div class="location container">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3387.3188896061233!2d35.87100838502299!3d31.897931981246323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca7e4aee722d5%3A0x8693a9183825010b!2z2YPZhNmK2Kkg2YTZiNmF2YrZhtmI2LMg2KfZhNis2KfZhdi52YrYqSDYp9mE2KrZgtmG2YrYqQ!5e0!3m2!1sar!2sjo!4v1672492642169!5m2!1sar!2sjo"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="row container">
            <div class="col">
                <h3>Company</h3>
                <a href="#">Contact Us</a>
                <a href="#contact">Address</a>
                
            </div>
            <div class="col">
                <h3>Learning Center</h3>

                <a href="#about">About</a>
                <a href="#service">Ask</a>
            </div>
            <div class="col">
                <h3>Partner With Us</h3>

                <a href="https://www.pharmacy-one.com/">pharmacy one</a>
                <a href="https://www.drugcenterjo.net/?q=ar/products">drugcenterjo</a>
                <a href="https://www.medxjordan.com/ar/pharmacy/remedys-pharmacy-health-shop/">remedys pharmacy</a>
    
            </div>
            <div class="col">
                <img src="Image\ph15.jpg" alt="image" />
                <img src="Image\ph16.jpg" alt="image" />
                <img src="Image\ph17.jpg" alt="image" />
                <img src="Image\ph18 (2).jpg "alt="image" />
            </div>
        </div>
        <div class="co">
        <p>Copyright &copy;
            <script>document.write(new Date().getFullYear())</script> Health and Drug pharmacy 
        </p>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <script src="JavaScript\slider.js"></script>
    <script src="JavaScript\index.js"></script>
    <link rel="stylesheet" href="CSS\ST.css">


</body>

</html>