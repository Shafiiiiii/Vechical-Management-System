<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Car Workshop | Admin</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		
</head>

<style>
	
	body {
    background:#DDDDDD;
    font-family: 'Roboto', sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* ----- Signup/Login ----- */ 

body {font-family: Arial, Helvetica, sans-serif; background:#ECF0F5;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
  text-align:center;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

</style>

	<body>
		
		<script type="text/javascript">
		    function validate() {
		    	
		    	var username = document.clientloginform.user.value; 
		    	var upass = document.clientloginform.pass.value; 
		    	
		    	if (username == "" && upass == "")
		    	{
		    		document.getElementById("err1").innerText="Name cannot be left blank";
		    		document.getElementById("err2").innerText="Password cannot be left blank";
		    		return false;
		    	}
		    	else if (username == "")
		    	{
		    		document.getElementById("err1").innerText="Name cannot be left blank";
		    		return false;
		    	}
		    	else if (upass == "")
		    	{
		    		document.getElementById("err2").innerText="Please enter your password";
		    		return false;
		    	}
		    	else return true; 
		    }
			
		</script>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.html">
						<img src="images/logo.png" alt="Company Logo" class="logo">
						<h1 class="site-title">Quddus' <span>Technicians</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="services.html">Services</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
							<li class="menu-item"><div class="dropdown">
    <button class="dropbtn">Login/Signup 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="admin.html">Admin Login</a>
      <a href="signup.html">Client Signup</a>
      <a href="ClientLogin.html">Client Login</a>
      <a href="MechanicLogin.html">Mechanic Login</a>
    </div>
  </div> 
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->
			


<form name="clientloginform" action="client.php" style="border:1px solid #ccc" onsubmit="return validate()" method="post">
  <div class="container">
    <h1 style="color: black">Login for client</h1>

    <hr>
    
    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="username" name="user">
    <span id="err1" style="color: red"></span><br /><br />


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass">
    <span id="err2" style="color: red"></span>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      
      	<button type="submit" name = "submit" value="submit" class="signupbtn">login</button>
      
    </div>
  </div>
</form>

</body>
</html>

