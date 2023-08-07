<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    
    
     <!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
<style>

/* default css start */

/*header*/

.container4 {
  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 15px;
}
.header-area {
  background-image: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,.2)),
  url(images/images.jpg);
  background-position: center center;
  background-size: cover;
}
/* default css end */


/* navbar regular css start */
.navbar-area {
  background: #3586ff;
  border-bottom: 1px solid #3586ff ;
}
.site-navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.site-logo img {
 width:70px;
 height:auto;
 padding:5px;
 
}
.site-navbar ul {
    margin-left:50px;
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
}
.site-navbar ul li a {
    font-size:1rem;
    
  color: #fff;
  padding: 20px;
  display: block;
  background:#3586ff ;
  text-decoration: none;
 
}
.site-navbar ul li a:hover {
  background-color:#275f94;

 
 
}

/* navbar regular css end */


/* nav-toggler css start */
.nav-toggler {
  border: 3px solid #fff;
  padding: 5px;
  background-color: transparent;
  cursor: pointer;
  height: 39px;
  display: none;
}
.nav-toggler span, 
.nav-toggler span:before, 
.nav-toggler span:after {
  width: 28px;
  height: 3px;
  background-color: #fff;
  display: block;
  transition: .3s;
}
.nav-toggler span:before {
  content: '';
  transform: translateY(-9px);
}
.nav-toggler span:after {
  content: '';
  transform: translateY(6px);
}
.nav-toggler.toggler-open span {
  background-color: transparent;
}
.nav-toggler.toggler-open span:before {
  transform: translateY(0px) rotate(45deg);
}
.nav-toggler.toggler-open span:after {
  transform: translateY(-3px) rotate(-45deg);
}
/* nav-toggler css start */


/* intro-area css start */

@media screen and (max-width: 767px) {
  .container {
    max-width: 720px;
  }
  /* navbar css for mobile start */
  .nav-toggler{
    display: block;
  }
  .site-navbar {
    min-height: 60px;
  }
  .site-navbar ul {
    position: absolute;
    width: 100%;
    height: calc(100vh - 60px);
    left: 0;
    top: 60px;
    flex-direction: column;
    align-items: center;
    border-top: 1px solid #444;
    background-color: rgba(0,0,0,.75);
    max-height: 0;
    overflow: hidden;
    transition: .3s;
  }
  .site-navbar ul li {
    width: 100%;
    text-align: center;
  }
  .site-navbar ul li a {
    padding: 25px;
  }
  
  .site-navbar ul.open {
    max-height: 100vh;
    overflow: visible;
  }
  .intro-area h2 {
    font-size: 50px;
    margin-bottom: 15px;
  }  
  /* navbar css for mobile end */
}
/* mobile breakpoint end */
@media screen and (max-width: 950px) {
 

  .nav-toggler{
    display: block;
    
      }
      .site-navbar {
    min-height: 60px;
  }
  .site-navbar ul {
    position: absolute;
    width: 100%;
    height: calc(100vh - 60px);
    left: 0;
    top: 60px;
    flex-direction: column;
    align-items: center;
    border-top: 1px solid #444;
    background-color: rgba(0,0,0,.75);
    max-height: 0;
    overflow: hidden;
    transition: .3s;
  }
  .site-navbar ul li {
    width: 100%;
    text-align: center;
  }
  .site-navbar ul li a {
    padding: 25px;
  }
  
  .site-navbar ul.open {
    max-height: 100vh;
    overflow: visible;
  }
  .intro-area h2 {
    font-size: 50px;
    margin-bottom: 15px;
  }  
  /* navbar css for mobile end */
}


/*image slider*/

*{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    box-sizing:border-box;
    text-decoration:none;
}

</style>

</head>
<body>
<?php require 'connect.php';?>
   
 <!--header-->
   <header class="header-area">
  <!-- site-navbar start -->
  <div class="navbar-area">
    <div class="container4">
      <nav class="site-navbar">
        <!-- site logo -->
        <a href="#home" class="site-logo"><img src="images/logo (2).png"></a>

        <!-- site menu/nav -->
        <ul>
            <li><a href="index.php">Home</a></li>
          <li><a href="ss.php">Success Stories</a></li>
          <li><a href="guidelines.php">Guidelines & Rules</a></li>
          <li><a href="https://www.sih.gov.in/sih2022PS">Problem Statements</a></li>
          <li><a href="sihregisteration.php">Register</a></li>
          <li><a href="display.php">Registered Teams</a></li>
           
          <li><a href="marks.php">Leaderboard </a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php">Login</a></li>
         
        </ul>

        <!-- nav-toggler for mobile version only -->
        <button class="nav-toggler">
          <span></span>
        </button>
      </nav>
    </div>
  </div><!-- navbar-area end -->

  
</header> 



</body>
<script>
        // navbar
    // define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
  
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
  document.getElementById('mydiv').style.display='none';
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
     
  }
}
</script>