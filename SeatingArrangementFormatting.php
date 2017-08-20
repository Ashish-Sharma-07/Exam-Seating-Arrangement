<?php
session_start();
require('seatAllot.php');
$seDefaulter = explode(",",trim($_POST['seDefaulter']));
$teDefaulter=explode(",",trim($_POST['teDefaulter']));
$beDefaulter = explode(",",trim($_POST['beDefaulter']));
$_SESSION['seDefaulter'] = $seDefaulter;
$_SESSION['teDefaulter'] = $teDefaulter;
$_SESSION['beDefaulter'] = $beDefaulter;

$se = array();
$seName = array();
$te = array();
$teName = array();
$be = array();
$beName = array();

$conn = mysqli_connect('localhost','root','root') or die();
$db = mysqli_select_db($conn,'seatingarrangement');

$sqlSE = "Select Roll_No,CONCAT(`first_name`,\" \", `last_name`) from secondyear where Roll_No not in (".$_POST['seDefaulter'].")";
$sqlTE = "Select Roll_No,CONCAT(`first_name`,\" \", `last_name`) from thirdyear where Roll_No not in (".$_POST['teDefaulter'].")";
$sqlBE = "Select Roll_No,CONCAT(`first_name`,\" \", `last_name`)from fourthyear where Roll_No not in (".$_POST['beDefaulter'].")";

$sqlResult1 = mysqli_query($conn,$sqlSE);
$sqlResult2 = mysqli_query($conn,$sqlBE);
$sqlResult3 = mysqli_query($conn,$sqlTE);

if($sqlResult1!=false)
{
while ($row = mysqli_fetch_array($sqlResult1)) {
$seName[$row[0]]=$row[1];
}
}
else
echo"Error in Fetching data";

if($sqlResult3!=false)
{
while ($row = mysqli_fetch_array($sqlResult3))
{
$teName[$row[0]]=$row[1];
}
}
else
echo"Error in Fetching data";


if($sqlResult2!=false)
{
 while ($row = mysqli_fetch_array($sqlResult2))
 {
   $beName[$row[0]]=$row[1];
 }
}
else
 echo"Error in Fetching data";  

mysqli_close($conn);

$seSlots = array_chunk($seName,34);
$teSlots = array_chunk($teName,34);
$beSlots = array_chunk($beName,34);

/*foreach($seName as $key => $val)
echo"$key $val"."<br/>"*/
//var_dump($_SESSION);
seatAllot($seName,$teName,$beName);
?>
