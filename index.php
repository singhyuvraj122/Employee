<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="st.css">
  </head>
  <body>
    <div id="outerCont">
      <div class="contItem" id="innerCont1">
        <h1>Employee Admin Dashboard</h1>
      </div>
      <div class="contItem" id="innerCont2">
        <li><a href="OpInsert.html">Insert Employee</a></li>
        <li><a href="OpUpdate.html">Update Employee</a></li>
        <li><a href="OpDelete.html">Delete Employee</a></li>
      </div>
      <div class="contItem" id="innerCont3">
        <?php
        $qry = "SELECT * FROM empdata";

        $res = mysqli_query($conn,$qry);

        // var_dump($res);
        if($res->num_rows > 0){
          while($row = mysqli_fetch_assoc($res)) {
            ?>
            <table>
              <tr>
                <td><?php echo $row['empFname']; ?></td>
                <td><?php echo $row['emplname']; ?></td>
                <td><?php echo $row['empAge']; ?></td>
                <td><?php echo $row['empGender']; ?></td>
                <td><?php echo $row['empCity']; ?></td>
                <td><?php echo $row['empState']; ?></td>
                <td><?php echo $row['empCountry']; ?></td>
                <td><?php echo $row['empEmail']; ?></td>
                <td><?php echo $row['empPhone']; ?></td>
              </tr>
            </table>
            <?php
          }}?>
      </div>
    </div>
    <script src="st.js"></script>
  </body>
</html>