<?php
require_once"queryDb.php";
if(isset($_POST["cfirstname"]) && ($_POST["clastname"]) && ($_POST["gender"]) && ($_POST["date"]) && ($_POST["room"]) && ($_POST["day"]) && ($_POST["pfirstname"]) && ($_POST["plastname"]) && ($_POST["email"]) && ($_POST["phone"]) && ($_POST["information"])){
  addWcustomers($cfirstname,$clastname,$gender,$date,$room,$day,$pfirstname,$plastname,$email,$phone,$information);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width initial-scale=1.0">
  <meta name="description" content="a form for waiting list">
  <meta name="keywords" content="a form, waiting list">
  <title>Little Sprounts Waiting List Form</title>
  <link href="./style.css" rel="stylesheet">
  <script async defer type="text/javascript" src="script.js"></script>
</head>
<body>
  <div id="page">
    <div class="text2">
      <div id="inline3">
        <img class="heart" src="./image/heart.png">
        <h1>Little Sprouts Waiting List Form</h1>
      </div>
    </div>

      <div class="change">
        <form id="waitinglist" action="waitinglist.php" method="post">
          <div class="form2">
            <label for="name"><img class="leaveform" src="./image/leave.png" width="25em">Child's Name*</label>
            <hr/>
            <div class="forminline">
              <span><label for="cfirstname">First Name*</label>
              <input class="inputlong" type="text" id="cfirstname" name="cfirstname"></span>
              <span><label for="clastname">Last Name*</label>
              <input class="inputlong" type="text" id="clastname" name="clastname"></span>
            </div><hr/>
            <label for="gender"><img class="leaveform" src="./image/leave.png" width="25em">Child's Gender*</label>
            <hr/>
              <div class="radio">
                <div><input type="radio" id="mgender" name="gender">Male</div>
                <div><input type="radio" id="fgender" name="gender">Female</div>
                <div><input type="radio" id="tgender" name="gender">TBC</div>
              </div>
            <hr/>
            <label for="date"><img class="leaveform" src="./image/leave.png" width="25em">Start Date*</label>
            <input type="date" id="date" name="date">
            <label for="room">Room*</label>
            <select id="room" name="room">
              <option value="none" selected></option>
              <option value="Toddlers">Toddlers:15m-2y</option>
              <option value="Senior Toddlers">Senior Toddlers:2y-3y</option>
              <option value="Prekindy">Prekindy:2.5y-4y</option>
              <option value="Kindergarten">Kindergarten:3.5y-5y></option>
            </select>
            <hr/>
            <label for="day"><img class="leaveform" src="./image/leave.png" width="25em">Perferred Days*</label>
            <hr/>
              <div class="radio">
                <div><input type="radio" id="mday" name="day">Monday</div>
                <div><input type="radio" id="tday" name="day">Tuesday</div>
                <div><input type="radio" id="wday" name="day">Wednesday</div>
                <div><input type="radio" id="tday" name="day">Thursday</div>
                <div><input type="radio" id="fday" name="day">Friday</div>
              </div>
            <hr/>
            <label for="name"><img class="leaveform" src="./image/leave.png" width="25em">Parent's/Carer's Name*</label>
            <hr/>
            <div class="forminline">
              <span><label for="pfirstname">First Name*</label>
              <input class="inputlong" type="text" id="pfirstname" name="pfirstname"></span>
              <span><label for="lastname">Last Name*</label>
              <input class="inputlong" type="text" id="plastname" name="plastname"></span>
            </div><hr/>
            <div class="forminline">
              <span><label for="email">Email*</label>
              <input class="inputlong2" type="email" id="email" name="email"></span>
              <span><label for="phone">Phone*</label>
              <input class="inputlong2" type="tel" id="phone" name="phone"></span>
            </div>
          </div>
          <br>
          <label for="information" class="text3">Any further information which may be of assistance</label> 
          <div class="textcenter">
            <textarea id="information" name="information" rows="15" cols="65"></textarea>
          </div>
          <div class="text3">*denotes required<br>Please notify us if any of above information changes!<br>
            <input type="submit" onClick="waitinglistForm(event)" value="submit>">
          </div>
        </form>
        <div id="img2">
          <img src="./image/ourstuffs.jpg" alt="services" width="100%">
        </div>
      </div>
    
  
         
    
  
   
   
   
   
   
    </div>













  </div>
</body>
</html>