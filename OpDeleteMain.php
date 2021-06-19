<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="st.css">
  </head>
  <body>
    <div>
      <?php 
        include "navbar.php";
      ?>
      <div id="innerCont3">
        <form action="OpDelete.php" method="POST">
          <fieldset>
            <table>
              <tr>
                <th>Enter First Name</th>
                <td><input name="fname" type="text" /></td>
              </tr>
              <tr>
                <th>Enter last Name</th>
                <td><input name="lname" type="text" /></td>
              </tr>
              <tr>
                <th>Enter Email</th>
                <td><input name="email" type="email" /></td>
              </tr>
              <tr>
                <td colspan="2">
                  <input name="delete" type="submit" value="Delete"/>
                  <input name="formReset" type="Reset"/ value="Form Reset">
                  <input name="deleteAll" type="submit" value="Delete All">
                </td>
              </tr>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
