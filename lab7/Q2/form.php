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
        <table border="1px solid black">
          <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname" id=""></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname" id=""></td>
          </tr>
          <tr>
            <td>Date of Birth:</td>
            <td>
              <select name="birthmon" id="">
                <option selected disabled>- Month -</option>
                <option value="January">January</option>
                <option value="Febuary">Febuary</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </td>
            <td>
              <select name="birthday">
                <option selected disabled>- Day -</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </td>
            <td>
              <select name="birthyear">
                <option selected disabled>- Year -</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td>
              <select name="gender" id="">
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </td>
          </tr>
        </table>

        <label for=""><b>Account Information</b></label>
        <table border="1px blue">
          <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id=""></td>
          </tr>
          <tr>
            <td>Retype Email:</td>
            <td><input type="email" name="reemail" id=""></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="pass" id=""></td>
          </tr>
          <tr>
            <td>Retype Password:</td>
            <td><input type="password" name="repass" id=""></td>
          </tr>
          <tr>
            <td>Security Question:</td>
            <td>
              <select name="secq" id="">
                <option value="" selected disabled>Choose a security question</option>
                <option value="firstdog">First dog name?</option>
                <option value="childnick">Childhood nickname?</option>
                <option value="favcolor">Favourite Color?</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Security Answer</td>
            <td><input type="text" name="seca" id=""></td>
          </tr>
        </table>

        <label for=""><b>Contact Information</b></label>
        <table border="1px solid black">
          <tr>
            <td>Address:</td>
            <td><input type="text" name="address" id=""></td>
          </tr>
          <tr>
            <td>City</td>
            <td><input type="text" name="city" id=""></td>
          </tr>
          <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="zipcode"></td>
          </tr>
          <tr>
            <td>Phone:</td>
            <td><input type="number" name="phnnum" id=""></td>
            <td>
              <select name="numbertype" id="">
                <option value="Mobile">Mobile</option>
                <option value="Landline">Landline</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" value="Submit" name="submit" style="float: right;"></td>
          </tr>
        </table>
      </form>
    </div>
  </section>
</body>

</html>
