<?php include 'header.php';?>
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Toto:wght@500&display=swap" rel="stylesheet">-->
<!--<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">-->
<!--<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Roboto+Condensed&display=swap" rel="stylesheet">-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

<head>
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  

  <title>Contact Page</title>
  <!--<link rel="stylesheet" href="styles.css">-->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet">
    <title>Contact Page</title>
</head>
<style>

  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

:root {
    --red: hsl(0, 78%, 62%);
    --cyan: hsl(180, 62%, 55%);
    --orange: hsl(34, 97%, 64%);
    --blue: hsl(212, 86%, 64%);
    --varyDarkBlue: hsl(234, 12%, 34%);
    --grayishBlue: hsl(229, 6%, 66%);
    --veryLightGray: hsl(0, 0%, 98%);
    --weight1: 200;
    --weight2: 400;
    --weight3: 600;
}

body {
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    
}
.panel-heading{
       text-align:center;
       font-size:1.8rem;
       margin-top:50px;
       margin-bottom:50px;
       color:#275f94;
       
    }

.attribution { 
    font-size: 11px; text-align: center; 
}
.attribution a { 
    color: hsl(228, 45%, 44%); 
}

h1:first-of-type {
    font-weight: var(--weight1);
    color: var(--varyDarkBlue);

}

h1:last-of-type {
    color: var(--varyDarkBlue);
}


.container4 {
  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 15px;
}
.intro-area {
  /*   background: */
  /*url(images/2.jpg);*/
  height:30vh;
 margin-bottom:-40px;
  display: flex;
  align-items: center;
  text-align: center;
  color: #fff;
}
.intro-area h2 {
  font-size: 50px;
  font-weight: 300;
  line-height: 70px;
  margin-bottom: 25px;
  padding-left:30px;
  color:white;
}

@media screen and (max-width: 767px) {

  .intro-area h2 {
    font-size: 50px;
    margin-bottom: 15px;
  }  
  /* navbar css for mobile end */
}
/* mobile breakpoint end */
@media screen and (max-width: 950px) {

  .intro-area h2 {
    font-size: 50px;
    margin-bottom: 15px;
  }  
  /* navbar css for mobile end */
}






.box p {
    line-height:30px;
    color: var(--grayishBlue);
   font-size:1.2rem;
   font-family: 'Roboto', sans-serif;
}

.box h2 {
    color:#5d6163;
    font-size:1.3rem;
    
}

.box {
    border-radius: 5px;
   box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    padding: 30px;
    margin: 40px;
  border: 3px solid transparent;
  background-color:#fff;
}


.box img {
    float: right;
    height:100px;
    width:100px;
    border-radius:50%;

}


@media (max-width: 420px){
    .box img{
        display:none;
    }
    .box {
        text-align: left;}

   
}

@media (max-width: 460px) {
    .box {
        height: 200px;
        
        text-align: left;
        
    }
    .box img{
        margin-top:-90px;
        margin-left:10px;
      
    }
   .box h2{
       font-size:1.1rem;
   }
   .box p{
       font-size:1rem;
   }

}


@media (max-width: 950px) and (min-width: 450px) {
    .box {
        text-align: left;
        height: 180px;
        
    }
    .box img{
        margin-top:-110px;
    }
}

.cyan {
    border-top: 3px solid var(--cyan);
    
}
.red {
    border-top: 3px solid var(--red);
}
.blue {
    border-top: 3px solid var(--blue);
}
.orange {
    border-top: 3px solid var(--orange);
}

h2 {
    color: var(--varyDarkBlue);
    font-weight: var(--weight3);
}


@media (min-width: 950px) {
    
    .row1-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .row2-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .box-down {
        position: relative;
        top: 150px;
    }
    .box {
        width: 20%;
     
    }
    .header p {
        width: 30%;
    }
    
    
    
}
    .panel-heading{
        text-align:center;
    }
.panel{
   
    padding-bottom:80px;
}
.row1-container{
    margin-top:80px;
}
@property --angle {
  syntax: '<angle>';
  initial-value: 90deg;
  inherits: true;
}

@property --gradX {
  syntax: '<percentage>';
  initial-value: 50%;
  inherits: true;
}

@property --gradY {
  syntax: '<percentage>';
  initial-value: 0%;
  inherits: true;
}




:root {
	--d: 2500ms;
	--angle: 90deg;
	--gradX: 100%;
	--gradY: 50%;
	--c1: #1779ff;
	--c2: rgba(168, 239, 255, 0.1);
}


