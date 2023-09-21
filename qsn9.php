<!-- Qno.9:
Write a PHP program to print out the multiplication table upto 5*5
Code: -->
<?php
for ($i = 1; $i <= 5; $i++) {
for ($j = 1; $j <= 5; $j++) {
echo $i * $j . " ";
}
echo "\n";
}
?>