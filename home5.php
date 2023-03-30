<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bangladesh</h1>

    <?php 
    
    $photo = $_FILES["picture"];

    foreach($photo as $x => $y)
    {
        echo $x, " ", $y;
        echo "<br>";
    }

    ?>
</body>
</html>