.blue:hover{
   	border: 0.25rem solid;

	border-image: conic-gradient(from var(--angle), var(--c2), var(--blue) 0.1turn, var(--blue) 0.15turn, var(--c2) 0.25turn) 30;
	animation: borderRotate var(--d) linear infinite forwards;
}
.cyan:hover{
   	border: 0.25rem solid;

	border-image: conic-gradient(from var(--angle), var(--c2), var(--cyan) 0.1turn, var(--cyan) 0.15turn, var(--c2) 0.25turn) 30;
	animation: borderRotate var(--d) linear infinite forwards;
}
.red:hover{
   	border: 0.25rem solid;

	border-image: conic-gradient(from var(--angle), var(--c2), var(--red) 0.1turn, var(--red) 0.15turn, var(--c2) 0.25turn) 30;
	animation: borderRotate var(--d) linear infinite forwards;
}
.orange:hover{
   	border: 0.25rem solid;

	border-image: conic-gradient(from var(--angle), var(--c2), var(--orange) 0.1turn, var(--orange) 0.15turn, var(--c2) 0.25turn) 30;
	animation: borderRotate var(--d) linear infinite forwards;
}



@keyframes borderRotate {
	100% {
		--angle: 420deg;
	}
}

@keyframes borderRadial {
	20% {
		--gradX: 100%;
		--gradY: 50%;
	}
	40% {
		--gradX: 100%;
		--gradY: 100%;
	}
	60% {
		--gradX: 50%;
		--gradY: 100%;
	}
	80% {
		--gradX: 0%;
		--gradY: 50%;
	}
	100% {
		--gradX: 50%;
		--gradY: 0%;
	}
}
</style>

<body>


<div class="container-fluid col-md-12" >
<div class="row">


<div class="col-md-12">
<div class="panel panel-info ">
<div class="panel-heading"> <h3> <p class="font-weight-italic">Contact Us</p> </h3> </div>


  <div class="row1-container">
    <div class="box box-down cyan">
      <h2>Prof. Nilesh Ghavate</h2>
      <p>IT<br>nsghavate@gmail.com<br>+913265456235</p>
     <img src="images/contact/prof_nilesh.jfif" alt="">
     
    </div>

    <div class="box red">
      <h2>Prof. Nilesh Ghavate</h2>
      <p>IT<br>nsghavate@gmail.com<br>+913265456235</p>
     <img src="images/contact/prof_nilesh.jfif" alt="">
    </div>

    <div class="box box-down blue">
      <h2>Prof. Nilesh Ghavate</h2>
      <p>IT<br>nsghavate@gmail.com<br>+913265456235</p>
     <img src="images/contact/prof_nilesh.jfif" alt="">
    </div>
  </div>
  <div class="row2-container">
    <div class="box orange">
      <h2>Prof. Nilesh Ghavate</h2>
      <p>IT<br>nsghavate@gmail.com<br>+913265456235</p>
     <img src="images/contact/prof_nilesh.jfif" alt="">
    </div>
  </div>
 </div> </div> </div> </div>
 
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


      

<!--<div class="container">-->
  <!-- Modal -->
<!--  <div class="modal show" id="myModal" role="dialog">-->
<!--    <div class="modal-dialog">-->
    
      <!-- Modal content-->
<!--      <div class="modal-content">-->
<!--        <div class="modal-header panel-info	">-->
         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
     
<!--          <h4 class="modal-title">SIH Internal Hackathon - 2022</h4>-->
<!--        </div>-->
<!--        <div class="modal-body">-->
<!--          <p>Information Technology : Prof. Nilesh Ghavate</p>-->
<!--          <p>Computer :  Prof. Ditty Varghese</p>-->
<!--          <p>EXTC : Prof. Madhavi Pednekar</p>-->
<!--          <p>Mechanical : Prof. Sachin Sheravi</p>-->
<!--        </div>-->

<!--        <div class="modal-footer">-->
<!--         <p style="text-align: left;"> Contact : 9594813901 (nilesh.dbit@gmail.com)</p> -->
<!--        	<a href="index.php" class="btn btn-default okbtn ">Ok</a>-->
<!--           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
<!--        </div>-->
<!--      </div>-->
      
<!--    </div>-->
<!--  </div>-->
  
<!--</div>-->

<!--<?php include 'footer.php';?>-->