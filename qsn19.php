<!-- Qno.19:
Write a PHP Script to sum of even numbers from 1 to 10
Code: -->
<?php
$sum = 0;
for ($i = 2; $i <= 10; $i += 2) {
$sum += $i;
}
echo "The sum of even numbers from 1 to 10 is: $sum";
?>