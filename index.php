<?php
include "config.php";
$qry = "SELECT * FROM empdata";
$res = mysqli_query($conn,$qry);
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="st.css">
  </head>
  <body>
    <div id="outerCont">
      <div id="innerCont2">
        <div id="navTitle">
          Employee Dashboard
        </div>
        <div id="navbar">
          <li><a href="OpInsert.html">Insert Employee</a></>
          <li><a href="OpUpdate.html">Update Employee</a></li>
          <li><a href="OpDelete.html">Delete Employee</a></li>
        </div>
      </div>
      <div id="innerCont3">
        <table>
          <thead>
            <tr>
              <th>INDEX</th>
              <th>NAME</th>
              <th>SURNAME</th>
              <th>AGE</th>
              <th>GENDER</th>
              <th>CITY</th>
              <th>STATE</th>
              <th>COUNTRY</th>
              <th>EMAIL</th>
              <th>PHONE</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            while(($row = mysqli_fetch_assoc($res)) && ($i <= $res->num_rows)) {
              echo"<tr>";
              echo "<td>$i</td>";
              echo "<td>{$row['empFname']}</td>";
              echo "<td>{$row['emplname']}</td>";
              echo "<td>{$row['empAge']}</td>";
              echo "<td>{$row['empGender']}</td>";
              echo "<td>{$row['empCity']}</td>";
              echo "<td>{$row['empState']}</td>";
              echo "<td>{$row['empCountry']}</td>";
              echo "<td>{$row['empEmail']}</td>";
              echo "<td>{$row['empPhone']}</td>";
              echo "</tr>";
              $i++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>