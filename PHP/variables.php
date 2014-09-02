<?php

//Declaration
$declare = "Declaration";

//with spacer
echo $declare . "<br><br>";


//Concatenation
$title = "Concatenation";
$firstName = "steven";
$lastName = "JaCkSOn";
$hobbies = "MiSC";

echo $title . 
"<br>First name: " . $firstName . 
"<br>First name: " . $lastName . 
"<br>Hobbies: " .  $hobbies . 
"<br><br>";


//String Manipulation
$titleString = "String Manipulation";
echo $titleString . "<br>First name: " . strtoupper($firstName) . "<br>First name: " . ucfirst(strtolower($lastName)) . "<br>Hobbies: " .  strtolower($hobbies) . " <br><br>";


//Calculations

$titleCalculations = "Calculations";
$number = 13;
$number2 = 35;
$number3 = 2;

echo 
$titleCalculations . "<br>" . 
"Number 1: " . $number . "<br>" .
"Number 2: " . $number2 . "<br>" .
"Number 3: " . $number3 . "<br><br>";

//Arthimetic Operators
$titleOperators = "Arthimetic Operators";
echo $titleOperators . "<br>";
echo "Number 1 x Number 2: " . $number * $number2 . "<br>";
echo "Number 2 - Number 3: " . ($number2 - $number3) . "<br>";
echo "Number 3 + Number 1: " . ($number3 + $number) . "<br>";
echo "Number 2 / Number2 : " . $number2 / $number2 . "<br><br>";

//Birth year calculator
$age = 26;
$year = 2014;
$birthYear = ($year - $age);
$birthYearTitle = "Birth Year";


echo 
$birthYearTitle . "<br>" .
"Year of Birth: " . $birthYear . 
"<br><br>";

