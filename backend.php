<?php

include "config.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$email = $_POST["email"];
$phone = $_POST["phone"];

echo("<h1>backend page</h1>");
var_dump($_POST);
echo("my name is {$fname} {$lname}<br>");
echo("i am {$age} years old and {$gender}<br>");
echo("i live in {$city} {$state} ${country}<br>");
echo("my email is {$email} and phone numebr is {$phone}<br>");
?>