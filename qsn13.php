<!-- Qno.13:
Write a PHP script using a for loop to add all the integers between 0 and 20 and 
display the sum.
Code: -->
<?php
$sum = 0;
for ($i = 0; $i <= 20; $i++) {
 $sum += $i;
}
echo "The sum of integers from 0 to 20 is: $sum";
?>
