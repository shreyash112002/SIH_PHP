<?php include 'header.php';?>
<!DOCTYPE html>
<head lang="en">
	<title>SIH Success Stories Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet">
	<!--<link rel = "stylesheet" type = "text/css" href = "loginform.css">		<!-- Stylesheet only for login form -->
	<!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">-->
	<!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
 <!-- <script src="bootbox.min.js"></script>-->

</head>
<style>
*{
   
    font-family: 'Poppins', sans-serif;
    
}
    /*.panel-heading{*/
    /*   text-align:center;*/
    /*   font-size:1.8rem;*/
    /*   margin-top:50px;*/
    /*   margin-bottom:50px;*/
    /*   color:#275f94;*/
    /*   z-index:-1;*/

    /*}*/
    .panel-body{
        margin:20px;
        font-family:san-serif;
    }
  
   .timeline{
    position:relative;
    max-width:1200px;
    max-height:auto;
    margin:100px auto;
    z-index: -1;
}
.container{
    padding:10px 50px;
    position:relative;
    width:50%;
    animation:movedown 1s linear forwards;
    opacity:0;
    
}
@keyframes movedown{
    0%{
        opacity:1;
        transform:translateY(-30px);
    }
    100%{
        opacity:1;
        transform:translateY(0px);
    }
    
}
.text-box{
    padding:20px 30px;
    background:#fff;
    position:relative;
    border-radius:6px;
    font-size:15px;
    box-shadow: 
#66b8d4  0px 5px 15px;
}
.left-container{
    left:0;
        z-index:-1;

    
}
.right-container{
    left:50%;
}
.medal{
    position:absolute;
    width:40px;
    margin-top:8px;
    border-radius:50%;
    right:-20px;
    top:32px;
    z-index:-1;
    border:none;
}
.right-container img{
    left:-20px
}
.timeline::after{
    content:'';
    position:absolute;
    width:6px;
    height:auto;
    background:grey;
    top:0;
    left:50%;
    margin-left:-3px;
    margin-top:100px;
    z-index:-2;
    animation: moveline 6s linear forwards;
}
@keyframes moveline{
    0%{
        height:0;
    }
    100%{
        height:95%;
    }
}
.text-box{
    font-weight:600;
    
}
.text-box small{
    display:inline-block;
    margin-bottom:15px;
}
.left-container-arrow{
    height:0;
    width:0;
    position:absolute;
    top:28px;
    z-index:-1;
    border-top:15px solid transparent;
    border-bottom:15px solid transparent;
    border-left:15px solid #fff;
    right:-15px;
    
}
.right-container-arrow{
    height:0;
    width:0;
    position:absolute;
    top:28px;
    z-index:-1;
    border-top:15px solid transparent;
    border-bottom:15px solid transparent;
    border-right:15px solid #fff;
   left:-15px;
}
.container:nth-child(1){
    animation-delay:0s;
}
.container:nth-child(2){
    animation-delay:1s;
}

.container:nth-child(3){
    animation-delay:2s;
}

.container:nth-child(4){
    animation-delay:3s;
}
.container:nth-child(5){
    animation-delay:4s;
}
.container:nth-child(6){
    animation-delay:5s;
}

@media screen and (max-width:600px){
    .timeline{
        margin:50px auto;
        z-index: -2;
    }
    .timeline::after{
        left:31px;
        z-index: -2;
    }
    .container{
        width:100%;
        padding-left:80px;
        padding-right:25px;
    }
    .text-box{
        font-size:13px;
        }
    .text-box small{
        margin-bottom:10px;
    }    
    .right-container{
        left:0;
        
    }
    .left-container img, .right-container img{
        left:10px;
    }
    .left-container-arrow,.right-container-arrow{
        border-right:15px solid #fff;
        border-left:0;
        left:-15px;
    }
}
.team{
    height:25px;
    width:25px;
    margin-right:10px;
}
.center{
    text-align:center;
}
.padd{
    margin-left:32px;
    
}

</style>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<body>
 <!--<div class="container-fluid col-md-12" >-->
<!--<div class="row">-->

<div>    <div class="timeline">

