<?php
require('seatAllot.php');
$seDefaulter = explode(",",trim($_POST['seDefaulter']));

$teDefaulter=explode(",",trim($_POST['teDefaulter']));

$beDefaulter = explode(",",trim($_POST['beDefaulter']));

$se = array();
$te = array();
$be = array();

$conn = mysqli_connect('localhost','root','root') or die();
$db = mysqli_select_db($conn,'seatingarrangement');

$sqlSE = "Select Roll_No from secondyear where Roll_No not in (".$_POST['seDefaulter'].")";
$sqlResult1 = mysqli_query($conn,$sqlSE);

if($sqlResult1!=false)
{

 while ($row = mysqli_fetch_array($sqlResult1)) {

array_push($se,$row[0]);
}

}

else
echo"Error in Fetching data";

$sqlTE = "Select Roll_No from thirdyear where Roll_No not in (".$_POST['teDefaulter'].")";
$sqlResult3 = mysqli_query($conn,$sqlTE);
if($sqlResult3!=false)
{

 while ($row = mysqli_fetch_array($sqlResult3)) {

array_push($te,$row[0]);
}
 
}

else
echo"Error in Fetching data";


$sqlBE = "Select Roll_No from fourthyear where Roll_No not in (".$_POST['beDefaulter'].")";
$sqlResult2 = mysqli_query($conn,$sqlBE);
if($sqlResult2!=false)
{
//echo"<select>";
 while ($row = mysqli_fetch_array($sqlResult2)) {

array_push($be,$row[0]);
}

}

else
echo"Error in Fetching data";
mysqli_close($conn);

$seSlots = array_chunk($se,34);
$teSlots = array_chunk($te,34);
$beSlots = array_chunk($be,34);

seatAllot($se,$te,$be);
?>
