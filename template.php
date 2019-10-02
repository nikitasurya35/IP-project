<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  background-image: url("fade1.jpg");

  /* Center and scale the image nicely */
  background-size: cover;
  width:1345px;  
  height:550px;
  opacity: 1;
  /* Needed to position the navbar */
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0px;
  float: right;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.centered {
  position: relative;
  top: 50%;
  left: 50%;
  
}
</style>
</head>
<body>
  <div class="bg-img">
  	<h1 style="font-size: 50px; font-style: bold; font-family: Times New Roman; color: white; float: left;" align="Center">WELCOME, user</h1>
  	
  <form action="log1.php" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <select name="type" name="">
        <option value="admin" name="admin">admin</option>
        <option value="user" name="user">user</option>
    </select><br><br>

    <button type="submit" class="btn">Login</button>
    <br>
    <br>
    <button type="submit" class="btn"><a href="http://localhost/ip/signup1.php"> signup</a></button>
  </form>
</div>

</body>
</html>






