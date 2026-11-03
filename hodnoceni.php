<?php
$test1 = "75";
$test2 = "90";
$test3 = "60";
$studentName = "Jan Novák";
$result = $test3 + $test2 + $test1;
$results = $result /3;
$grade = 0;
if ($result > 270) {
 $grade = 1;
} else if ($result < 270 && $result > 225) {
    $grade = 2;
} else if ($result < 225 && $result > 180) {
    $grade = 3;
} else if ($result < 180 && $result > 120) {
    $grade = 4;
} else if ($result < 120 && $result > 0) {
    $grade = 5;
}
echo $studentName;
echo "<br>";
echo $grade;
echo "<br>";
echo $result;
echo "<br>";
echo $test1;
echo "<br>";
echo $test2;
echo "<br>";
echo $test3;
echo "<br>";
echo $results;
