<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

div {
  padding-bottom: 70px;
}

.bg-img {
  /* The image used */
  background-image: url("city1.jpg");

  /* Center and scale the image nicely */
  background-size: cover;
  width:1345px;  
  height:650px;
  opacity: 1;
  /* Needed to position the navbar */
  position: relative;

}

/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 0px;
  width: auto;
  position: relative;
  text-align: center;
  color: transparent;
  font-family:"Times New Roman",Times, sans-serif;
  font-size: 25px;

}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 14px;
  margin: 0px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 0px  0px ;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 5%;
}

/* Add padding to containers */
.containerr {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 400px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 35px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

.content{
  position: absolute;
  width: inherit;
  height: auto;
  top: 50%;
  transform: translateY(-50%);
  text-align: center;
  color: white;
}
</style>
</head>
<body>
<div class="bg-img">
  <div class="container">
  <div class="centered">
  <h1 style="color:white;" style="font-style:bold; "> INDUSTRIAL VISITS </h1></div>
    <div class="topnav">
      <a href="#home"><button style.display='block'>Home</button></a>
      <a href="#login"><button onclick="document.getElementById('id01').style.display='block'">Login</button></a>
      <!--a href="#contact"><button style.display='block'>Contact</button></a-->
      <a href="#about"><button style.display='block'>About Us</button></a>
      <a href="#"><h2>hello, <?php echo $_SESSION["uname"]; ?></h2></a>
      <a href="logout.php"><h3 align="left">logout</h3></a>
    </div>
  </div>
</div>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="login.php" method="post">
    <!--div class="imgcontainer">
      <img src="profile.png" alt="Avatar" class="avatar">
    </div-->

    <div class="containerr">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="http://localhost/ip/signup1.php">sign up
      </button></a>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p>
<a href="https://www.w3schools.com">
<img border="0" alt="place" src="place.jpg" width="300" height="300" style="padding-left:400px; ">
</a>
<a href="https://www.w3schools.com">
<img border="0" alt="place" src="place1.jpg" width="300" height="300">
</a>
</p>









<h1 style="text-align: center; font-style: bold; font-size: 35px; padding: 20px"><a  name="about"> ABOUT US </a></h1>
<p style="padding-top: 0px; padding-right: 30px; padding-left: 30px;padding-bottom: 30px; font-style: bold; font-size: 25px; font-family: Times New Roman; text-align: justify-all;">
  Industry Visit Tour System is a specific web based reservation system designed to make it easier for people or college to book industrial tour packages online. The most important part of the Industry Visit tour project is its database. The database is full of Buses, Trains, Airplane timings and availability. Online travel agency is a web based project where a user may search and apply for a travel service or package. The system allows the user to check various travel destinations and choose his destination accordingly. The software system checks for user choice and then queries the database for various available mediums to travel to that destination. The system then loads all that data and puts those choices in front of the user. The user can now choose various ways to reach his destination. When the user chooses the Bus, train or Airplane option, the system also allows the user to book tickets to the destination for the desire day and timings.
</p>





</body>
</html>