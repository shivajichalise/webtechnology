<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Q2</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 15px;
      line-height: 1.5;
    }

    .container {
      width: 50%;
      margin: auto;
      overflow: hidden;
    }

    table {
      margin: 10px 0px 10px 20px;
    }
  </style>
</head>

<body>
  <section id="form">
    <div class="container">
      <form action="display.php" method="POST">
        <label for=""><b>Personal Information</b></label>
        <table>
          <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname" id="" value="<?= $_POST['fname'] ?>" readonly></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname" value="<?= $_POST['lname'] ?>" readonly id=""></td>
          </tr>
          <tr>
            <td>Date of Birth:</td>
            <td>
              <select name="birthmon" id="">
                <option selected disabled><?= $_POST['birthmon'] ?></option>
              </select>
            </td>
            <td>
              <select name="birthday">
                <option selected disabled><?= $_POST['birthday'] ?></option>
              </select>            
            </td>
            <td>
              <select name="birthyear">
                <option selected disabled><?= $_POST['birthyear'] ?></option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td>
              <select name="gender" id="">
                <option value="" disabled selected><?= $_POST['gender'] ?></option>
              </select>
            </td>
          </tr>
        </table>

        <label for=""><b>Account Information</b></label>
        <table>
          <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id="" value="<?= $_POST['email'] ?>" readonly></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="text" name="pass" id="" value="<?= $_POST['pass'] ?>" readonly></td>
          </tr>
          <tr>
            <td>Security Question:</td>
            <td>
              <select name="secq" id="">
                <option value="" selected disabled><?= $_POST['secq'] ?></option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Security Answer</td>
            <td><input type="text" name="seca" id="" value="<?= $_POST['seca'] ?>" readonly></td>
          </tr>
        </table>

        <label for=""><b>Contact Information</b></label>
        <table>
          <tr>
            <td>Address:</td>
            <td><input type="text" name="address" id="" value="<?= $_POST['address'] ?>" readonly></td>
          </tr>
          <tr>
            <td>City</td>
            <td><input type="text" name="city" id="" value="<?= $_POST['city'] ?>" readonly></td>
          </tr>
          <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="zipcode" value="<?= $_POST['zipcode'] ?>" readonly></td>
          </tr>
          <tr>
            <td>Phone:</td>
            <td><input type="number" name="phnnum" id="" value="<?= $_POST['phnnum'] ?>" readonly></td>
          </tr>
        </table>
      </form>
    </div>
  </section>
</body>

</html>
