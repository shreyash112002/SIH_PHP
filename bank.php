  <?php include 'header.php';?>
  <?php require 'connect.php';?>
  <form  class="form-horizontal" method="post" >
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

      </style><br><br><Br>
  <!--<div id="div_bank" class="form-group required ">--><div style="text-align: center;">
                    <h2> Enter Bank Details </h2><br>
               </div> <div style="text-align: center;"> 
                    <br>
                    
                    <input class="textfield" id="accno" class="textfield" maxlength="50" name="accno" required  placeholder="Acc No." style="margin-bottom: 10px" type="text" /><br>
                    
                    <input class="textfield" id="ifsc" class="textfield" maxlength="50" name="ifsc" required  placeholder="IFSC code" style="margin-bottom: 10px" type="text" /><br>
                    <input class="textfield" id="brno" class="textfield" maxlength="50" name="brno" required  placeholder="Branch No." style="margin-bottom: 10px" type="text" /><br>
                    <input class="textfield" id="bname"class="textfield" maxlength="10" name="bname" required  placeholder="Bank Name" style="margin-bottom: 10px" type="text" />
                    <br>
                  

                </div>
            </div>
              <div class="form-group">
            <div class="aab controls col-md-4 "></div><br><br>
            <div class="controls col-md-8 " style="text-align: center;">
                <input type="submit" name="submit" style="background-color: #007bff; color: #fff; border-color: #007bff; border-radius: 5px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;"value="submit" class="btn btn-primary btn btn-info" style="margin-top:50px; margin-left:40%;" id="submit-id-submit" />
            </div>
        </div>
	</form>
             <?php
                if(isset($_POST['submit']))
                {
                   
             //       $mem='$mem';
                          $sid = $_GET['sid'];


                    $accno=addslashes($_POST["accno"]);
                    $ifsc=addslashes($_POST["ifsc"]);
                    $brno=addslashes($_POST["brno"]);
                    $bname=addslashes($_POST["bname"]);
                    if(!empty($accno) && !empty($ifsc) && !empty($brno) && !empty($bname)) {
  
                        $sql1="INSERT INTO bank_details VALUES('$accno','$ifsc','$brno','$bname','$sid')";  
                         $conn->query($sql1);
                    }
                        // echo $bname,$brno,$ifsc,$sid;
                        // echo "Hello";
                }
?>
          