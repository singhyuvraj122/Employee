<?php

$conn = mysqli_connect("localhost","root","kamwalibai","employee",3306);


if($conn){
  echo("<h1>connection established</h1>");
}
else{
  echo"<h1>connection failed</h1>";
}
?>