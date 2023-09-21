<!-- Qno.14:
Write a PHP script to calculate and print the factorial of a number using a for loop
Code: -->
<?php
function factorial($n) {
 if ($n < 0) {
 return "Factorial is not defined for negative numbers.";
 } elseif ($n == 0 || $n == 1) {
 return 1;
 } else {
 $result = 1;
 for ($i = 2; $i <= $n; $i++) {
 $result *= $i;
 }
 return $result;
 }
}
// Test the function
$number = 5;
$fact = factorial($number);
if (is_numeric($fact)) {
 echo "The factorial of $number i.e $number!= $fact";
} else {
 echo $fact;
}
?>