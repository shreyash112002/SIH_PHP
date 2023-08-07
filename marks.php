<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
body{
    font-family: sans-serif;
    margin: 0;
    background-color: white;
    overflow-x: hidden;
}

.leaderboard{
    max-width: 55em;
    margin-right: auto;
    margin-left: auto;
    display: block;
    padding: 1em;
    padding-top: 2em;
}

}
.description{
    display: inline-block;
    text-align: center;
    margin: 1em;
    color: black;
    transform: translateY(-5em);
}

table{
    margin-top: 2em;
    width: 50em;
    color: grey; 
    margin-right: auto;
    margin-left: auto;
}
table thead{
    opacity: .8;
}
table img{
    width:2em;
    height: 2em;
    border-radius: 100%;

}
table td{
    max-width: 4em;
    padding: .5em;
    text-align: center;
}
tbody tr{
    box-shadow: 0 2px rgba(100,100,100,.5);
    border-radius: 10px;
}
tbody tr:hover{
    transform: scale(1.025);
    transition: .2s ease-in-out;
}
tbody tr td:nth-child(2) p{
    display: inline-block;
    transform: translateY(-.5em);
    padding-left: .5em;
    text-align: left;
}
table td:nth-child(2){
    max-width: 5em;
}
tbody tr:nth-child(odd){
    background-color:white;
}

    .description{
        display: block;
        transform: translateY(0);
    }
    table{
        max-width: 100vw;
        overflow-x: scroll;

    }

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
    tbody tr:nth-child(even) {
     background-color: #fff; 
}
.bg td{
     background-color:#090c54;
}
    </style>
<body>
    
 <div class="container-fluid col-md-12" >
<div class="row">


<div class="col-md-12">
<div class="panel panel-info ">
<div class="panel-heading"> <h3> <p class="font-weight-italic">SIH Total Marks</p> </h3> </div>
    
   
            <table>
                <tbody>
                    <tr class='bg'>
                         <td style="color:#fff ;">
                            Rank
                        </td>
                        <td style="color:#fff; ">
                            Team Name
                        </td>
                        <td style="color:#fff; ">
                            Problem Statement
                        </td >
                        <td style="color:#fff;">
                            Marks
                        </td>
                    </tr>
                
                
                      <?php
                      
                      $query = "select topteams as f1 from settings;";
                         
                          
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc();
$selectQuery = "SELECT team_detail.teamName as teamname, team_ideas.avgmarks as avg_marks, teamPSCode as id 
                FROM team_detail 
                JOIN team_ideas ON team_detail.teamId=team_ideas.teamId 
                WHERE YEAR(team_detail.dateOfCreation) = 2023 
                GROUP BY teamPSCode 
                ORDER BY avg_marks DESC 
                LIMIT " . $row['f1'] . ";";

                    $result1 = $conn->query($selectQuery);
                    $var=0;
                    while($row = $result1->fetch_assoc()){
                    
                    $var=$var+1;?>
                    
                    <tr>
                                            <!--<td><td>-->
                    <td id="winner"><?php echo $var ?></td>
                    <td><?php echo $row['teamname']; ?></td>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['avg_marks']; ?></td>
                    
                    
                    </tr>
             
                
            <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
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
    // function search(){
    //     var text = document.getElementById('search').value;
    //     const tr = document.getElementsByTagName('tr');
    //     for (let i=1;i<tr.length;i++){
    //         if(!tr[i].children[1].children[1].innerHTML.toLowerCase().includes(
    //             text.toLowerCase()
    //         )){
    //             tr[i].style.display = 'none';
    //         }
    //         else{
    //             tr[i].style.display = '';
    //         }
    //     }
    // }
</script>
