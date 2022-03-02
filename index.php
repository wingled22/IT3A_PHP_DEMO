<?php
    require "db_connect.php";

    $sql = "SELECT * from book";
    $res = $conn->query($sql);

    if(!$res)
        echo "no data on the the book table";

    $row = $res -> fetch_assoc();
    printf ("%s (%s)\n", $row["Name"], $row["Author"]);
    
?>