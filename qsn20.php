<!-- Write a PHP Script to sum of odd numbers from 1 to 10 -->
<?php
$sum = 0;
for ($i = 1; $i <= 10; $i += 2) {
$sum += $i;
}
echo "The sum of odd numbers from 1 to 10 is: $sum";
?>