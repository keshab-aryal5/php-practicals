<!-- Qno.21:
Write a PHP program to print table of number -->
<?php
$number = 5;
echo "Multiplication Table for $number:<br>";
for ($i = 1; $i <= 10; $i++) {
$result = $number * $i;
echo "$number x $i = $result <br>";
}
?>