<?php

$roll = array(1,2,3,4,5,6,7,8,9,0,10,11,12,13,14,15,16,17,18,19,20);
print_r($roll);

$rollSlot = array_chunk($roll,5);

echo"<br/><br/>";

print_r($rollSlot);
echo"<br/>";
print_r(count($rollSlot));
echo"<br/><br/>";
for($i=0;$i<count($rollSlot);$i++)
{
   print_r(count($rollSlot[$i]));
   echo"<br/>";
}
?>