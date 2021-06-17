<?php


include "config.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = (float)$_POST["age"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$email = $_POST["email"];
$phone = (float)$_POST["phone"];

var_dump($_POST);

// echo("data type ".gettype($c).$c);
// echo("<br>data type ".gettype($phone));
// echo("<br>data type ".gettype($fname));
// echo("<br>data type ".gettype($lname));

echo($gender[0]);


$qry = "insert into empData(empFname,emplname,empAge,empGender,empCity,empState,empCountry,empEmail,empPhone) values('$fname','$lname',$age,'$gender[0]','$city','$state','$country','$email',$phone)";

$res = mysqli_query($conn,$qry);

var_dump($res);

if($res){
  echo("query run");
}
else{
  echo("query not run");
}

?>