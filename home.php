<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    
    
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
  background-image: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)),
  url(https://www.sih.gov.in/img1/software-result-bg.jpg);
  background-position: center center;
  background-size: cover;
}
/* default css end */


/* navbar regular css start */
.navbar-area {
  background: #1e2851 ;
  border-bottom: 1px solid #1e2851 ;
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
    font-size:0.8rem;
    
  color: #fff;
  padding: 20px;
  display: block;
  background:#1e2851 ;
  text-decoration: none;
 
}
.site-navbar ul li a:hover {
    color:
#b0dde4 ;
 
 
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
.intro-area {
  height: calc(100vh - 61px);
  display: flex;
  align-items: center;
  text-align: center;
  color: #fff;
}
.intro-area h2 {
  font-size: 70px;
  font-weight: 300;
  line-height: 70px;
  margin-bottom: 25px;
  padding-left:30px;
}
.intro-area p {
  font-size: 18px;
   padding-left:30px;
}
/* intro-area css end */


/* mobile breakpoint start */
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
.container {
    position: relative;
    background: #aad5f6;
}
.slide-1 {
    background: url('../asset/images/2017_1.jpg');
}
.slide-2 {
    background: url('../asset/images/2018_1.jpg');
}
.slide-3 {
    background: url('../asset/images/2018_2.jpg');
}
.slide-4 {
    background: url('../asset/images/2018_3.jpg');
}
.slide-5 {
    background: url('../asset/images/2018_4.jpg');
}
.slide-6 {
    background: url('../asset/images/2019_2.jpg');
}
.slide-7 {
    background: url('../asset/images/2019_3.jpg');
}
.slide-8 {
    background: url('../asset/images/2019_4.jpeg');
}
.slide-9 {
    background: url('../asset/images/2019_5.jpeg');
}

.slide-10 {
    background: url('../asset/images/2019_6.jpeg');
}

.slide-11 {
    background: url('../asset/images/2020_1.jpg');
}

.slide {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow-x: hidden;
}
.caption {
    background: rgba(0, 0, 0, 0.03);
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 40px 0px;
}
.caption h3 {
    color: #fff;
    text-align: center;
    font-size: 50px;
    padding: 18px;
}
.caption p {
    max-width: 600px;
    width: 90%;
    margin: 0px auto;
    color: #ccc;
    text-align: center;
    font-size: 18px;
    line-height: 1.5em;
}
.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 100;
    background: rgba(0, 0, 0, .1);
    border-radius: 50%;
    transform: background 500ms;
}
.arrow img {
    width: 50px;
}
.arrow:hover {
    background: rgba(0, 0, 0, .4);
}
.l {
    left: 0;
}
.r {
    right: 0;
}

/*stats*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

.section{
  background: url("images/bg-1.jpg") no-repeat;
  height: 100vh;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
.wrapper{
  padding: 20px 50px;
}
.wrapper .title{
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 10px;
}
.wrapper p{
  text-align: justify;
  padding-bottom: 20px;
}
.counter-up{
 
  min-height: 50vh;
  background-size: cover;
  background-attachment: fixed;
  padding: 0 50px;
  position: relative;
  display: flex;
  align-items: center;
}
.counter-up::before{
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: 
#f2f2f2;

}
.counter-up .content{
  z-index: 1;
  position: relative;
  display: flex;
  width: 100%;
  height: 100%;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.counter-up .content .box{
  border: 1px dashed #286fb4;
  width: calc(25% - 30px);
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  flex-direction: column;
  padding: 20px;
}
.content .box .icon{
  font-size: 48px;
  color: 

#286fb4 ;
}

.content .box .counter{
  font-size: 50px;
  font-weight: 500;
  color: 
#286fb4;
  font-family: sans-serif;
}
.content .box .text{
  font-weight: 400;
  color: 
#1e2851;
}
@media screen and (max-width: 1036px) {
  .counter-up{
    padding: 50px 50px 0 50px;
  }
  .counter-up .content .box{
    width: calc(50% - 30px);
    padding-bottom:50px;
    margin-bottom: 50px;
  }
}
@media screen and (max-width: 580px) {
  .counter-up .content .box{
    width: 100%;
  }
}
@media screen and (max-width: 500px) {
  .wrapper{
    padding: 20px;
  }
  .counter-up{
    padding: 30px 20px 0 20px;
  }
}


/*about section*/


