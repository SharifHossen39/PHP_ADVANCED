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
    
    $add = $_REQUEST['address'];

    if($add == "Google"){
        header("location: https://www.google.com");
    }
    elseif($add == "Facebook"){
        header("location: https://www.facebook.com");
    }
    elseif($add == "Sharif"){
        header("location: show.php?test=$add");
    }
    else echo "Wrong input";
    
    ?>
</body>
</html>