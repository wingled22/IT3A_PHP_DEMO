<?php
    require "../db_connect.php";
    
    if($_POST){

        $sql = "INSERT INTO book (Name, Author) values ('".$_POST['Name']."', '".$_POST['Author']."')";
        $res  = $conn->query($sql);
        if($res)
            echo "Data saved";
        else    
            echo "error happened";
            
    }else
        echo "no post happened";