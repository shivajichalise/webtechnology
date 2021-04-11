<?php

if(isset($_POST['submit'])){
  
  $user = trim($_POST['username']);
  $pass = trim ($_POST['password']);

  if($user=="admin"  && $pass=="admin"){
    setcookie("user", $user, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location:profile.php');
  }else{
  echo "Your username/password is incorrect";
  }
}

?>

<html>
<head>
</head>
<body>
  <table align="center">
    <form method="POST" action="login.php">
      <tr><td>Username: </td> <td><input type="text" name="username" value="" placeholder="Usernmae"></td></tr>
      <tr><td>Password:</td> <td><input type="password" value="" name="password" placeholder="Password"></td></tr>
      <tr>  <td><input type="submit" value="Submit" name="submit"></td> </tr>
    </form>
  </table>
</body>
</html>

