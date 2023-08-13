<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
   <?php
echo "Hello, World!" . "<br>";

echo "Bangladesh";
?> 
<?php
echo "Zepto X Programming Hero" . "<br>";  

echo "practice makes a man perfect." . "<br>";


$work = "walking";
$Work = "Running";
$name = "Hasib";
$age = 23;
$isStudent = true;
$CGPA = 3.68;
$subject = array("Math", "English", "Bangla");

echo "$name is $work";
echo "Nibir is $Work";
echo "$name is $age years old. His CGPA is: $CGPA. And his subjects are " . implode(", ", $subject) . "<br>";

echo "$name is ";
if ($isStudent) {
    echo "a student";
} else {
    echo "not a student";
}
echo ".\n";

echo "$name is $age years old. His CGPA is: $CGPA. And his subjects are: " . implode(", ", $subject) . "<br>";

// 

$location = "Dhaka";
$opportunity = "Front-End Developer";

if($location = "Dhaka"){
    echo "There is a vacancy for $opportunity" . "<br>";
}
else{
echo "There is no opportunity.";
}

// 

$age = 25;
$isStudent = true;

if ($age >= 18) {
    echo "You are eligible for something.";
    if ($isStudent) {
        echo " You're also a student!";
    } else {
        echo " You're not a student.";
    }
} else {
    echo "Sorry, you're not eligible for this.";
}

?>


</body>
</html>