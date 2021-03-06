<?php
// Initialize the session
  session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<title>Weinkeller App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url();
  min-height: 75%;

  
}

.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-dark-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-dark-grey">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-dark-grey">SORTEN</a>
    </div>
    <div class="w3-col s3">
      <a href="Winecellar.php" class="w3-button w3-block w3-dark-grey">MEIN WEINKELLER</a>
    </div>
    <div class="w3-col s3">
      <a href="login.php" class="w3-button w3-block w3-dark-grey">MY ACCOUNT</a>
    </div>
  </div>
</div>



<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-dark-grey">ABOUT OUR APP</span></h5>
    <p> We wanted to create an app that allows you to identify and organize wine based on its style, region, climate, color, price, and condition. Our team of experts worked hard to bring an excellent wine app to market and we are very proud of the result!

</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>Please keep in mind that the app will take a few weeks to test on your device, so if you love wine, please test it before you buy. If you don't like the app, don't complain about it.</i></p>
     
    </div>

    
   
  </div>
</div>





<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
   
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
