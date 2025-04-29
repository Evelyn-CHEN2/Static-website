<?php
require_once"queryDb.php";
if(isset($_POST["firstname"]) && ($_POST["lastname"]) && ($_POST["email"]) && ($_POST["phone"])){
  addCustomers($firstnam,$lastname,$email,$phone);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width initial-scale=1.0">
    <meta name="description" content="a form for recruitment">
    <meta name="keywords" content="a form, recruitment">
    <title>Join the Team with filling a recruitment form</title>
    <link href="./style.css" rel="stylesheet">
    <script async defer type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="mhidden">
    <div class="container">
      <img id="lego" src="./image/LEGO.jpg" alt="LEGO" width="150em" height="150em">
      <div class="nav">
        <nav>
          <ul class="mainnav">
            <li><a href="./Home.php" target="_blank">Home</a></li>
            <li><a href="./Ourcenter.php" target="_blank"> Our Centre</a></li>
            <li><a href="./Usefullinks.html" target="_blank"> Useful Links</a></li>
            <li><a href="./Jointheteam.php" target="_blank"> Join the Team</a></li>
            <li><a href="./Photogallery.html" target="_blank"> Photo Gallery</a></li>
            <li><a href="./Contactus.php" target="_blank"> <span id="contact">Contact Us</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="mvisible">
    <div class="container2">
      <span>
        <img id="lego" src="./image/LEGO.jpg" alt="LEGO">
        <img onClick="showElement()" id="navimg" src="./image/nav.png" alt="navbar"> 
      </span>
      <div id="etable" class="thide">
        <div class="nav2">
          <nav>
            <ul class="mainnav2">
              <li class="libottom"><a href="./Home.php" target="_blank">Home</a></li>
              <li class="libottom"><a href="./Ourcenter.php" target="_blank"> Our Centre</a></li>
              <li class="libottom"><a href="./Usefullinks.html" target="_blank"> Useful Links</a></li>
              <li class="libottom"><a href="./Jointheteam.php" target="_blank"> Join the Team</a></li>
              <li class="libottom"><a href="./Photogallery.html" target="_blank"> Photo Gallery</a></li>
              <li class="libottom"><a href="./Contactus.php" target="_blank"> <span id="contact">Contact Us</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <hr/>
  <div id="page">
    <div class="text">
      <div id="inline">
        <img class="heart" src="./image/heart.png">
        <h1>Welcom to join us</h1>
      </div>
    </div>
    <div class="change">
       <div class="img">
          <img src="./image/ourstuffs.jpg" alt="services" width="100%">
        </div>
        <label for="firstname">First Name*</label>
          <input class="inputlong" type="text" id="firstname" name="firstname">
        <div class="form2">
          <label for="name"><img class="leaveform" src="./image/leave.png" width="25em">Name*</label><hr/>
          <label for="firstname">First Name*</label>
          <input class="inputlong" type="text" id="firstname" name="firstname">
          <label for="lastname">Last Name*</label>
          <input class="inputlong" type="text" id="lastname" name="lastname"><hr/>
          <label for="email"><img class="leaveform" src="./image/leave.png" width="25em">Email Address*</label>
          <input class="inputlong2" type="email" id="email" name="email"><hr/>
          <label for="phone"><img class="leaveform" src="./image/leave.png" width="25em">Phone Number*</label>
          <input class="inputlong2" type="tel" id="phone" name="phone">
        </div>
        <br>
        <label class="text3">Qualifications and Experiences*</label>
        <div class="textcenter">
          <textarea id="qualifications and experiences" name="qualifications and experiences" rows="18" cols="64">Message</textarea>
        </div> 
        <div class="text3">*denotes required<br>
          <input type="submit" onClick="contactForm(event)" value="submit>">
        </div>
      </form>
    </div>
  </div>
  <footer>
    <div id="con"> 
      <div class="footerchange">
        <div class="item1">
          <p>©2023-YU CHEN</p>
        </div>
        <div class="item2">
          <h3>CONTACT INFO</h3>
          <div itemscope itemtype="http://schema.org/Person">
            <p><span itemprop="address">21 Bakewell Road,Mount Gravatt</span><br>
            <span itemprop="telephone">Phone:1234 5678</div><br>
            <sppan itemprop="email">Email:yu.chen5@griffithuni.edu.au</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>   
</html>      