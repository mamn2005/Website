<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="icon" href="./favicon.ico" type="image/x-icon">
 <link rel="stylesheet" href="./styles/default.css">
 <script src="./public/js/jquery3.6.0.js"></script>
 <script src="./public/css/bt/js/bootstrap.bundle.min.js"></script>
 <script src="./public/css/fa/js/all.js"></script>
 <link rel="stylesheet" href="./public/css/bt/css/bootstrap.min.css">
 <link rel="stylesheet" href="./public/css/fa/css/fontawesome.min.css">
 <title>Home Page</title>
</head>
<body>
 <nav class="navbar">
  <div class="container">
   <div class="navbar-header">
    <button class="navbar-toggler" data-toggle="open-navbar1">
     <span></span>
     <span></span>
     <span></span>
    </button>
    <a href="#">
     <div class="logo"><img src="./images/logo.png"></div>
    </a>
    </div>
    <div class="navbar-menu" id="open-navbar1">
      <ul class="navbar-nav">
       <li class="active"><a href="#">Home</a></li>
       <li class="navbar-dropdown">
        <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
         Categories & Links <i class="fa fa-angle-down"></i>
        </a>
       <ul class="dropdown" id="my-dropdown-id">
        <li><a href="#">Buildings & Houses</a></li>
        <li><a href="#">Fields & Lands</a></li>
        <li class="separator"></li>
        <li><a href="#">FAQ</a></li>
        <li class="separator"></li>
        <li><a href="#">Help From Community</a></li>
       </ul>
      </li>
      <!-- <li class="navbar-dropdown">
       <a href="#" class="dropdown-toggler" data-dropdown="blog">
        Blog <i class="fa fa-angle-down"></i>
       </a>
       <ul class="dropdown" id="blog">
        <li><a href="#">Some category</a></li>
        <li><a href="#">Some another category</a></li>
        <li class="separator"></li>
        <li><a href="#">Seprated link</a></li>
        <li class="separator"></li>
        <li><a href="#">One more seprated link.</a></li>
       </ul>
      </li> -->
      <li><a href="#">Contact</a></li>
      <li><a href="#">Register</a></li>
      <li><a href="#">Sign in</a></li>
      <li><a href="#">About</a></li>
     </ul>
    </div>
  </div>
 </nav>
 <script src="./scripts/nav.js"></script>
</body>
</html>