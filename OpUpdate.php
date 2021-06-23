<?php

include "config.php";

$email = $_POST["email"];
$columnName = $_POST["columnName"];
$newValue = $_POST["newValue"];

function errorDisp()
{
  echo("<h1 style='text-align:center;'><i>Error</i> </h1><br>");
  echo("<h2>INVALID INPUT</h2><br>");
  echo("For HOMEPAGE, click <a href='index.php'>here</a>");
}

Switch($columnName){
  case "empFname":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "emplname":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "empAge":
    $val = (float)$newValue;
    $qry = "UPDATE empdata SET $columnName = '$val' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "empGender":
    $gen = $newValue[0];
    $qry = "UPDATE empdata SET $columnName = '$gen' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "empCity":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "empState":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "empCountry":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "empEmail":
    $qry = "UPDATE empdata SET $columnName = '$newValue' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
  case "empPhone":
    $phone = (float)$newValue;
    $qry = "UPDATE empdata SET $columnName = '$phone' WHERE empEmail = '$email' ";
    $res = mysqli_query($conn,$qry);
    if($res){
      header('Location: index.php');
    }else{
      errorDisp();
    }
    break;
}
?>