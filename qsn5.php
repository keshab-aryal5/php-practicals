<?php
function testNumber($number) {
$result = ($number > 10) ? (($number > 20 )? (($number > 30)? "Greater than 30" : "Greater than 20") : "Greater than 10") :
"Less than or equal to 10";
return $result;
}
$number1 = 15;
$number2 = 25;
$number3 = 35;
echo "Number $number1 is " . testNumber($number1) . "<br>";
echo "Number $number2 is " . testNumber($number2) . "<br>";
echo "Number $number3 is " . testNumber($number3) . "<br>";
?>
