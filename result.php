<?php include 'header.php';?>

<!DOCTYPE html>
<head lang="en">
	<title>DBIT-SIH-Result</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel = "stylesheet" type = "text/css" href = "loginform.css">		<!-- Stylesheet only for login form -->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="bootbox.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>


</head>
<body>

<div class="container-fluid col-md-12" >
<div class="row">
<?php require 'connect.php';?>
<?php require 'util.php';?>

<style>
.card {
float: left;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 15%;
  border-radius: 5px;
  background-color: lightyellow;
  margin : 10px 8px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;

}
</style>



<div class="col-md-12">
	<div class="col-md-12">
	
	<div class="panel panel-info ">
	
	<div class="panel-heading">  <p class="font-weight-italic">Top teams from Internal Hackathon for Smart India Hackathon-2020</p></div>
	
	<div class="panel-body">
   
	<div class="container col-md-12" id="users">
	


 <div class="container">
   <div id="adduser" style=" margin-top:10px" class="mainbox col-md-10">
        <h3>Congratulation  to all the teams for participating in Internal Hackhathon for Smart India Hackathon-2020</h3>
          <div class="alert alert-warning" role="alert">
                <ul>
                  <li><strong> All the teams (Winners & Waitlist) have to email the presenation to 'nilesh.dbit@gmail.com' by 07/02/2019 11:59 PM. Kindly mention "TeamName_TeamLeaderName_PSCode" in your subject  </strong>
                  </li>
                  <li><strong>  Waitlist teams will be considered only if SIH organizers increase the Quota of 7 team.  </strong>
                  </li>
                </ul>
                
            </div>

              <div class="alert alert-info" role="alert">
                <ul>
                  <li> Team members can enroll to Online training course on "Designing Digital Solution". <a href="https://swayam.gov.in/nd2_aic19_de01/preview" target="_blank"> Click Here to enroll </a> </li>

                   <li>  Use Cisco industry proven platforms to win the challenge! Build great digital solutions, for the mobile world. <a href="https://developer.cisco.com/site/sih/?utm_campaign=sih20&utm_source=website&utm_medium=sih-web" target="_blank"> Click Here for more details </a> </li>

                   <li> Explore the future of digital transformation with AWS at Smart India Hackathon 2020. <a href="http://awssih2020.com/" target="_blank"> Click Here for more details </a> </li>
                </ul>
                
            </div>
            
           <div class="panel-body  " >
  
            <table class ="table table-responsive table-hover" border="0" cellspacing="0"><colgroup width="85"></colgroup> <colgroup width="146"></colgroup> <colgroup width="222"></colgroup> <colgroup width="258"></colgroup> <colgroup width="107"></colgroup>
