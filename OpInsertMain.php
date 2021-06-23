<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="st.css">
  </head>
  <body>
    <?php 
      include "navbar.php";
      include "dispTable.php";
    ?>
    <div id="innerCont3">
      <form action="OpInsert.php" method="POST">
        <fieldset>
          <table>
            <tr id="tableHead">
              <td colspan="2">INSERT RECORD</td>
            </tr>
            <tr>
              <th>Name</th>
              <td><input name="fname" type="text" placeholder="Employee Name" required></td>
            </tr>
            <tr>
              <th>Surname</th>
              <td><input name="lname" type="text" placeholder="Employee Surname" required></td>
            </tr>
            <tr>
              <th>Age</th>
              <td><input name="age" type="number" placeholder="Employee Age" required></td>
            </tr>
            <tr>
              <th>Gender</th>
              <td><label><input name="gender" type="radio" value="male" required> Male</label>
              <label><input name="gender" type="radio" value="female" required> Female</label></td>
            </tr>
            <tr>
              <th>City</th>
              <td><input name="city" type="text" placeholder="Employee City" required></td>
            </tr>
            <tr>
              <th>State</th>
              <td><input name="state" type="text" placeholder="Employee State" required></td>
            </tr>
            <tr>
              <th>Country</th>
              <td><input name="country" type="text" placeholder="Employee Country" required></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><input name="email" type="email" placeholder="Employee Email" required></td>
            </tr>
            <tr>
              <th>Phone number</th>
              <td><input name="phone" type="number" placeholder="Employee Phone" required></td>
            </tr>
            <tr>
              <td colspan="2">
                <input name="submit" type="submit" value="SUBMIT">
                <input name="reset" type="reset" value="RESET">
            </td>
          </tr>
          </table>
        </fieldset>
      </form>
    </div>
  </body>
</html>