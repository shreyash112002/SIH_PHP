<?php


require 'generatePDF.php';

function fetch_data()
{
require 'connect.php';

     $output = '';
     $output .= '
     <h4 align="center">Recharge Report</h4><br /><br />
     <table border="1" cellspacing="0" cellpadding="5">
          <tr>
               <th width="30%">Recharge Id</th>
               <th width="20%">Retailer Id</th>
               <th width="20%">Mobile No.</th>
               <th width="15%">Amount</th>
               <th width="15%">Status</th>
          </tr>
     ';


     $sql3="SELECT * FROM rechargetransactions where isDelete=0";
     $result=$conn->query($sql3);
     if (!$result)
     {
       $output="one";
         trigger_error('Invalid query: ' . $conn->error);
     }
     if($result->num_rows>0)
     {

     while($row=$result->fetch_assoc())
     {
     $output .= '<tr>
                         <td>'.$row["rechargeId"].'</td>
                         <td>'.$row["retailerId"].'</td>
                         <td>'.$row["customerMobile"].'</td>
                         <td>'.$row["rechargeAmount"].'</td>
                         <td>'.$row["rechargeStatus"].'</td>
                    </tr>
                         ';
     }

     $output .= '</table>';
   }
   else {
     $output="some";
   }
     return $output;
}

 $title="RechargeReport";
 $data=fetch_data();
 $fn="Nilesh.pdf";

 genPDF($title,$data,$fn);

?>
