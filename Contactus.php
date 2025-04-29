<?php
require_once"queryDb.php";
if(isset($_POST["firstname"]) && $_POST["lastname"] && $_POST["email"] && $_POST["phone"] && $_POST["message"]){
  addContacts($firstname,$lastname,$email,$phone,$message);
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width initial-scale=1.0">
    <meta name="description" content="contact information and location of centre and a form for enquries and suggestions">
    <meta name="keywords" content="contact information,location,a form,enquries,suggestions">
    <title>Contact information of centre</title>
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
    <div id="inline">
      <img class="heart" src="./image/heart.png">
        <h1>Contact us</h1>
    </div>
    <div class="change">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.011523343074!2d153.07765947602917!3d-27.53110111932621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915b122357de61%3A0x6803171c9555a0dc!2s21%20Bakewell%20St%2C%20Mount%20Gravatt%20East%20QLD%204122!5e0!3m2!1sen!2sau!4v1684641417268!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="centreleave">
          <img src="./image/leave.png" width="30em">
        </div>
      <div>
        <h2>Contact info</h2>
          <ul>
            <li>21 Bakewell Rd,Mount Gravatt</li>
            <li>Phone:0434714564</li>
            <li>Email:yu.chen5@griffithuni.edu.au</li>
            <li>Web:little spounts.com.au</li>
          </ul>  
        <form id="contactform" action="Contactus.php" method="post">
          <div class="form2">
            <label for="firstname"><img class="leaveform" src="./image/leave.png" width="25em">Name*</label><hr/>
            <label for="firstname">First Name*</label>
            <input class="inputlong" type="text" id="firstname" name="firstname">
            <label for="lastname">Last Name*</label>
            <input class="inputlong" type="text" id="lastname" name="lastname"><hr/>
            <label for="email"><img class="leaveform" src="./image/leave.png" width="25em">Email Address*</label>
            <input class="inputlong2" type="email" id="email" name="email"><hr/>
            <label for="phone"><img class="leaveform" src="./image/leave.png" width="25em">Phone Number*</label>
            <input class="inputlong2" type="tel" id="phone" name="phone">
            <br>
            <label class="text3" for="message">Enquiries and suggestions*</label>
            <div class="textcenter">
              <textarea id="message" name="message" rows="18" cols="64">Message</textarea>
            </div> 
            <div class="text3">*denotes required<br>
              <input type="submit" onClick="contactForm(event)" value="submit>">
            </div>
          </div>
        </form>
      </div>
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
          <div itemscope itmetype="http://schema.org/Person">
            <p><span itemprop="address">21 Bakewell Road,Mount Gravatt</span><br>
            <span itemprop="telephone">Phone:1234 5678</span><br>
            <span itemprop="email">Email:yu.chen5@griffithuni.edu.au</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>   
</html>      