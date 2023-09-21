<!-- Qno.10:
Write a PHP program to compute the sum of the digits of a number
Code: -->
<?php
function sumOfDigits($number) {
$numberString = (string)$number; // Convert the number to a string
$sum = 0;
for ($i = 0; $i < strlen($numberString); $i++) {
$digit = $numberString[$i]; // Get each digit as a character
$sum += (int)$digit; // Convert the digit back to an integer and add to the sum
}
return $sum;
}
$number = 12345;
$digitSum = sumOfDigits($number);
echo "Number: $number\n";
echo "Sum of digits: $digitSum\n";
?>
