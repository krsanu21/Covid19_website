<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/yeti/bootstrap.min.css"
    >
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Services</title>
  </head>
  <body>
    <nav class="nav-bar" >
      <a href="./index.php"><img src="images/logo.png"></a>
      <div class="menu">
        <span onClick="myFunction()">&#9776;</span>
        <ul id="nav-links" >
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
            <a href="./contact_us.php">Contact Us</a>
          </li>
      </ul> 
      </div>
      
     
    </nav>
    
    
    <main role="main">
      <div class="jumbotron mb-0" id="services">
        <div class="container-fluid ">
          <h3  class="top-line" style="color: yellow; font-size: 30px;">
            If you are having any symptoms, then go the official website of CDC
            to check whether your symptoms are related to <b>COVID-19</b> or not. Click
            the link below to get started.
          </h3>
          <p>
            <a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/coronavirus-self-checker.html" class="btn btn-primary btn-lg">Coronvirus Self Checker &raquo</a> 
           </p>
        </div>
      </div>
      <div class="row mt-1">
        <div class="col-md-6 col-sm-3 firstvid">
          <h3><b>How Coronavirus Spreads</b></h3>

          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/n6QwnzbRUyA"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <div class="col-md-6 col-sm-3">
          <h3><b>How contagious is COVID-19</b></h3>

          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/RzW9UUmImVA"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <!-- <div class="dashboard">
          <h3 style="color: blue;text-align: center;"><b>Covid Cases Global Dahboard (John Hokins University)</b></h3>
        </div> -->
        
        <iframe class="covidmap"  width="100%" height="500" frameborder="0" scrolling="no" 
  marginheight="0" marginwidth="0" title="2019-nCoV" 
  src="//arcgis.com/apps/Embed/index.html?webmap=14aa9e5660cf42b5b4b546dec6ceec7c&extent=77.3846,11.535,163.5174,52.8632&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"
></iframe>
      <footer class="container-fluid">
      <p>Copyright &copy; John Hopkins University</p>
    </footer>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>
