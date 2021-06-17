<?php

use function PHPSTORM_META\type;

include "config.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = (int)$_POST["age"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$email = $_POST["email"];
$phone = (int)$_POST["phone"];

echo("<h1>backend page</h1>");
var_dump($_POST);
echo("my name is {$fname} {$lname}<br>");
echo("i am {$age} years old and {$gender}<br>");
echo("i live in {$city} {$state} ${country}<br>");
echo("my email is $email and phone numebr is $phone<br>");

echo(gettype($phone));

$qry = "INSERT INTO empData(empFname) VALUES('ramesh')";

$res = mysqli_query($conn,$qry);

var_dump($res);

if($res){
  echo("query run");
}
else{
  echo("query not run");
}

?>