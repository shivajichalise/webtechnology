<?php

session_start();

?>

<html>
<head>
</head>
<body>

<?php

if($_SESSION['validuser']){
  echo $_SESSION['validuser'];
  echo "<a href='logout.php'> Logout </a>";
}else{
header('location:login.php');
}

?>

</body>
</html>
