<?php
require_once"queryDb.php";
if(isset($_POST["parentname"]) && ($_POST["email"]) && ($_POST["homeaddress"]) && ($_POST["childname"]) && ($_POST["birthdate"]) && ($_POST["message"])){
  addCustomers($parentname,$phone,$email,$homeaddress,$childname,$birthdate,$message);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width initial-scale=1.0">
    <meta name="description" content="introduction of centre, contact information, opening hours and a form to book a tour">
    <meta name="keywords" content="introduction,contact information, opening hours, a form, book a tour">
    <title>Our Centre</title>
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
      <h1>Our Center</h1>
    </div>
    <p class="pclose">Our Centre is a family owned and operated Centre.<br>We work alongside families, local schools and our local community <br>to ensure that children are well prepared for their first year of formal schooling <br>and their continued learning journey.</p>
  </div>
  <div class="change">
    <img id="imgvisible" src="./image/center.png" alt="centre" width=100%>
    <div class="centreleave">
      <img src="./image/leave.png" width="30em">
    </div>
    <div class="info">
      <div class="bottomline">
        <div class="inlineleft">
          <img class="heartm" src="./image/heart.png">
          <h2>Contact info</h2>
        </div>
        <ul>
          <li>21 Bakewell Rd,Mount Gravatt</li>
          <li>Phone:0434714564</li>
          <li>Email:yu.chen5@griffithuni.edu.au</li>
          <li>Web:little spounts.com.au</li>
        </ul>
      </div>
      <div class="topline">
        <div class="inlineleft">
          <img class="heartm" src="./image/heart.png">
          <h2>Opening hours</h2>
        </div>
        <div class="pindent">
          <p class="pclose">Our opening hours is from 6:00am to 6:00pm,<br>Monday to Friday (excluding public holidays) 52 weeks per year.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="mhidden">
    <div class="change">
      <div>
        <div class="hometext">
          <div id="inline4">
            <img class="heart2" src="./image/heart.png"> 
            <h2 class="pclose">BOOK A TOUR</h2>
          </div>
        </div>
        <form id="bookatour" action="Ourcenter.php" method="post">
          <div class="form2">
            <div class="forminline">
              <span><label for="parentname">Parent's Name*</label>
              <input class="inputshort" type="text" name="parentname" id="parentname"/></span>
              <span><label for="phone">Phone Number*</label>
              <input class="inputshort" type="text" name="phone" id="phone"/></span>
            </div><hr/>
            <label for="email">Email*</label>
            <input class="inputshort" type="email" name="email" id="email"/>
            <label for="homeaddress">Home Address*</label>
            <input class="inputlong2" type="address" name="homeaddress" id="homeaddress"/><hr/>
            <div class="forminline">
              <span><label for="childname">Child's Name*</label>
              <input class="inputshort" type="text" name="childname" id="childname"/></span>
              <span><label for="birthdate">Date of Birth*</label>
              <input type="date" name="birthdate" id="birthdate"/></span>
            </div>
          </div>
          <br>
          <label class="text3" for="message">Any enquiries:</label> 
          <div class="textcenter">
            <textarea name="message" id="message" rows="17" cols="65">Message</textarea>
          </div>
          <div class="text3">*denotes required<br>
            <input type="submit" onClick="validateForm(event)" value="submit>"/>
          </div>
        </form>
      </div>
      <div class="info">
        <img class="mhidden2" src="./image/center2.png" alt="centre" width="100%">
      </div>
    </div>
  </div>  
  <div class="mvisibleleft">
    <div class="inlineleft">
      <img class="heartm" src="./image/heart.png">
      <h2>BOOK A TOUR</h2>
    </div>
    <form id="bookatour" action="Ourcenter.php" method="post">
      <label for="name">Parent's Name*</label>
      <input type="text" name="name" id="name"/><br>
      <label for="telephone">Phone Number*</label>
      <input type="text" name="telephone" id="telephone"/><br>
      <label for="email">Email Address*</label>
      <input type="email" name="email" id="email"/><br>
      <label for="address">Home Address*</label>
      <input type="text" name="address" id="address"/><br>
      <label for="name">Child's Name*</label>
      <input type="text" name="name" id="name"/><br>
      <label for="birthdate">Date of Birth*</label>
      <input type="date" name="birthdate" id="birthdate"/><br>
      <label class="text3">Any enquiries:</label> 
      <textarea name="message" id="message" rows="10" cols="40">Message</textarea>
      <br>
      <div class="denote">*denotes required</div>
      <input type="submit" onClick="validateForm(event)" value="submit>"/>
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