<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\BMI.css">
    <link rel="shortcut icon" href="Image\logo1.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css">
    <title>BMI Calculator</title>
    <link rel="short icon" href="Image\logo1.png">

</head>

<body>

    <div class="container">
        <div class="box">
          <h1>BMI Calculator</h1>
          <div class="content">


            <div class="input">
                <label for="height">Age</label>
                <input type="text" class="text-input" id="age" autocomplete="off" required/>
            </div>

            <div class="gender">

                <label class="container">
                    <input type="radio" name="radio" id="m"><p class="text">Male</p>
                    <span class="checkmark"></span>
                  </label>


                <label class="container">
                    <input type="radio" name="radio" id="f" ><p class="text">Female</p>
                      <span class="checkmark"></span>
                    </label>

            </div>

            <div class="containerHW">
            <div class="inputH">
              <label for="height">Height(cm)</label>
              <input type="number" id="height" required>
            </div>

            <div class="inputW">
              <label for="weight">Weight(kg)</label>
              <input type="number" id="weight" required>
            </div>
          </div>

            <button class="calculate" id="submit" onclick="calculate();">Calculate BMI</button>
          </div>
          <div class="result">
            <p>Your BMI is</p>
            <div id="result">00.00</div>
            <p class="comment"></p>
          </div>
        
      

        </div>
      </div>
   
<script src="JavaScript\BMI.js"></script>

</body>
</html>