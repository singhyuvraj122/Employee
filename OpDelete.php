<?php

include "config.php";

var_dump($_POST);

if(isset($_POST["deleteAll"])){
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];

  $qry = "select * from empdata where empFname = '$fname' AND emplname = '$lname' AND empEmail = '$email'";

  $res = mysqli_query($conn,$qry);
  var_dump($res);

  if($res->num_rows > 0){
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
}
else{
  $qry = "select * from empdata";
  
  $res = mysqli_query($conn,$qry);
  var_dump($res);
  if(isset($_POST["deleteAll"])){
    if($res->num_rows > 0){
      $qry = "DELETE FROM empdata ";
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
  }
}
?>