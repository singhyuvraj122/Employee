<?php

$conn = mysqli_connect("localhost","root","pass","employee",3306);


if(!$conn){
  echo("<h1>connection failed</h1>");
}
?>
