<?php
session_start();
require('fpdf.php');

class timeTable extends fpdf
{
	function Header()
	{
	$this->SetMargins(3,3,3);
	$this->Ln();
	$this->SetFont('Times','B',24);
	$this->Cell(0,1,"Don Bosco Institute Of Technology",0,1,'C');
	$this->SetFont('Times','B',14);
	$this->Cell(0,1,"Department Of Information Technology",0,1,'C');
	$this->Cell(0,1,$GLOBALS['Year'],0,1,'C');
	$this->Cell(0,1,$GLOBALS['Exam'],0,1,'C');
	$this->SetFont('Times','B',12);
	$date = Date("d/m/Y");
	$this->Cell(0,1,"Date: $date",0,1,'L');
	$this->Ln();
	}

	function Footer()
	{
	$this->SetY(-3);
	$this->	Cell(10,0,"____________________");
	$this->SetX(-(9));
	$this->Cell(0,0,"____________________");
	$this->SetY(-2);
	$this->	Cell(4.2,1,"Professor incharge",0,0,'C');
	$this->SetX(-9);
	$this->Cell(4,1,"HOD",0,0,'C');
	}
	function SingleDataBlock($Date,$from,$to,$duration,$sub)
	{
		$this->Cell(3,1,"$Date",1,0,'C');
		$this->Cell(3,1,"$from",1,0,'C');
		$this->Cell(3,1,"$to",1,0,'C');
		$this->Cell(3,1,"$duration",1,0,'C');
		$this->Cell(3,1,"$sub",1,0,'C');
		$this->Ln();
	}

	function DoubleDataBlock($Date,$from1,$to1,$duration1,$sub1,$from2,$to2,$duration2,$sub2)
	{
		$this->Cell(3,2,"$Date",1,0,'C');

		$this->Cell(3,1,"$from1",1,0,'C');
		$this->Cell(3,1,"$to1",1,0,'C');
		$this->Cell(3,1,"$duration1",1,0,'C');
		$this->Cell(3,1,"$sub1",1,0,'C');

		$this->Ln();
		$this->SetX(($this->GetX())+3);

		$this->Cell(3,1,"$from2",1,0,'C');
		$this->Cell(3,1,"$to2",1,0,'C');
		$this->Cell(3,1,"$duration2",1,0,'C');
		$this->Cell(3,1,"$sub2",1,0,'C');

		$this->Ln();

	}

	function Title()
	{
	$this->SetFont('Times','B',14);
	$this->Cell(3,2,"Date",1,0,"C");
	$x = $this->GetX();
	$y = $this->GetY();
	$this->Cell(6,1,"Time",1,0,"C");
	$this->Cell(3,2,"Duration",1,0,"C");
	$this->Cell(3,2,"Subject",1,0,"C");
	$this->SetY($y+1);
	$this->SetX($x);
	$this->SetFont('Times','I',14);
	$this->Cell(3,1,"From",1,0,"C");
	$this->Cell(3,1,"To",1,0,"C");
	$this->Ln();
	}
}

//print_r($_POST['subject6']);

$GLOBALS['Year']= $_POST["Year"];
$GLOBALS['Exam'] = $_POST["Exam"];
$Start1 = $_POST["StartTime1"];
$Start2 = $_POST["StartTime2"];
$Finish1 = $_POST["FinishTime1"];
$Finish2 = $_POST["FinishTime2"];

$Duration1 = $Finish1-$Start1;
$Duration2 = $Finish2-$Start2;

$Arrange = explode("  ",trim($_POST["Arrangement"]));
$arrayTimeSlice =array_slice($_POST,8);//look at the $_post[]
$timeTable = array_chunk($arrayTimeSlice,count($arrayTimeSlice));

if(!isset($_SESSION[$GLOBALS['Year']]))
{
$_SESSION[$GLOBALS['Year']] =$_POST;
}
var_dump($_SESSION);
//session_destroy();
/*$timeTable = array_values($arrayTimeSlice);
//print_r($_POST);
//echo"<br/><br/>";
//print_r($Arrange);

$i=0;
$tt = new timeTable("P","cm","A4");
$tt->AddPage();
$tt->Title();

foreach ($Arrange as $key => $value) {
	if($value == 1)
	{
	$Dt = $timeTable[$i++];
	$sub = $timeTable[$i++];
   $tt->SingleDataBlock($Dt,$Start1,$Finish1,$Duration1,$sub);
	}
	if($value == 2){
	$Dt = $timeTable[$i++];
   $sub1 = $timeTable[$i++];
   $sub2 = $timeTable[$i++];
   $tt->DoubleDataBlock($Dt,$Start1,$Finish1,$Duration1,$sub1,$Start2,$Finish2,$Duration2,$sub2);
	}

}
$tt->output();*/
?>
