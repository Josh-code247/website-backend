<?php

$y = 22;
function myfunction() {
    echo $GLOBALS ['y'];
}

myfunction();

echo "<br>";
echo "<br>";

function myfunctions() {
    echo $y;
}
myfunction();


echo "<br>";


//28/11/24
//super global to be considered
//$GLOBALS
//$_SERVER
//$_POST
//$_GET

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
//EXAMPLE

//single quotes and double quotes difference
$z= "mary";
echo "hello $z";
echo "<br>";
echo 'hello $z';
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="POST">

<input type="text" placeholder="First Name" name="fname">
<br><br>
<input type="text" placeholder="Last Name" name="lname">
<br><br>
<button type="submit">submit</button>

</form>

<?php
$first_name = $last_name = "";
// initialisen variables to empty strings
if($_SERVER['REQUEST_METHOD']== 'POST'){
    // Checking if form is submitted via POST Method
    $first_name =htmlspecialchars($_POST['fname']);
    // $_POST['Fname'] holds form data of a form that uses post method
    // htmlspecialchars helps to prevent malicious codes
    $last_name =$_POST['lname']; 
    echo "<h2> Good Afternoon $first_name $last_name </h2>";
    // <script>malicious code displayed as plain text</script>
}

?>