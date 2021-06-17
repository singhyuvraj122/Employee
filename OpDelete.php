<?php

include "config.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];

var_dump($_POST);

$qry = "select * from empdata where empFname = '$fname' AND emplname = '$lname' AND empEmail = '$email'";

$res = mysqli_query($conn,$qry);

var_dump($res);

if($res->lengths > 0){
  $qry = "DELETE FROM empdata WHERE empFname = '$fname' AND emplname = '$lname' AND empEmail = '$email'";
  $res = mysqli_query($conn,$qry);
  
  if($res){
    echo("query done");
  }
  else{
    echo("query not done");
  }
}
else{
  echo("field not found");
}


?>