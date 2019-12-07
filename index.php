<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gustavo Sanchez</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
      background-image: url("img/banner.jpg");
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      /*background-color: #1abc9c; /* Green */*/
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
      margin-top: -50px;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 0px;
      padding-bottom: 0px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Gustavo Sanchez</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li>
        <button type="button" class="btn btn-default btn-sm" style="margin-top: 7px;">
        <span class="glyphicon glyphicon-shopping-cart">
        </span> STORE
        </button>
        </li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="img/me.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>Junior Web Developer</h3>
  <h3>Freelancer</h3>
  <h3>Student</h3>
</div>

<!-- Second Container -->
<div id="about" class="container-fluid bg-2 text-center">
  <h3 class="margin">About me</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  <a href="https://docs.google.com/document/d/1ak2qqTQoR6_IXNMwcA4_7hi1ZVcyZyS4BPFBrMY-rn0/edit?usp=sharing" target="_blank" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-new-window"></span> Open CV 
  </a>
</div>

<!-- Third Container (Grid) -->
<div id="portfolio" class="container-fluid bg-3 text-center">    
  <h3 class="margin">Portfolio</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <h4 class="margin">Events listing website</h4><br>
      <p>Built a Chess Society sample website.
        Used Bootstrap, Javascript (JQuery, Google Maps API), PHP, AJAX, a Content Management System built from square one and a MySQL backend database.</p>
      <a href="https://homepages.shu.ac.uk/~b6025590/WAD/index.php" target="_blank"><img src="img/hallamChess.png" class="img-responsive margin" style="width:100%" alt="Image"></a>
    </div>
    <div class="col-sm-4"> 
      <h4 class="margin">Events listing website</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="https://homepages.shu.ac.uk/~b6025590/WAD/index.php" target="_blank"><img src="img/hallamChess.png" class="img-responsive margin" style="width:100%" alt="Image"></a>
    </div>
    <div class="col-sm-4"> 
      <h4 class="margin">Events listing website</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="https://homepages.shu.ac.uk/~b6025590/WAD/index.php" target="_blank"><img src="img/hallamChess.png" class="img-responsive margin" style="width:100%" alt="Image"></a>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>

</body>
</html>
