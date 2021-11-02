<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/about1.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>
	<nav class="nav-bar" >
      <a href="./index.php"><img src="images/logo.png"></a>
      <div class="menu">
        <span onClick="myFunction()">&#9776;</span>
        <ul id="nav-links">
          <li>
            <a href="./index.php">Home</a>
          </li>
          <li>
            <a href="./about.php">About</a>
          </li>
          <li>
            <a href="./services.php">Services</a>
          </li>
          <li>
            <a href="./shop.php">Shop</a>
          </li>
          <li>
            <a href="./about1.php">Contact Us</a>
          </li>
      </ul> 
      </div>
      
     
    </nav>
    <script src="script.js"></script>
	<img src="images/logo.png" class="logo">
	<h4>Contact Us</h4>
	
	<p class="phone"><img src="images/32x32.png" class="image"><b class="num">+1 269-256-OKAY<b></p>

	<p class="email"><img src="images/32x32email.png" class="image"><b class="em">kumar.sanu@wmich.edu<b></p>

	<form action="query_res.php" method="post">
		<div>
		<textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;width: 30%;height: 200px;">
		Have Any Queries? Please write here!
		</textarea>
		</div>
		<input style="cursor: pointer;"  type="submit" value="Submit" name="action" class="enter">
	</form>

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.6937882827087!2d-85.61435468458512!3d42.28505947919186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x881777db56ba200f%3A0x2ba5d9d2f6279fed!2sJohn%20T.%20Bernhard%20Center!5e0!3m2!1sen!2sus!4v1607309563282!5m2!1sen!2sus" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe>


</body>
</html>