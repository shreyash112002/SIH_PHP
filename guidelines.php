<?php include 'header.php';?>
<!DOCTYPE html>
<head lang="en">
	<title>Guidelines</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel = "stylesheet" type = "text/css" href = "loginform.css">		<!-- Stylesheet only for login form -->
	<!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">-->
	<!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
 <!-- <script src="bootbox.min.js"></script>-->

</head>
<style>
    .panel-heading{
       text-align:center;
       font-size:1.8rem;
       margin-top:50px;
       margin-bottom:50px;
       color:#275f94;
       
    }
    .panel-body{
        margin:20px;
        font-family:san-serif;
    }
    button{
        padding:10px;
        border:none;
        border-radius:6px;
        
        background-color:#3586ff;
    }
button:hover{
    background-color:#275f94;
}
   
</style>
<body>
 <div class="container-fluid col-md-12" >
<div class="row">


<div class="col-md-12">
<div class="panel panel-info ">
<div class="panel-heading"> <h3> <p class="font-weight-italic">Guidelines and Rules</p> </h3> </div>

<div class="panel-body">
<hr>


<?php     $query = "select lastdate as l1,ihdate as l2, time as l3,link as l4,topteams as l5 from settings ;";
                         
                          
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc();
                          $dayOfWeek = date("l", strtotime($row['l2'])); 
$dayOfWeekNumber = date("N", strtotime($date)); 
?>

  <div class="panel-body" style="font-family: 'Times New Roman, Times, serif';
  font-size: 16px; padding:  "> <strong> Important Dates : </strong> 
    <ol style="color:#545659; margin-top:20px; margin-bottom:20px;line-height:1.4rem;"> 
    <li> Last date for Team Registration : <strong> <?php echo $row['l1']?> </strong> </li> 
   	<li> Date for Internal Hackathon :  <strong><?php echo $row['l2'];?></strong>  (<?php echo $dayOfWeek ;?>) Time: <strong><?php echo  $row['l3'] ?></strong> onwards </li>
  <!--  <li> Date for Internal Hackathon (Hardware Edition) :  11/03/2022 (Friday) Time: 9 am onwards </li> -->
    <li> Schedule for Presentation will be published one day before Internal Hackathon </li> 
    
 </ol></div>
  <hr>
   <div class="panel-body" style="font-family: 'Times New Roman, Times, serif';
  font-size: 16px; padding: 5px"> <strong> Guidelines </strong> 
    <ol  style="color:#545659; margin-top:20px; margin-bottom:20px;line-height:1.4rem;"> 
    <li> Problem statements for both software and hardware edition are available at <a href='<?php echo $row['l4']; ?>' target='_blank' style="color: #275f94;font-weight:bold;text-decoration:underline;"> <?php echo $row['l4']; ?> </a> 
	</li>
  	<li> Each team can submit <strong>proposal for max 3 problem statement</strong> , without changing team members. <strong> <i> Only Problem statement code is required , No need to keep presentation ready during the registration of team</i>. </strong> </li>
    <li> Teams are  encouraged to form Inter-Department teams.</li>  
    <li> Teams need to prepare the presentation of their Ideas and the solution as described in the format attached herewith and not exceding 5 slides.</br><br>
    <button><a href="asset/sih2022_presentation_format.pptx"style="color:white;"target='_blank'>Presentation Format</a></button>
    <button><a href="asset/Prev_sample_presentations.zip"style="color:white;"target='_blank'>Previous Year Sample Presentations</a></button>
   
    </br><br>
    
   <!-- <button> <a href='asset/sih2022_presentation_format.pptx' target='_blank' style="color:white;background-color:#3586ff; padding:10px; border-radius:6px;">Presentation Format</a>-->
   <!-- </button> <button> <a href='asset/Prev_sample_presentations.zip' target='_blank'style="color:white;background-color:#3586ff;background-color:#3586ff; padding:10px; border-radius:6px;"> Previous Year Sample Presentations</a> </button> </li><br> -->
  	<li> Each team will be given 10 min for presentation and 10 min for Q/A per problem statement.</li>
  
  
  	<li> All the team members participating in Internal Hackthon will be given participation certificate.</li>  
 </ol></div>
  <hr>
    <div class="panel-body" style="font-family: 'Times New Roman, Times, serif';
  font-size: 16px; padding: 5px"> <strong> Rules </strong> 
    <ol  style="color:#545659; margin-top:20px; margin-bottom:20px;line-height:1.4rem;"> 
     <li> <strong>Selection Criteria :</strong>   
