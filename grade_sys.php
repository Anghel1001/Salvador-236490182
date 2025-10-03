<?php
$math = 90;
$english = 94;
$science = 87;
$average = ($math + $english + $science)/3;
if($average >= 90){
    $grade = "A";
} elseif($average >= 80){
    $grade = "B";
} elseif($average >= 70){
    $grade = "C";
} elseif($average >= 60){
    $grade = "D";
} else{
    $grade = "F";
}
echo "Average: " . round($average, 2) . " | Grade: $grade";
?>