.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  line-height: 25px;
}

.responsive-container-block.bigContainer {
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 30px;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.mainImg {
  color: black;
  
  width: 30%;
  height: auto;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 5px 10px 7px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

.text-blk.headingText {
  font-size: 23px;
  font-weight: 700;
  line-height: 34px;
  color: #1a1a1a;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 10px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
}

.allText {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 40px;
  width: 60%;
  margin: 0 0 0 0;
}

.text-blk.subHeadingText {
  color: rgb(102, 102, 102);
  font-size: 21px;
  line-height: 34px;
  font-weight: 700;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 10px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 15px;
  margin-left: 0px;
}

.text-blk.description {
  font-size: 17px;
  line-height: 34px;
  color: #666666;
  
  margin-right: 0px;
  margin-bottom: 50px;
  
  padding-top: 0px;
  
  padding-bottom: 0px;
  
}



.responsive-container-block.Container {
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  justify-content: center;
  align-items: center;
  max-width: 1320px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

.responsive-container-block.Container.bottomContainer {
  margin-top: 100px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
  flex-direction: row-reverse;
  margin: 100px auto 50px auto;
}

.allText.aboveText {
  margin: 0 0 0 40px;
}

.allText.bottomText {
  margin: 0 40px 0 0;
}

@media (max-width: 1024px) {
  .responsive-container-block.Container {
    max-width: 850px;
  }

  .mainImg {
    width: 55%;
    height: auto;
  }

  .text-blk.description {
    font-size: 17px;
  }

  .allText {
    width: 40%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
  }

  .text-blk.subHeadingText {
    font-size: 22px;
  }

  .responsive-container-block.Container.bottomContainer {
    margin: 80px auto 50px auto;
  }

  .responsive-container-block.Container {
    max-width: 830px;
  }

  .allText.aboveText {
    margin: 30px 0 0 40px;
  }

  .allText.bottomText {
    margin: 30px 40px 0 0;
  }
}

@media (max-width: 768px) {
  .mainImg {
    width: 90%;
  }

  

  .responsive-container-block.Container {
    flex-direction: column;
    height: auto;
  }

  .text-blk.headingText {
    text-align: center;
  }

  .text-blk.subHeadingText {
    text-align: center;
    font-size: 25px;
  }

  .text-blk.description {
    text-align: center;
    font-size: 17px;
   
  }

  .allText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .allText.aboveText {
    margin: 40px 0 0 0;
  }

  .responsive-container-block.Container {
    margin: 80px auto 50px auto;
  }

  .responsive-container-block.Container.bottomContainer {
    margin: 50px auto 50px auto;
  }

  .allText.bottomText {
    margin: 40px 0 0 0;
  }
}

@media (max-width: 500px) {
  .responsive-container-block.Container {
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
    width: 100%;
    max-width: 100%;
  }

  .mainImg {
    width: 100%;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 25px;
    padding-bottom: 10px;
    padding-left: 25px;
  }

  .text-blk.subHeadingText {
    font-size: 25px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .text-blk.description {
    font-size: 18px;
    
  }

  .allText {
   
    width: 100%;
  }
}
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');


.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}


@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");



.container7 {
  display: flex;
  background: #f2f2f2;
  justify-content: flex-end;
  align-items: flex-end;
  min-height: 50vh;
  margin-top:-40px;
}

.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

.sih-content{
    padding:50px;
    margin:30px;
    color:#666666;
    font-size: 17px;
    font-family: 'georgia';
    line-height:25px;
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
          <li><a href="asset/SIH_report.pdf">Success Stories</a></li>
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

  <div class="intro-area">
    <div class="container4">
      <h2>Smart India Hackathon</h2>
      <p></p>
    </div>
  </div>
</header> 

<!--about-->
<div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container">
    <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eaboutus1.svg">
    <div class="allText aboveText">
      <p class="text-blk headingText">
        What is SIH?
      </p>
     
     
      <p class="text-blk description">
        Smart India Hackathon is a nationwide initiative to provide students with a platform to solve some of the pressing problems we face in our daily lives, and thus inculcate a culture of product innovation and a mindset of problem-solving. The first four editions SIH2017, SIH2018, SIH2019 and SIH2020 proved to be extremely successful in promoting innovation out-of-the-box thinking in young minds, especially engineering students from across India. </p>
    
    </div>
  </div>
 
</div>
    
    
    <!--image slider-->
    <div class="container">
        <div class="arrow l" onclick="prev()">
            <img src="images/l.png" alt="l">
        </div>
        <div class="slide slide-1">
             <div class="caption">
                 
             </div>
        </div>
        <div class="slide slide-2">
            <div class="caption">
                
            </div>
       </div>
       <div class="slide slide-3">
            <div class="caption">
               \
            </div>
       </div>
       <div class="slide slide-4">
            <div class="caption">
               
            </div>
       </div>
       <div class="slide slide-5">
            <div class="caption">
              
            </div>
       </div>
        <div class="slide slide-6">
            <div class="caption">
              
            </div>
       </div>
        <div class="slide slide-7">
            <div class="caption">
              
            </div>
       </div>
        <div class="slide slide-8">
            <div class="caption">
              
            </div>
       </div>
       <div class="slide slide-9">
            <div class="caption">
              
            </div>
       </div>
       <div class="slide slide-10">
            <div class="caption">
              
            </div>
       </div>
       <div class="slide slide-11">
            <div class="caption">
              
            </div>
       </div>
       <div class="arrow r" onclick="next()">
            <img src="images/r.png" alt="r">
        </div>
    </div>
    
    <div class="sih-content">
<p>
Smart India Hackathon 2022 is a nationwide initiative to provide students a platform to solve some of the pressing problems we face in our daily lives, and thus inculcate a culture of product innovation and a mindset of problem solving.The last edition of the hackathon saw over 5 million+ students from various colleges compete for the top prize at 65+ locations.In SIH 2022, the students would have the opportunity to work on challenges faced within various Ministries, Departments, Industries, PSUs and NGOs to create world class solutions for some of the top organizations including industries in the world, thus helping the Private sector hire the best minds from across the nation. It can help to:
</p>
<ul>
    <li class='bx bxs-right-arrow'> Harness creativity & expertise of students </li>
    <li class='bx bxs-right-arrow'> Spark institute-level hackathons </li>
    <li class='bx bxs-right-arrow'> Build funnel for 'Startup India' campaign </li>
    <li class='bx bxs-right-arrow'> Crowdsource solutions for improving governance and quality of life </li>
    <li class='bx bxs-right-arrow'> Provide opportunity to citizens to provide innovative solutions to India's daunting problems </li>
</ul>

<p>
The first three editions SIH2017, SIH2018, SIH2019 and SIH2022 proved to be extremely successful in promoting innovation, out-of-the-box thinking in young minds, especially engineering students from across India.
</p>

</div>
    

<!--stats-->
  <div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fas fa-users"></i></div>
        
        <?php
            $sql = "SELECT COUNT(*) as count FROM student_detail";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $count = $row['count'];
        ?>
        
        <div class="counter" data-val="<?php echo $count ?>">000</div>
        <div class="text">Total Particpants</div>
      </div>
      
      
      
      <div class="box">
        <div class="icon"><i class="fas fa-clipboard"></i></div>
        
        <?php
            $sql = "SELECT COUNT(*) as count FROM team_detail";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $count = $row['count'];
        ?>
        
        <div class="counter"data-val="<?php echo $count; ?>">000</div>
        <div class="text">Registered Teams</div>
      </div>
      
      
      
      <div class="box">
        <div class="icon"><i class="fas fa-bullseye"></i></div>
        <div class="counter"data-val="250">000</div>
        <div class="text">Problem Statments</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-trophy"></i></div>
        <div class="counter"data-val="16">000</div>
        <div class="text">Prizes Won</div>
      </div>
    </div>
  </div>


<div class="container7">
 <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
   
    <p>&copy;2021 Nadine Coelho | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 <div 
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
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}
   
    
    // slider image
    
        let slide = document.querySelectorAll('.slide');
        var current = 0;

        function cls(){
            for(let i = 0; i < slide.length; i++){
                  slide[i].style.display = 'none';
            }
        }

        function next(){
            cls();
            if(current === slide.length-1) current = -1;
            current++;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function prev(){
            cls();
            if(current === 0) current = slide.length;
            current--;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    
                    slide[current].style.opacity=x;
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function start(){
            cls();
            slide[current].style.display = 'block';
        }
        start();
        
        
        // stats
   let valueDisplays = document.querySelectorAll(".counter");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
     
    </script>
   

</html>