<!--<div class="col-md-12">-->
<!--<div class="panel panel-info ">-->
<div class="panel-heading" style="text-align:center; font-size:1.8rem; margin-top:50px; margin-bottom:50px; color:#275f94; z-index:-1;">
  <h3>Success Stories</h3>
</div>
</h3> 
           <style>
    .team {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 20px auto;
    }
   .padd {
  padding: 10px;
  font-size: 18px;
  text-align: center;
  overflow-x: auto;
  white-space: normal;
  -webkit-overflow-scrolling: touch;
}

.padd > * {
  display: inline-block;
  margin-right: 10px;
}

    @media only screen and (max-width: 600px) {
        .padd {
            white-space: normal;
            overflow-x: hidden;
            -webkit-overflow-scrolling: initial;
        }
        .padd > * {
            display: block;
            margin: 10px 0;
        }
    }
</style>
<div class="panel-body">
  <div class="container left-container card" style="margin-top:150px">
         <img src="images/medal.png" class="medal medal1">
         <div class="text-box">
             <div class="center">
             <h2>2017</h2>
             
             </div>
             <p><img src="images/team.png" class="team">Team Members:<br>

<div class="padd" style="color:#808080;">
    <div>● Deepesh Gupta</div>
    <div>● Krupal Jadhav</div>
    <div>● Manish Jain</div>
    <div>● Deven Bhalerao</div>
    <div>● Likitha Shettigar</div>
    <div>● Atashi Khatau</div>
</div>
<img src="images/success.png" class="team">
<div class="padd">
    <div>Reached Grand Finale</div>
    <div>1st Runner Up (Rs. 75000/-)</div>
</div>


         <span class="left-container-arrow"></span>
         </div>
     </div>
 
 
 
 <div class="container right-container">
     <img src="images/medal.png"class="medal">
         <div class="text-box">
             <div class="center">
             <h2>2018</h2>
             
             </div>
             <p><img src="images/team.png" class="team">Team Members:<br>
             <div class="padd" style="color:#808080;">
    <div>● Tanvi Pandit</div>
    <div>● Aditya Hase</div>
    <div>● Arnab Sanyal</div>
    <div>● Shivam Mishra</div>
    <div>● Omkar Kadam</div>
    <div>● Premlata Pawar</div>
</div>
<img src="images/success.png" class="team">
<div class="padd">
    <!--<div>Reached Grand Finale</div>-->
    <div>Persistant Innovex Award (Rs. 10,000/-)</div>
</div>
         <span class="right-container-arrow"></span>
         </div>
     </div>
    
  <div class="container left-container card" >
         <img src="images/medal.png" class="medal medal1">
         <div class="text-box">
             <div class="center">
             <h2>2018</h2>
             
             </div>
             <p><img src="images/team.png" class="team">Team Members:<br>

<div class="padd" style="color:#808080;">
    <div>● Meldon Dias</div>
    <div>● Kevin Lobo</div>
    <div>● Gyanendra Maurya</div>
    <div>● Yash Agarwal</div>
    <div>● Prerna Singh</div>
    <div>● Renita Lobo</div>
    
</div>
<img src="images/success.png" class="team">
<div class="padd">
    
    <div>Honourable Mention</div>
</div>


         <span class="left-container-arrow"></span>
         </div>
     </div>
 
   <div class="container right-container">
     <img src="images/medal.png"class="medal">
         <div class="text-box">
             <div class="center">
             <h2>2019</h2>
             
             </div>
             <p><img src="images/team.png" class="team">Team Members:<br>
             <div class="padd" style="color:#808080;">
    <div>● Roshan James</div>
    <div>● Chaitanyakrishna Dukkipaty</div>
    <div>● Shadrak Gurupnor</div>
    <div>● Kyle Lobo</div>
    <div>● Pratik Nerurkar</div>
    <div>● Calden Rodrigues</div>
</div>
<img src="images/success.png" class="team">
<div class="padd">
    <!--<div>Reached Grand Finale</div>-->
    <div>Persistant Innovex Award (Rs. 5,000/-)</div>
</div>
         <span class="right-container-arrow"></span>
         </div>
     </div>
    
    
     </div></div></div></div></div>
    </div></div>
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
   
    
   
    </script>
   

</html>