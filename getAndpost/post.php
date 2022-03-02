<?php

    require "../db_connect.php";
    
    if($_POST){
        $sql = "INSERT INTO book (Name, Author) values ('".$_POST['Name']."', '".$_POST['Author']."')";
        $res  = $conn->query($sql);
        if($res)
            echo "Data saved";
        else    
            echo "error happened";
    }

 ?>

<form action="" method="post">
    <label for="Name">Enter Book Name</label>
    <input type="text" name="Name" />
    <br>
    <label for="Author">Enter Book Author</label>
    <input type="text" name="Author" />
    <br>
    <input type="submit" value="Submit"/>
</form>

