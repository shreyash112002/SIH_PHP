<?php  include 'header.php';?>
<style>
          .textfield{
  
  padding: 6px;
  padding-left:20px;
 border:none;
 width:240px;
  height: 30px;
  font-size: 13px;
  border-radius: 15px;
 box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
 border-top: 2px solid hsl(180, 62%, 55%);
}
</style>

<!DOCTYPE html>
<head lang="en">
	<title>Admin Settings</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body><form method='POST'>
<br><BR><BR>
<div>
    <h2> Settings Page  </h2>
</div> 

<div style="text-align: center;"> 
    <br>
    <?php
        $query = "select lastdate as l1,ihdate as l2, time as l3,link as l4,topteams as l5 from settings ;";
                         
                          
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc();
    ?>
    <input class="textfield" value ='<?php echo $row['l1']; ?>'  id="lastdate" class="textfield" maxlength="50" name="lastdate" required  placeholder="Last Date of Registration" style="margin-bottom: 10px" type="text" /><br>
    <input class="textfield" value ='<?php echo $row['l2']; ?> 'id="ihdate" class="textfield" maxlength="50" name="ihdate" required  placeholder="Internal Hackathon Date" style="margin-bottom: 10px" type="text" /><br>
    <input class="textfield" value ='<?php echo $row['l3']; ?>' id="time" class="textfield" maxlength="50" name="time" required  placeholder="Time" style="margin-bottom: 10px" type="text" /><br>
    <input class="textfield" value ='<?php echo $row['l4']; ?>' id="link" class="textfield" maxlength="50" name="link" required  placeholder="PS link" style="margin-bottom: 10px" type="text" /><br>
    <input class="textfield" value ='<?php echo $row['l5']; ?>' id="topteams" class="textfield" maxlength="50" name="topteams" required  placeholder="No of Top Teams " style="margin-bottom: 10px" type="text" /><br>
    <br>
</div>
            <div class="controls col-md-8 " style="text-align: center;">
                <input type="submit" name="submit" style="background-color: #007bff; color: #fff; border-color: #007bff; border-radius: 5px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;"value="Submit" class="btn btn-primary btn btn-info" style="margin-top:50px; margin-left:40%;" id="submit-id-submit" />
            </div>
           </form> 
        <br> <form method='POST'>   
<div >
    <h2> Create Concent Form    </h2><br>
</div>   
<div style="text-align: center;"> 
<?php
        $query = "SELECT team_detail.teamName as teamname, team_ideas.avgmarks as avg_marks, teamPSCode as id 
                FROM team_detail 
                JOIN team_ideas ON team_detail.teamId=team_ideas.teamId 
                WHERE YEAR(team_detail.dateOfCreation) = 2023 
                GROUP BY teamPSCode 
                ORDER BY avg_marks DESC ";
$result = $conn->query($query);


// Loop through the query results and generate a checkbox for each row
while ($row = $result->fetch_assoc()) {
echo "<label style='display: block; margin-bottom: 10px;'>
        <input type='checkbox' name='options[]' value='" . $row['teamname'] . "," . $row['id'] . "' style='margin-right: 5px;'>       "
        . $row['teamname']. " - " .$row['id']. "
      </label>";
}

?>
</div><br>
           <div class="controls col-md-8 " style="text-align: center;">
                <input type="submit" name="crco" style="background-color: #007bff; color: #fff; border-color: #007bff; border-radius: 5px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;"value="Create" class="btn btn-primary btn btn-info" style="margin-top:50px; margin-left:40%;" id="submit-id-submit" />
            </div>
</form>
            
            
<!--<br><form method='POST'>-->
<!--<div >-->
<!--    <h2> Add Admin   </h2><br>-->
<!--</div>     -->
<!--<div style="text-align: center;"> -->
<!--    <input class="textfield" id="aid" class="textfield" maxlength="50" name="aid" required  placeholder="Admin Id  " style="margin-bottom: 10px" type="text" /><br>-->
<!--</div><br>-->
<!--            <div class="controls col-md-8 " style="text-align: center;">-->
<!--                <input type="submit" name="addad" style="background-color: #007bff; color: #fff; border-color: #007bff; border-radius: 5px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;"value="Add" class="btn btn-primary btn btn-info" style="margin-top:50px; margin-left:40%;" id="submit-id-submit" />-->
<!--            </div>-->
<!--</form>-->
<?php
                if(isset($_POST['submit']))
                {
                    $lastdate = addslashes($_POST["lastdate"]);
                    $ihdate = addslashes($_POST["ihdate"]);
                    $time = addslashes($_POST["time"]);
                    $link = addslashes($_POST["link"]);
                    $topteams = addslashes($_POST["topteams"]);
            
                    $sql = "UPDATE settings SET lastdate='$lastdate', ihdate='$ihdate', time='$time', link='$link', topteams=$topteams WHERE id=1";
                    if (mysqli_query($conn, $sql)) {
                        
                    } else {
                       
                    }
                    mysqli_close($conn);
                    
                }
                
if (isset($_POST['crco'])) {
  // Get the selected checkboxes from the $_POST array
  $selectedOptions = $_POST['options'];
  
  // Loop through the selected options and process each one
  foreach ($selectedOptions as $option) {
    // Split the option value into its parts using explode()
    $parts = explode(",", $option);
    $teamName = $parts[0];
    $teamId = $parts[1];
    
    
    
    
  }
}

                        // if(isset($_POST['addad']))
                // {
                //     $uid=addslashes($_POST["jid"]);
                //     $pwd = intval($uid."00");
                //     if(!empty($uid) ) {
  
                //         $sql1="INSERT INTO user_login_details VALUES('$uid','$pwd',3)";  
                //          $conn->query($sql1);
                //     }
                // }
?>