<tbody>
<tr>
<td style="border: 1px solid #000000;" align="center" height="20"><strong><span style="font-family: Liberation Serif; font-size: medium;">Sr. No. </span></strong></td>
<td style="border: 1px solid #000000;" align="center"><strong><span style="font-family: Liberation Serif; font-size: medium;">Team Name </span></strong></td>
<td style="border: 1px solid #000000;" align="center"><strong><span style="font-family: Liberation Serif; font-size: medium;">Team Leader </span></strong></td>
<td style="border: 1px solid #000000;" align="center"><strong><span style="font-family: Liberation Serif; font-size: medium;">Team Members</span></strong></td>
<td style="border: 1px solid #000000;" align="center"><strong><span style="font-family: Liberation Serif; font-size: medium;">PS Number </span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" colspan="5" align="center" valign="middle" height="20"><strong><span style="font-family: Liberation Serif; font-size: medium;">Winner &ndash; Software Edition</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">1</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Blitzkrieg</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Xavier D'souza (TE-IT)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Shreya Ghute (TE-IT)<br />gaurav Jain (TE-IT)<br />Viraj Gaonkar (TE-IT)<br />Jevina Verghese (TE-IT)<br />Srushti Satardekar (TE-IT)</span></td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">DR112</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">2</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Runtime Terror </span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Taaha Kazi (TE-COMP)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Jeslyn Jaison (TE-COMP)<br />Yash Bitla (TE-COMP)<br />Arjun Chavan (TE-COMP)<br />Sasha Pais (TE-COMP)<br />Alan Tom (TE-COMP)</span></td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">NM383</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">3</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Utkarsh</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Viraj Tandel (TE-IT)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Saurabh Yadav (TE-IT)<br />Sanket Deshmukh (TE-IT)<br />Afif Shaikh (TE-IT)<br />Winston Sequeira (TE-IT)<br />Priya Singh (TE-IT)</span></td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">DB126</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">4</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">The incodeibles</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Vaishnavi Ransubhe (SE-IT)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Amish Thekke Parambil (SE-IT)<br />Tanmay Salunke (SE-IT)<br />Kshitij Rao (SE-IT)<br />Abhijeet Ringe (SE-IT)<br />Purva Dharmadhikari (SE-IT)</span></td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">VA47</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">5</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Code_it_out</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Mushira Shaikh (TE-IT)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Ishmeet Kaur (TE-IT)<br />Leyton Dsilva (TE-IT)<br />Ganesh Mastud (TE-IT)<br />Erika Pulican (TE-IT)<br />Raveena Mariappan (TE-IT)</span></td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">DN260</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" colspan="5" align="center" valign="middle" height="20"><strong><span style="font-family: Liberation Serif; font-size: medium;">Winner &ndash; Hardware Edition</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">1</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Team Vortex</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Vishal Achari (TE-MECH)</span></td>
<td style="border: 1px solid #000000;" align="left">Rahul Kadam (TE-MECH)<br />Nihar Chavan (TE-MECH)<br />Sahil Narkar (TE-MECH)<br />Tanmay Bora (TE-MECH)<br />Gayatree Hatle (TE-MECH)</td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">SS44</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">2</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Squadron</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">ROHAN PATKAR (TE-MECH)</span></td>
<td style="border: 1px solid #000000;" align="left">SHOUNAK SASANE (TE-MECH)<br />ANJANEY THAKUR (TE-MECH)<br />VINIT MORE (TE-MECH)<br />APARNA KULKARNI (TE-EXTC)<br />NIKHILESH CHAKRAVARTY (TE-EXTC)</td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">AG51</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" colspan="5" align="center" valign="middle" height="20"><strong><span style="font-family: Liberation Serif; font-size: medium;">Waitlist &ndash; Software Edition</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">1</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">BDTC</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Roshan James (BE-IT)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Calden Rodrigues (BE-IT)<br />Chaitanyakrishna Dukkipaty (BE-IT)<br />Kyle Lobo (BE-IT)<br />Pratik Nerurkar (BE-IT)<br />Sarah Solkar (BE-IT)</span></td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">NM380</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">2</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Alpha</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Haramal Singh Liddar (SE-IT)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Vaishnav Mulay (SE-IT)<br />Pranav Yadav (SE-IT)<br />Aditya Virdhe (SE-IT)<br />Malvika Shetty (SE-IT)<br />Shruti Gupta (SE-IT)</span></td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">NM385</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" colspan="5" align="center" valign="middle" height="20"><strong><span style="font-family: Liberation Serif; font-size: medium;">Waitlist &ndash; Hardware Edition</span></strong></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">1</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">The Noob_Club :)</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Nitin Kak (SE-IT)</span></td>
<td style="border: 1px solid #000000;" align="left">Roschlynn Michael D'souza (SE-IT)<br />Francina Godwin Pali (SE-IT)<br />Suma Sunil Nagral (SE-IT)<br />Allen Frank Cordeiro (SE-IT)<br />Anish Unnikrishnan Nair (SE-COMP)</td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">CK117</span></td>
</tr>
<tr>
<td style="border: 1px solid #000000;" align="center" height="77"><span style="font-family: Liberation Serif;">2</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Mech Marvel</span></td>
<td style="border: 1px solid #000000;" align="left"><span style="font-family: Liberation Serif;">Alexius Nunes (TE-MECH)</span></td>
<td style="border: 1px solid #000000;" align="left">Abhishek Gavali (TE-MECH)<br />Elsa Mathew (TE-MECH)<br />Edwin George (TE-MECH)<br />Kevin Frank (TE-MECH)<br />Ronnie Fernandes (TE-MECH)</td>
<td style="border: 1px solid #000000;" align="center"><span style="font-family: Liberation Serif;">PG175</span></td>
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
			</div>
		</div>


	</div>

</body>
