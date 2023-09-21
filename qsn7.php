<?php
// Write a PHP program to check if a number is an Armstrong number or not.
function isArmstrong($number) {
$num = $number;
$numberOfDigits = strlen($number);
$sum = 0;
while ($num > 0) {
$digit = $num % 10;
$sum += pow($digit, $numberOfDigits);
$num = (int)($num / 10);
}
return ($sum === $number);
}
$number1 = 153; 
$number2 = 370; 
$number3 = 123; 
echo "Number $number1 is " . (isArmstrong($number1) ? "an 
Armstrong number" : "not an Armstrong number") . "<br>";
echo "Number $number2 is " . (isArmstrong($number2) ? "an 
Armstrong number" : "not an Armstrong number") . "<br>";
echo "Number $number3 is " . (isArmstrong($number3) ? "an 
Armstrong number" : "not an Armstrong number") . "<br>";
?>
