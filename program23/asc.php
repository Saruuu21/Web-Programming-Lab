<?php
$students=["Saranya","Arya","Chithra","Varsha","Maya"];
echo"Original Array:<br>";
print_r($students);
echo "<br><br>";
asort($students);
echo"Array Sorted in Ascending Order:<br>";
print_r($students);
echo"<br><br>";
arsort($students);
echo"Array Sorted in Descending Order:<br>";
print_r($students);
?>
