function validateForm(event){
  event.preventDefault();
  let form=document.forms["bookatour"];
  let parentname=document.getElementById("parentname").value;
  let phone=document.getElementById("phone").value;
  let email=document.getElementById("email").value;
  let address=document.getElementById("address").value;
  let childname=document.getElementById("childname").value;
  let birthdate=document.getElementById("birthdate").value; 
  let errormsg="";
  console.log(event);
  console.log(parentname,phone,email,address,childname,birthdate);
  if(parentname==""||parentname==null){
    errormsg+="Parent's Name must be filled out \n";
   }
   if(phone==""||phone==null){
    errormsg+='Phone Number must be filled out \n';
   }
   if(email==""||email==null){
    errormsg+='Email Address must be filled out \n';
   }
   if(address==""||address==null){
    errormsg+='Home Address must be filled out \n';
   }
   if(childname==""||childname==null){
    errormsg+="Child's Name must be filled out \n";
   }
   if(birthdate==""||birthdate==null){
    errormsg+='Date of Birth must be filled out \n';
   }
   if(errormsg==""||errormsg==null){
    form.submit;
   }
   else{
    alert(errormsg);
  }
}
function contactForm(event){
  event.preventDefault();
  let form=document.forms["contactform"];
  let firstname=document.getElementById("firstname").value;
  let lastname=document.getElementById("lastname").value;
  let email=document.getElementById("email").value;
  let phone=document.getElementById("phone").value;
  let errormsg="";
  console.log(event);
  console.log(firstname,lastname,email,phone);
  if(firstname==""||firstname==null){
    errormsg+='First Name must be filled out \n';
   }
   if(lastname==""||lastname==null){
    errormsg+='Last Name must be filled out \n';
   }
   if(email==""||email==null){
    errormsg+='Email Address must be filled out \n';
   }
   if(phone==""||phone==null){
    errormsg+='Phone Number must be filled out \n';
   }
   if(errormsg==""||errormsg==null){
    form.submit;
   }
   else{
    alert(errormsg);
  }
}
function showElement(){
  let etable=document.getElementById("etable");
  etable.className="tshow";
}
function showNavbar(){
  let etable=document.getElementById("navbar");
  etable.className="tshow";
}
function waitinglistForm(event){
  event.preventDefault();
  let form=document.forms["waitinglist"];
  let cfirstname=document.getElementById("cfirstname").value;
  let clastname=document.getElementById("clastname").value;
  let room=document.getElementById("room").selectedIndex; 
  let date=document.getElementById("date").value;
  let pfirstname=document.getElementById("pfirstname").value;
  let plastname=document.getElementById("plastname").value;
  let email=document.getElementById("email").value; 
  let phone=document.getElementById("phone").value; 
  let errormsg="";
  console.log(event);
  console.log(cfirstname,clastname,date,room,pfirstname,plastname,email,phone);
  if(cfirstname==""||cfirstname==null){
    errormsg+="Child's First Name must be filled out \n";
   }
   if(clastname==""||clastname==null){
    errormsg+="Child's Last Name must be filled out \n";
   }
   if(date==""||date==null){
    errormsg+="Date must be chosen \n";
   }
   if(room==""||room==null){
    errormsg+="Room must be chosen \n";
   }
   if(pfirstname==""||pfirstname==null){
    errormsg+="Parent's First Name must be filled out \n";
   }
   if(plastname==""||plastname==null){
    errormsg+="Parent's Last Name must be filled out \n";
   }
   if(email==""||email==null){
    errormsg+='Email Address must be filled out \n';
   }
   if(phone==""||phone==null){
    errormsg+='Phone Number must be filled out \n';
   }
   if(errormsg==""||errormsg==null){
    form.submit;
   }
   else{
    alert(errormsg);
  }
}

function enlargePhoto1() {
  let photo = document.getElementById('myPhoto1');
  photo.classList.toggle('enlarged');
}
function enlargePhoto2() {
  let photo = document.getElementById('myPhoto2');
  photo.classList.toggle('enlarged');
}
function enlargePhoto3() {
  let photo = document.getElementById('myPhoto3');
  photo.classList.toggle('enlarged');
}
function enlargePhoto4() {
  let photo = document.getElementById('myPhoto4');
  photo.classList.toggle('enlarged');
}
function enlargePhoto5() {
  let photo = document.getElementById('myPhoto5');
  photo.classList.toggle('enlarged');
}
function enlargePhoto6() {
  let photo = document.getElementById('myPhoto6');
  photo.classList.toggle('enlarged');
}
function enlargePhoto7() {
  let photo = document.getElementById('myPhoto7');
  photo.classList.toggle('enlarged');
}
function enlargePhoto8() {
  let photo = document.getElementById('myPhoto8');
  photo.classList.toggle('enlarged');
}
function enlargePhoto9() {
  let photo = document.getElementById('myPhoto9');
  photo.classList.toggle('enlarged');
}