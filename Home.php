<?php
require_once"queryDb.php";
if(isset($_POST["parentname"]) && ($_POST["phone"]) && isset($_POST["email"]) && ($_POST["childname"]) && ($_POST["birthdate"]) && ($_POST["message"])){
  addCustomers($parentname,$phone,$email,$homeaddress,$childname,$birthdate,$message);
} 
if(isset($_GET["eventname"])){
  $events=$_GET["eventname"];
}else{
  $events=getEvents();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width initial-scale=1.0">
    <meta name="description" content="introduction of the centre including services, programs, services and stuffs, and a form to book a tour">
    <meta name="keywords" content="story, age groups, fees, facilities, food provided, programs, activities, stuffs, qualifications, a form, book a tour">
    <title>Home</title>
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
        <img onClick="showNavbar()" id="navimg" src="./image/nav.png" alt="navbar"> 
      </span>
      <div id="navbar" class="thide">
        <div class="nav2">
          <nav>
            <ul class="mainnav2">
              <li class="libottom"><a href="./Home.php" target="_blank">Home</a></li>
              <li class="libottom"><a href="./Ourcenter.php" target="_blank"> Our Centre</a></li>
              <li class="libottom"><a href="./Usefullinks.html" target="_blank"> Useful Links</a></li>
              <li class="libottom"><a href="./Jointheteam.php" target="_blank"> Join the Team</a></li>
              <li class="libottom"><a href="./Photogallery.html" target="_blank"> Photo Gallery</a></li>
              <li class="libottom"><a href="./Contactus.php" target="_blank"><span id="contact">Contact Us</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <img src="./image/welcome1.jpeg" alt="welcome picture" width="100%">
<div id="page">
  <div id="search">
    <div id="tmobile">
      <label for="eventname">Event Name:</label>
      <input type="text" id="eventname" name="eventname">
      <input type="submit" onClick="showElement()" value="search">
    </div>
  </div>
  <div id="etable" class="thide">
    <table>
      <thead>
        <tr>
          <th rows="2">EVENT NAME</th>
          <th rows="2">DESCRIPTION</th>
          <th rows="2">LOCATION</th>
          <th rows="2">DATE</th>
        </tr> 
      </thead>
      <tbody>
        <?php
          foreach($events as $event){
            echo"<tr>";
            echo"<td>".$event['EVENTNAME']."</td>";
            echo"<td>".$event['DESCRIPTION']."</td>";
            echo"<td>".$event['LOCATION']."</td>";
            echo"<td>".$event['DATE']."</td>";
            echo"</tr>";
          } 
        ?>
      </tbody>
    </table>
  </div>
  <div class="text">
    <div id="inline">
      <img class="heart" src="./image/heart.png">
      <h1>Our story</h1>
    </div>
    <div>Our Centre is a family owned and operated Centre. <br>As a family owned Centre, we understand the importance of a nurturing environment and the provision of quality care in an Early Childhood setting. <br>We are committed to ensuring the delivery of the best possible experience to all Parents and Children at Little Sprouts.<br>We employ highly qualified, experienced and dedicated staff who share our vision of working in partnership with families.</div>
  </div>
  <div class="change">
    <img id="imgvisible" src="./image/services.jpeg" alt="services" width="100%">
      <div class="hometext">
        <div class="inline2">
          <img class="heart2" src="./image/heart.png">
          <h2 class="pclose">Our Services</h2>
        </div>
        <div class="topline">
          <div id="details2">
            <div class="linedown">
              <h2 class="pclose"><img src="./image/leave.png" width="20em">Age groups and fees</h2>
              <ul class="ul">
                <li>Toddlers-16 months to 2 years-125$/h</li>
                <li>Senior Toddlers-2 years to 3 years-118$/h</li>
                <li>Pre Kindy-2.5 years to 4 years-110$/h</li>
                <li>Kindergarten-3.5 years to 5 years-105$/h</li>
              </ul>
            </div>
            <div class="linedown">
              <h2 class="pclose"><img src="./image/leave.png" width="20em">Facilities</h2>
              <ul class="ul">
                <li>Well equipped, shaded playgrounds</li>
                <li>Age appropriate toys, books and activities</li>
                <li>Yoga and Sustainable Living Program</li>
                <li>Physi kids</li>
              </ul>
            </div>
          </div>
        </div>
          <div class="linedown">
            <h2 class="pclose"><img src="./image/leave.png" width="20em">Food provided</h2>
            <p class="pindent">We provide nutritionally balanced foods which are prepared by a qualified and experienced practicing dietician and a team of chef's from “Kids Gourmet Foods”.  Meals use only fresh quality ingredients and are free from artificial flavours, colours, additives and preservatives.  It is delivered Daily.</p>
          </div> 
      </div>
  </div>
    <div class="change">
      <div class="hometext">
        <div class="inline2">
          <img class="heart2" src="./image/heart.png">
          <h2 class="pclose">Our programs</h2>
        </div>
        <div class="topline">
          <ul class="pclose">
            <li>Explore indoor and outdoor environment</li>
            <li>Quiet and active times</li>
            <li>Individual, small and large group activities</li>
            <li>Teacher, child and parent initiated activities and experiences</li>
            <li>Combined room and whole of centre special days and activities</li>
          </ul>
        </div>
        <div class="inline2">
          <img class="heart2" src="./image/heart.png">
          <h2 class="pclose">Our activities</h2>
        </div>
        <div class="topline">
          <div id="inline4">
            <ul class="pclose">
              <li>Mother's Day</li>
              <li>Recycle Man Show</li>
              <li>Father's Day</li>
              <li>Trae Trae Indigenous Performance</li>
              <li>Centre photoes</li>
              <li>End of Year Celebration</li>
            </ul>
            <div>
              <ul class="nostyle">
                <li>12/05/2023</li>
                <li>12/05/2023</li>
                <li>12/05/2023</li>
                <li>12/05/2023</li>
                <li>12/05/2023</li>
                <li>12/05/2023</li>
              </ul>
            </div>
          </div>
          <span id="click"><a href="#search">More details></a></span>
        </div>
      </div>
      <img id="imgtop" src="./image/program.jpeg" alt="programs" width="100%">
    </div>
    <div class="change">
        <img class="img" src="./image/ourstuffs2.png" alt="stuffs" width="100%">
      <div class="hometext">
        <div class="inline2">
          <img class="heart2" src="./image/heart.png">
          <h2 class="pclose">Our stuffs</h2>
        </div>
        <div class="topline">
          <p>Our educators are highly qualified and experienced and dedicated to the development of the potential of every child.</p>
        </div>
        <div class="inline2">
          <img class="heart2" src="./image/heart.png"> 
          <h2 class="pclose">Qualifications</h2>
        </div>
        <div class="topline">
          <ul class="pclose">
            <li>Teacher:Bachelor or Education</li>
            <li>Director:Degree or Advanced Diploma</li>
            <li>Senior Educator:Diploma in Children's Services</li>
            <li>Assistant Educator:Certificate III in Children's Services</li>
          </ul>
        </div>
      </div>
    </div>
  <div class="mvisibleleft">
    <div class="inlineleft">
      <img class="heartm" src="./image/heart.png">
      <h2>BOOK A TOUR</h2>
    </div>
      <form id="bookatour" action="Home.php" method="post">
        <label for="parentname">Parent's Name*</label>
        <input type="text" name="parentname" id="parentname"/><br>
        <label for="phone">Phone Number*</label>
        <input type="text" name="phone" id="phone"/><br>
        <label for="email">Email Address*</label>
        <input type="email" name="email" id="email"/><br>
        <label for="address">Home Address*</label>
        <input type="text" name="address" id="address"/><br>
        <label for="childname">Child's Name*</label>
        <input type="text" name="childname" id="childname"/><br>
        <label for="birthdate">Date of Birth*</label>
        <input type="date" name="birthdate" id="birthdate"/><br>
        <label class="text3" for="message">Any enquiries:</label>
        <textarea name="message" id="message" rows="10" cols="40"></textarea>
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