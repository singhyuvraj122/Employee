<?php
include "config.php";
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="st.css">
  </head>
  <body>
    <div id="outerCont">
      <div class="contItem" id="innerCont2">
        <div id="navTitle">
          Employee Dashboard
        </div>
        <div id="navbar">
          <li><a href="OpInsert.html">Insert Employee</a></>
          <li><a href="OpUpdate.html">Update Employee</a></li>
          <li><a href="OpDelete.html">Delete Employee</a></li>
        </div>
      </div>
      <div class="contItem" id="innerCont3">
      <table>
            <tr>
                <th>GFG UserHandle</th>
                <th>Practice Problems</th>
                <th>Coding Score</th>
                <th>GFG Articles</th>
            </tr>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['empFname'];?></td>
                <td><?php echo $rows['problems'];?></td>
                <td><?php echo $rows['score'];?></td>
                <td><?php echo $rows['articles'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>

      </div>
    </div>
    <script src="st.js"></script>
  </body>
</html>