<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   hello php
   <?php
echo "Hello, World!";

echo "Bangladesh";
?> 
<?php
echo "Zepto X Programming Hero" . "\n";  

echo "practice makes a man perfect.";


$work = "walking";
$Work = "Running";
$name = "Hasib";
$age = 23;
$isStudent = true;
$CGPA = 3.68;
$subject = array("Math", "English", "Bangla");

echo "$name is $work";
echo "Nibir is $Work";
echo "$name is $age years old. His CGPA is: $CGPA. And his subjects are " . implode(", ", $subject);

echo "$name is ";
if ($isStudent) {
    echo "a student";
} else {
    echo "not a student";
}
echo ".\n";

echo "$name is $age years old. His CGPA is: $CGPA. And his subjects are: " . implode(", ", $subject) . ".";
?>


</body>
</html>