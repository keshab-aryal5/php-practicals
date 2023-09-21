<!-- Qno.11:
Write a PHP program that multiplies corresponding elements of two given lists -->
<?php
function multiplyLists($list1, $list2) {
 $result = [];
 if (count($list1) !== count($list2)) {
 return "Lists must have the same length.";
 }
 $length = count($list1);
 for ($i = 0; $i < $length; $i++) {
 $result[] = $list1[$i] * $list2[$i];
 }
 return $result;
}
$list1 = [2, 4, 6, 8];
$list2 = [1, 3, 5, 7];
$result = multiplyLists($list1, $list2);
if (is_array($result)) {
 echo "Result: " . implode(", ", $result);
} else {
 echo "Error: " . $result;
}
?>