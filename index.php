<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title>
     <link rel="stylesheet" href="styles.css">
       </head>

  <body>
<form class="vipEvent" id="formg" action="ajax.php" method="POST">
  <div class="gform">
    <input class="input" type="text" id="Name" name="name" placeholder="Name" />
     <input class="input" type="email" id="email" name="email"placeholder="Email" />
    <input class="input" type="tel" id="phoneNum" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phoneNum"placeholder="Phone number"/>
   <label> Are you an Agent?
     <input type="radio" id= "yes" name="agent-question" value="yes"/>
    <label for="yes">Yes</label>
     <input type="radio" id= "no" name="agent-question" value="no"/>
     <label for="no">No</label>
  </label>

<div>
   <br>
   <label for="appointmentDay">Select an Appointment Day</label>
   <select  onchange="timeShow();" id="appointmentDay" name="appointment-day">
     <option  value="Select"> Select </option>
     <option id="Day1" value="October 17,2020">October 17, 2020 </option>
     <option  id ="Day2" value="October 18, 2020">October 18, 2020 </option>
  </select>
</div>

<br>
<div id="appoint-time" >
  <label for="appoint-time">Select an Appointment Time</label>
  <select name="time">
      <option  value="select">Select</option>
    <option value="1:30pm">1:30pm</option>
    <option value="2:30pm">2:30pm</option>
    </select>
  </div>
 <input type="submit" class="btn" id="submit" name="submit" value="Register for the Event" />

</div>
</form>


<script>
  var dropdown = document.getElementById("Day1");
  var dropdown1 = document.getElementById("Day2");
  var appTime = document.getElementById("appoint-time");

function timeShow() {
  if (dropdown.selected) {
      appTime.style.display = "block";
  } else if (dropdown1.selected){
     appTime.style.display = "block";
  } else
    appTime.style.display = "none";
}

timeShow();

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>



  </body>
</html>
