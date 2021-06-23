<!DOCTYPE HTML>
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
        <form action="OpUpdate.php" method="POST">
          <table>
            <tr id="tableHead">
              <td colspan="2">UPDATE RECORD</td>
            </tr>
            <tr>
              <th>Enter Email Of Employee</th>
              <td><input name="email" type="email" placeholder="Employee Email"></td>
            </tr>
            <tr>
              <th>Select Option To Replace</th>
              <td>
                <select name="columnName">
                  <option value="empFname">EMPLOYEE NAME</option>
                  <option value="emplname">EMPLOYEE SURNAME</option>
                  <option value="empAge">EMPLOYEE AGE</option>
                  <option value="empGender">EMPLOYEE GENDER</option>
                  <option value="empCity">EMPLOYEE CITY</option>
                  <option value="empState">EMPLOYEE STATE</option>
                  <option value="empCountry">EMPLOYEE COUNTRY</option>
                  <option value="empEmail">EMPLOYEE EMAIL</option>
                  <option value="empPhone">EMPLOYEE PHONE</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>Enter Value To Update</th>
              <td><input name="newValue" type="text" placeholder="New Value"></td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" value="SUBMIT">
                <input type="reset" value="RESET">
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>