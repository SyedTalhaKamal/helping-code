<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Web Name - <?php echo ((isset($title))?$title:'Home'); ?></title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/hover-min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" type="image/gif" sizes="32x32" href="images/fav.png">
<link rel="stylesheet" href="css/animate.css">
<link href="fonts/fontawesome/css/all.min.css" rel="stylesheet">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/mega-menu.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head> 

<body>
<!--header start here-->
 
   
  <header class="header_area login-header">
    <div class="container">
      <div class="main_header_area animated">
        <nav id="navigation1" class="navigation">
          <div class="nav-header"> <a class="nav-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt=""> </a>
            <div class="nav-toggle"></div>
          </div>
          <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
              <li class="<?php if ($activeNav=="Home") {echo "active "; } else  {echo " ";}?>"><a href="index.php" class="yel">Home</a></li> 
              <li class="<?php if ($activeNav=="About us") {echo "active "; } else  {echo " ";}?>"><a href="about-us.php" class="yel">About us</a></li> 
              <li class="<?php if ($activeNav=="Bet") {echo "active "; } else  {echo " ";}?>"><a href="bet.php" class="yel">Bet</a></li>  
              <li class="<?php if ($activeNav=="Blogs") {echo "active "; } else  {echo " ";}?>"><a href="blogs.php" class="yel">Blogs</a></li> 
              <li class="<?php if ($activeNav=="Contact Us") {echo "active "; } else  {echo " ";}?>"><a href="contact.php" class="yel">Contact Us</a></li> 
			  <li class="<?php if ($activeNav=="signup") {echo "active "; } else  {echo " ";}?>"><a href="register.php" class="white-btn">signup</a></li> 
              <li class="<?php if ($activeNav=="Login") {echo "active "; } else  {echo " ";}?>"><a href="login.php" class="gd-btn">Login</a></li> 
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
 
 
<!--header end here-->