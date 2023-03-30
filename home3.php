<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php

  $userNameInDb = "Sharif Hossen";
  $userPasswordInDb = "sharif@39";
  
  echo "Saved User information in database: ";
  echo "<br>";
  echo "User Name: $userNameInDb";
  echo "<br>";
  echo "User Password: $userPasswordInDb";
  echo "<br><hr>";

  $inputUserName = $_REQUEST["username"];
  $inputUserPassword = $_REQUEST["password"];

  echo "Input User Information in database: ";
  echo "<br>";
  echo "User Name : $inputUserName";
  echo "<br>";
  echo "User Password : $inputUserPassword";
  echo "<br><hr>";

  if($inputUserName == $userNameInDb && $inputUserPassword == $userPasswordInDb){
    echo "<h1 color:'Red'> Login Succesful </h1>";
  }
  else {
    echo "Login failed, Give Corret Information";
  }

  
  ?>

</body>
</html>