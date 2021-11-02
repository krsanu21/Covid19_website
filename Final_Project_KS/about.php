<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COVID-19 Info</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/yeti/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
      .my_img{
      height: 400px;
      width: 600px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      border: 5px solid black ;

    }
    .name{
      text-align: center;
      font-size: 40px;
    }
    
    </style>
  </head>
  <body style="background-color: white;">
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

    
    <div class="any">
      <img src="images/DSC_0062.JPG" class="my_img">
      <p class="name"><b>Name: Kumar Sanu</b></p>
      <h2><b>About this website- COVID-19 Info</b></h2>
      <p><b>Team Number: 31</b></p>
      <p style="color: black; font-size: 30px;">
        Hi everyone, my name is Kumar. I am a sophomore in CS in WMU. I am from <b>Godda</b> which is a city in the state of Jharkhand in <b>India</b>. Since,
        COVID-19 is the trending topic all over the world. So, i have made an
        effort to make a website on COVID-19. This website provides information
        about this novel coronavirus, what this virus is by linking this website
        to important webpages of CDC and providing some youtube videos.It also
        helps you to shop the important protective gears directly from our
        website.
      </p>
      <h3>There are total of 5 webpages in the website COVID-19 Info.</h3>
      <div class="index">
        <h4 class="flip-1" style="color:#326273ff;cursor: pointer;">
          <b>Index.php</b>
        </h4>
        <p class='slide-1'style="color: black; font-size: 30px;">
          This webpage is the home page of the whole website. It contains a
          navbar which has links to other webpages of this website.The navbar is
          created by using bootstrap. It contains the statistics related to
          COVID-19. A donation form is also there in this webpage. It also
          contains a link to the shop.php page.
        </p>
      </div>
      <div class="about">
        <h4 class="flip-2" style="color:#326273ff; cursor: pointer;">
          <b>About.php</b>
        </h4>
        <p class='slide-2'style="color: black; font-size: 30px;">
          This webpage is basically a report of the whole website. It has
          information about the creator of this website. It also contains how
          the whole website was created and what information is there in each of
          the webpage of this website.
        </p>
      </div>
      <div class="services">
        <h4 class="flip-3" style="color:#326273ff; cursor: pointer;">
          <b>services.php</b>
        </h4>
        <p class='slide-3'style="color: black; font-size: 30px;">
          This webpage provides information about COVID-19. It has a CDC
          coronavirus self checker. There are also youtube videos which tells
          the user about how this virus spreads and how it is contagious to the
          body.
        </p>
      </div>
      <div class="shop">
        <h4 class="flip-4" style="color:#326273ff; cursor: pointer;">
          <b>shop.php</b>
        </h4>
        <p class='slide-4'style="color: black; font-size: 30px;">
          This webpage shows a list of items which are essential in this time of
          coronavirus. Customers can directly buy these stuff from this webpage.
          It has two products, one is santizer and the other is mask.
        </p>
      </div>
      <div>
        <h4 class="flip-5" style="color:#326273ff; cursor: pointer;">
          <b>contact_us.php</b>
        </h4>
        <p class='slide-5'style="color: black; font-size: 30px;">
          This webpage shows the contact information. Users can also enter their queries in this page. It also has a map showing our address.
        </p>
      </div>
    </div>
    <script>
    $(document).ready(function(){
      $(".flip-1").click(function(){
        $(".slide-1").fadeToggle("slow");
      });
    });
    $(document).ready(function(){
      $(".flip-2").click(function(){
        $(".slide-2").fadeToggle("slow");
      });
    });
    $(document).ready(function(){
      $(".flip-3").click(function(){
        $(".slide-3").fadeToggle("slow");
      });
    });
    $(document).ready(function(){
      $(".flip-4").click(function(){
        $(".slide-4").fadeToggle("slow");
      });
    });
    $(document).ready(function(){
      $(".flip-5").click(function(){
        $(".slide-5").fadeToggle("slow");
      });
    });
    </script>
  <style> 
  .slide-1, .flip-1,.slide-2, .flip-2,.slide-3,.flip-3,.slide-4,.flip-4,.slide-5,.flip-5{
    padding: 5px;
    text-align: center;
    background-color: #e0ddcfff;
    border: solid 1px #c3c3c3;

  }

  .slide-1, .slide-2,.slide-3,.slide-4,.slide-5 {
    padding: 50px;
    display: none;
    padding-right: 50px;
    margin-bottom: 30px;

  }
  </style>
  </body>
</html>

