<!-- Qno.15:
Write a program which will count the “a” characters in the text “patanacademy”
Code: -->
<?php
$text = "patanacademy";
$characterToCount = "a";
$count = substr_count($text, $characterToCount);
echo "The character '$characterToCount' appears $count times 
in the text.";
?>