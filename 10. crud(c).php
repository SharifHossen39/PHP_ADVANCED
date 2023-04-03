<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $connection = mysqli_connect('localhost', 'root', '', 'Users');

        if(!$connection)
        {
            echo "Not Connected" . mysqli_error($connection);
        }

        $query = "insert into user_info(username, email, password) values ('$username', '$email', '$password')";

        $add = mysqli_query($connection, $query);

        if(!$add){
            die("Not Added your data");
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="" method ="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>