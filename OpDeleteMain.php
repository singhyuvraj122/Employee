<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="st.css">
  </head>
  <body>
    <div>
      <?php 
        include "navbar.php";
        include "dispTable.php";
      ?>
      <div id="innerCont3">
        <form action="OpDelete.php" method="POST">
          <fieldset>
            <table>
              <tr id="tableHead">
                <td colspan="2">DELETE RECORD</td>
              </tr>
              <tr>
                <th>Enter First Name</th>
                <td><input name="fname" type="text" placeholder="Employee Name" /></td>
              </tr>
              <tr>
                <th>Enter last Name</th>
                <td><input name="lname" type="text" placeholder="Employee Surname" /></td>
              </tr>
              <tr>
                <th>Enter Email</th>
                <td><input name="email" type="email" placeholder="Employee Email" /></td>
              </tr>
              <tr>
                <td colspan="2">
                  <input name="delete" type="submit" value="Delete"/>
                  <input name="formReset" type="Reset"/ value="Form Reset">
                </td>
              </tr>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
