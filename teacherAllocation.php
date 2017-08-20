<?php

/*
class teacher to store details about the teacher,subject taken,designation, counter to keep track of no. of allocated supervisions,subjectCount to keep track of no.subjects taken
*/
class teachers
{
   private $id = null;
   private $name = null;
   private $subjectCount = null;
   private $designation = null;
   public $counter=null;
   public $subjectList = array();
   
   public function __construct($id,$name,$designation)
   {
      $this->id = $id;
      $this->name =$name;
      $this->designation = $designation;
      $this->counter = 0;
      $this->subjectPush();
   }
   
   private function subjectPush()
   {
      $conn = mysqli_connect('localhost','root','root') or die();
      $db = mysqli_select_db($conn,'seatingarrangement');
      $sql = "SELECT ShortNames FROM `subject` WHERE Lecturer_Id =".$this->id." AND SubjectCode REGEXP '^.*[2,4,6,8]..$'";
      $sqlResult = mysqli_query($conn,$sql);
      if($sqlResult!=false)
      {
      while ($row = mysqli_fetch_array($sqlResult))
         {
            array_push($this->subjectList,$row[0]);
         } 
      }
   }
}

class classRoom
{
   private $classRoomNo = null;
   private $Year = array();
   private $time = null;
   private $subExam = array();
   
   public function __construct()
   {
      
   }
}

/*
A timetable has a date of exam 
A time for exam
One or more subjects
timetable is particular to a year
*/
class timeTable
{
    private $year = null;
    private $slot = null;
    private $dtTmSub = array();

    function __construct($year,$timeTableData)
    {
        $this->year = $year;
        $this->slot = $timeTableData['Arrangemment'];
        $dtTmSub = getTimeTable($timeTableData);
    }

    private function getTimeTable($timeTableData)
    {
        foreach($this->slot as $i)
        {
            for($j=0;$j<$i;$j++)
            {

            }
        }
    }
}

$conn = mysqli_connect('localhost','root','root') or die();
$db = mysqli_select_db($conn,'seatingarrangement');

$sql = "Select * from teachers ";
$sqlResult = mysqli_query($conn,$sql);
$teacherArray = array();
if($sqlResult!=false)
{
   while ($row = mysqli_fetch_array($sqlResult))
   {
      $newTeacher = new teachers($row[0],$row[1],$row[2]);
      array_push($teacherArray,$newTeacher);
   } 
}

else
echo"Error in Fetching data";
mysqli_close($conn);
$a = uasort($teacherArray,function($a,$b){return strcmp(count($a->subjectList),count($b->subjectList));});
var_dump($teacherArray);

$class = new timeTable();
var_dump($class);

?>