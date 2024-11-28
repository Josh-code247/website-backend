<?php
$my_name = "joshua";
$myName = "joshua";
echo "<br> my name is $my_name";
$my_name = "joshua";
echo"<br>";
var_dump($my_name);
$yearsOfExperience = 5; 
echo "<br>";
var_dump($yearsOfExperience);
$Height = 6.1;
echo  "<br>";
var_dump($Height);
$isMale = true;
var_dump ($isMale);
echo "<br>";

// array
$fullName =array("joshua", "ogwezi", "chuks");
var_dump($fullName);
echo "<br>";
echo "my first name is $fullName[0] and my surname is $fullName[2]";

// 28/10/2024
// null
$Nothing = null;
echo "<br>";
var_dump ($Nothing);
// constant
define("pi", 3.142);
echo "<br>";
echo "pi";
 echo "<br>";
var_dump(pi);

//const gravityAcceleration = 10;
define("gravityAcceleration", 20);
echo "<br>";
var_dump(gravityAcceleration);
echo "<br>";

//31/10/24
//operators
//arithmetic operators
//addition operators
$x = 10;
$y = 5;
echo "<br>";
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";

//modulus operations
echo $x%$y;
echo "<br>";
echo $x ** $y;
echo "<br>";

//increment and decrement operator
$x++;
echo $x;
echo "<br>";
echo " 08060724105";
echo "<br>";

//1/11/24
//decrement operator
$x--;
echo $x;

//assignment operator
$a = 100;
$b = 50;

//addition assignment
$a += $b;
echo "<br>";
echo $a;

//subtraction assignment
$a -= $b;
echo "<br>";
echo $a;

// divisional assignment
$a /= $b;
echo "<br>";
echo $a;

// multiplication assignment
$a *= $b;
echo "<br>";
echo $a;

echo "<br>";
 
// logical operators
//Examples of logical operator are : AND(&&), OR (||), XOR , NOT(!)
 
if ($a == 100 && $b == 50) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 || $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 xor $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if (!($a == 101)) {
echo "we are good to go.";
}
echo "<br>";


//7/11/24
//PHP conditional statement 
//there are four notable conditional statement in php viz
//if statement
//if...else statement
//If...elseif... else statement
//switch statement

//if statement
//____________________

//the if statement is one of the most important statement in PHP
//EXAMPLE:
//___________________

if (7>3) {
    echo "have a good day";
}

//variable declaration

$my_name = "joe";
$present_time = date (format: "H:i");

echo "<br>";

echo "present_time: $present_time <br>";

if ($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3> Good Morning, $my_name! </h3>";
}

elseif ($present_time >= 12.00 && $present_time <= 16.00) {
    echo "<h3> Good Afternoon, $my_name! </h3>";
} 

elseif ($present_time >= 16.00 && $present_time <=23.59) {
    echo "<h3> Good Night, $my_name! </h3>";
}
echo "<br>";

// switch statement
$today = date (format: "D");
echo "Today is: $today <br>";
switch ($today) {
    case "Mon":
       echo "Hello everybody, It's Monday. Have a great day!";
       break;
    case "Tue":
        echo "Hello everybody, it's Tuesday. Do have a splendid week!";
        break;
    case "Wed":
        echo "Hello everybody, it's Wednesday. Do have a wonderful week!";
        break;
    case "Thur":
        echo "Hello everybody, it's Thursday. Do have a blessed week!";
        break;
    case "Fri":
        echo "Hello everybody, it's Friday. Do have a blissful weekend!";
        break;
    case "Sat":
        echo "Hello everybody, it's Saturday. Do have a miraculous week!";
        break;
    case "Sun":
        echo "Hello everybody, it's Sunday. Do have a sumptious day!";
        break;
    default:
        echo "sorry, this is not a day in the week!";
        break;
       
}

//php loops

// --while loops
 echo "<br>";

$j = 2;
while ($j < 8) {
    echo $j;
    $j++;
}
echo "<br>";
$j = 2;
while ($j <= 8) {
    echo $j;
    $j++;
}

echo "<br>";
// --do... while loops

//-- for -loops

//11/11/24
//php loops
/*$numbers= 1;
echo $numbers."<br>";

$numbers++;
echo $numbers."<br>";

$numbers++;
echo $numbers."<br>";*/

//While loop
/*$numbers = 1;

while ($numbers <=10){
    echo $numbers."<br>";
    $numbers++;
}*/

//do while loop
/*$numbers = 1;
do {
    echo $numbers."<br>";
    $numbers++;
} while ($numbers <=10)*/



//create an app that print number 1 to 100, print fizz for multipes of 3 and buzz for multple of 5, print fizzbuzz for the multiple of 15
//for loop
for ($numbers = 1;$numbers <=100; $numbers++){
    if ($numbers % 15==0){
        echo  "fizzbuzz <br>";
    } elseif($numbers %5==0){
        echo  "buzz <br>";
    } elseif($numbers %3 ==0){
        echo "fizz <br>";
    } else{
        echo $numbers."<br>";
    }

}

// the foreach loop arrays
/*$cars = array("bmw", "lexus", "ferrari", "bugatti");
echo "i love $cars[0].<br>";
echo "i love $cars[1].<br>";
echo "i love $cars[2].<br>";
echo "i love $cars[3].<br>";*/

/*$cars = array("bmw", "lexus", "ferrari", "bugatti");
foreach ($cars as $car){
    echo "i love $car <br>";
 }*/

 //15/11/24
 //Arrays
 $domesticAnimals = array('dog', 'cat','horse','goat', 'cow');
 $cities = ['asaba', 'warri', 'ughelli', 'sapele','agbor'];
 echo '<br>'. $domesticAnimals[0]. '<br>';

 //indexed array
 //associative array
 //multi-dimensional array

 //count
 echo count ($domesticAnimals). '<br>';
 echo count ($cities). '<br>';

//array_push
//index array
array_push ($cities, 'abraka','oleh','patani', 'ozoro','effurun');
var_dump ($cities);
$cities[2] = 'ogwashi-uku';
echo '<br>';
var_dump ($cities).'<br>';

//associative arrays
$phone = ['brand'=>'iphone', 'model'=>'14 pro', 'colour'=>'white','rom'=> 256];
echo "<br>";
var_dump($phone);

$phone ["model"] = "15 pro";
echo "<br>";
var_dump ($phone);




//www.github.com/elvincedik/backend-project.git

//associative array
//$fullName = array('firstname'=>'ogwezi', 'middlename'=>'chuks', 'lastname'=>'joshua');
//$fullname ['firstname'];

//18/11/24
//function
function greetMe () {
    echo "<br> Good Afternoon!";   
}
greetMe();

echo "<br>";

function streetName ($sname){
    echo "$sname Asaba. <br>";
}
streetName ("DLA");
streetName ("EZENEI");

echo "<br>";
function homeAddress ($snumber, $sname){
    echo "$snumber $sname Asaba. <br>";
}
homeAddress ("5th", "DLA");
homeAddress ("8th", "EZENEI");




?>