<?php

include "config.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];

$qry = "select * from empdata where empFname = '$fname' AND emplname = '$lname' AND empEmail = '$email'";

$res = mysqli_query($conn,$qry);

if($res->num_rows > 0){
  $qry = "DELETE FROM empdata WHERE empFname = '$fname' AND emplname = '$lname' AND empEmail = '$email'";
  $res = mysqli_query($conn,$qry);
  
  if($res){
    header('Location: index.php');
  }
  else{
    echo("<h1 style='text-align:center;'><i>Error</i> </h1><br>");
    echo("<h2>QUERY FAILED</h2><br>");
    echo("For HOMEPAGE, click <a href='index.php'>here</a>");
  }
}
else{
  echo("<h1 style='text-align:center;'><i>Error</i> </h1><br>");
  echo("<h2>INVALID INPUT</h2><br>");
  echo("For HOMEPAGE, click <a href='index.php'>here</a>");
}
?>