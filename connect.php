 <?php


date_default_timezone_set('Asia/Kolkata'); //define local time
$logts = date('Y-m-d H:i:s');
/*
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sih";
*/

$servername="shareddb-r.hosting.stackcp.net";
//$servername="mysql.stackcp.com:51303";
$username="sih2020-3132331d3a";
$password="Sih(2020)";
$dbname="sih2020-3132331d3a";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
else
{

    $sql3="SET GLOBAL time_zone = 'Asia/Calcutta' and SET time_zone = '+05:30' and SET @@session.time_zone = '+05:30'";
    $result3=$conn->query($sql3);
    if (!$result3)
    {
        trigger_error('Invalid query: ' . $conn->error);
    }

}*/
	//echo "Connected successfully";
?>
