<?php

    require "../db_connect.php";
    
    if($_GET){
        $sql = "INSERT INTO book (Name, Author) values ('".$_GET['Name']."', '".$_GET['Author']."')";
        $res  = $conn->query($sql);
        if($res)
            echo "Data saved";
        else    
            echo "error happened";
    }

 ?>

<form action="" method="get">
    <label for="Name">Enter Book Name</label>
    <input type="text" name="Name" />
    <br>
    <label for="Author">Enter Book Author</label>
    <input type="text" name="Author" />
    <br>
    <input type="submit" value="Submit"/>
</form>

