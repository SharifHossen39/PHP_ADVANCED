<?php

    $connection = mysqli_connect('localhost', 'root', '', 'Users');

    if(!$connection) die("Not Connected");

    $query = "select * from user_info";

    $read = mysqli_query($connection, $query);

    $cnt = mysqli_num_rows($read);

    if($cnt){
        while( $i = mysqli_fetch_assoc($read)){
            echo $i['id'] . " " . $i['username'] . " " . $i['email'];
            echo "<br>";
        }
    }
    else echo "No data to show";

?>