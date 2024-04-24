<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel ="icon" type= "favicon/x-icon" href= "favicon.ico">
     <!--Include the GSAP library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <!--Include the second.js script -->
    <script src="homepage.js"></script>
</head>

<body>
    <div id="before"></div>
    <div id="after"></div>
     <div class="topnav">
    <div class="logo">
      <img src="GYMNITY_LOGO.png" alt="GYMNITY_LOGO" />
    </div>
    <div class="button-container">
      <?php if ($loggedIn): ?>
          <button onclick="location.href='home-login.html'">LOGOUT</button>
      <?php endif; ?>
    </div>
    <a href="https://usaidzainal.000webhostapp.com/Project/Gym%20Training/gymmain.html"> Gym Training</a>
    <a href="https://usaidzainal.000webhostapp.com/Project/Workout/workout%20m%20and%20f%20page.html"> Workout</a>
    <a href="https://usaidzainal.000webhostapp.com/Project/Diet/diet.html"> Diet</a>
    <a href="https://usaidzainal.000webhostapp.com/Project/Zumba%20&%20Yoga/zumbaNyoga.html"> Zumba & Yoga</a>
    <a href="https://usaidzainal.000webhostapp.com/Project/Personal%20Coach/coachMainPge.html"> Personal Coach</a>
  </div>
  
  <div class="container"> 
      <table>
        <tr>
          <td width="70%">
            <?php if ($loggedIn): ?>
                <p style="font-size:4vw; color:white; padding-left:20px; padding-bottom:20px;">Hello, <?php echo $_SESSION['username']; ?></p>
            <?php endif; ?>
            <p style= "color:white; font-size:64px; font-family: Verdana; padding-left: 20px;">FIT FOR LIFE <span style="color: #e36414;"> <br> YOUR ULTIMATE <br> FITNESS <br> COMPANION</span></p>
          </td>
          <td width="30%">
            <!--<div class="bmi-calculator">-->
            <!--  <h2>BMI Calculator</h2>-->
            <!--  <form onsubmit="return calculateBMI()">-->
            <!--    <div class="form-group">-->
            <!--      <label for="weight">Weight (kg):</label>-->
            <!--      <input type="number" id="weight" name="weight" required>-->
            <!--    </div>-->
            <!--    <div class="form-group">-->
            <!--      <label for="height">Height (cm):</label>-->
            <!--      <input type="number" id="height" name="height" required>-->
            <!--    </div>-->
            <!--    <button class="button-1" type="submit">Calculate BMI</button>-->
            <!--  </form>-->
            <!--  <div id="result"></div>-->
            <!--</div>-->
            <div class="boxBmi">
              <h2 style="color: #333; font-size:2vw;">Calculating Body Mass Index (BMI):</h2>
              <div class="input-container">
                <label style="color:#333; font-size:25px;" for="weight">Weight (in KG):</label>
                <input type="number" id="weight" placeholder="Weight (kg)" />
              </div>
              <div class="input-container">
                <label style="color:#333; font-size:25px; margin-bottom:5px;" for="height">Height (in Metres):</label>
                <input type="number" id="height" placeholder="Height (m)" />
              </div>
        
              <button onclick="calculateBMI()">Get BMI</button>
              <div id="result">Results:</div>
            </div>

          </td>
        </tr>
      </table>            
      
      <br><br>
      <h2 style="text-align:center;">ABOUT US<h2>
      <hr width="600px">
      <p style="font-size:20px; text-align:center; ">GYMNITY stands as a beacon of wellness, embracing the power of a holistic approach to fitness. to fitness.
      At GYMNITY, <br>we believe in the power of a holistic approach to fitness, combining effective workouts, personalised gym training, <br>exhilarating Zumba and yoga sessions, and a mindful focus on nutrition. 
      We are not just a fitness platform <br>but your partner in achieving a healthier and happier lifestyle. </p>
      
      <br>
      <table style="border:0; border-collapse: collapse; width: 55%;margin-left:500px;margin-right: 500px;">
        <tr>
          <td width="30%">
              <p style="font-size:30px;">
              <strong>CONTACT US</strong>
              </p>
          </td>
          <td width="70%">
              <p style="font-size:27px;">
                Tel. (+60) 18-6688332 <br>
                Email: fitforlife@gymnity.com
              </p>
          </td>
      </tr>
      </table>

      <p style="font-size:20px; text-align:center; ">Copyright &copy; 2024 GYMNITY SDN.BHD. (229451052780 / 528819-A). All rights reserved.</p>
    </div>
      <?php if ($loggedIn): ?>
          <div class="tracking">
            <a href="tracking.html"><img src="trackingicon.png" alt="Click here to Tracking Page"></a>
          </div>
      <?php endif; ?>
</body>
</html>