Evaluation criteria will include novelty of the idea, complexity, clarity, process diagram and details in the prescribed format, feasibility, practicability, sustainability and scale of impact. Teams with <strong> User Interface / Wireframes & PoC </strong>will be prefered.
</li> 
    <li> Students need to form a <strong>team of 6 members including at least one female member as mandatory </strong>, encouraged to have atleast 2 or more. </li>
    <li> Teams for Internal Hackathon should remain same for Final SIH, no change within members is allowed. </li> 
    
    <li> The top 7 teams (5 teams for Software edition and 2 teams for Hardware edition) will be selected for second round of SIH  by the Jury panel. </a> 
</li> 
    <li>  Decision of the jury panel would be final.</li>
 </ol></div>
   <hr>
    <div class="panel-body" style="font-family: 'Times New Roman, Times, serif';
  font-size: 16px; padding: 5px">
  	
 <style>
  table {
margin:0 auto;
    color:#38393b;
  }
</style>

<table border="1" cellspacing="0" class="table table-hover">
  <colgroup width="229"></colgroup>
  <colgroup width="154"></colgroup>
  <colgroup width="155"></colgroup>
  <colgroup width="170"></colgroup>
<tbody>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" colspan="4" align="center" valign="middle" height="17"><strong>Rubrics (70)</strong></td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="17"><strong>&nbsp;</strong></td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">(0-2)</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">(3-5)</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">(6-10)</td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="46">Clarity of the problem statement</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">No clarity of problem statement as per the requirement specified</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Partial clarity of problem statement as per the requirement specified</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Complete clarity of problem statement as per the requirement specified</td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="76">Identification of stakeholders</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Identified stakeholders as mentioned in the problem statement</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Identified few stakeholders based on the impact of the problem</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Identified all the stakeholders based on the impact of the problem through the process of design thinking</td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="91">Proposed solution</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Solution lacks the novelty of the idea, no feasibility study has been done and solution are like a patch-fix solution</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">The solution has the novelty of the idea, some feasibility study is carried out and identified the scale of impact.</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">The solution has the novelty of the idea, feasibility, practicability, sustainability and identified the scale of impact.</td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="91">Use case/process flow</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">No clarity of process or information flow as per the problem requirements</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Depiction of use case/process flow without appropriate diagrammatic representation/tools as per problem requirements</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Complete clarity of use case and/or process flow well depicted through diagrammatic representation/tools as per problem requirements</td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="76">Justification of Technology stack</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">No appropriate justification of technological stack used</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Appropriate justification of technological stack used as per problem statement</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Selection of technological stack based on the ability to upscale, optimize the cost manufacturing/operation / deployment.</td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="55">USP of the proposed solution</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">Identified at least one USP for the problem statement</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">Identified at lease two USP for the problem statement</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">Identified more than two USP for the problem statement</td>
</tr>
<tr>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="47">Wireframe model / Prototype / PoC</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">Wireframe model / PoC is not available for solution</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">Wireframe model / PoC is available for Partial solution</td>
<td style="border: 1px solid #2a2b2b;padding:10px" align="center">Wireframe model / PoC is available for the complete solution</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>


  </div>
</div>



</div>
</div>
</div>
</div>
</div>
<br style="clear: both;" />
</body>
 <div class="container7">
 <!--<footer class="footer">
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
   
    <p>&copy;2023 Don Bosco Institute of Technology | All Rights Reserved</p>
  </footer>-->
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