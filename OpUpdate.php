<?php

include "config.php";

$email = $_POST["email"];
$columnName = $_POST["columnName"];
$newValue = $_POST["newValue"];

echo("email : $email");
echo("<br>column : $columnName");
echo("<br>value : $newValue<br>");

Switch($columnName){
  case "empFname":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "emplname":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "empAge":
    $val = (float)$newValue;
    $qry = "UPDATE empdata SET $columnName = '$val' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "empGender":
    $gen = $newValue[0];
    $qry = "UPDATE empdata SET $columnName = '$gen' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "empCity":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "empState":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "empCountry":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "empEmail":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
  case "empPhone":
    $phone = (float)$newValue;
    $qry = "UPDATE empdata SET $columnName = '$phone' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      echo "query executed";
    }else{
      echo "query not executed";
    }
    break;
}

?>