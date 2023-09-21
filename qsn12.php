<!-- Qno.12:
Write a PHP script that displays 1 2 3 4 5 6 7 8 9 10 numbers on one line
Code: -->
<?php
for ($i = 1; $i <= 10; $i++) {
echo $i;
if ($i < 10) {
echo " ";
}
}
?>
