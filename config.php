<?php

$conn = mysqli_connect("localhost","root","kamwalibai","employee",3306);


if($conn){
  echo("<h1>connection established</h1>");
  var_dump($conn);
}
else{
  echo"<h1>connection failed</h1>";
  var_dump($conn);
}
?>