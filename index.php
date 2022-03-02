<link rel="stylesheet" href="css/site.css">
<table>
    <thead>
        <th>ID</th>
        <th>Book Name</th>
        <th>Author</th>
    </thead>
    <tbody>
        <?php
            require "db_connect.php";
            $sql = "Select * from book";
            $res  = $conn->query($sql);

            if(!$res){
                echo "error";
            }

            while($row = mysqli_fetch_object($res)){
        ?>
        <tr>
            <td><?php echo $row->ID ?></td>
            <td><?php echo $row->Name ?></td>
            <td><?php echo $row->Author ?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>


    require "db_connect.php";

    // /*
    //     saving data
    // */
    // $sql = "INSERT INTO book ( Name, Author) VALUES ('Book2','Einstein')";
    // $res = $conn->query($sql);
    // if($res)
    //     echo "data saved";
    // else 
    //     echo "error";

    /*
        updating data
    */
    // $sql = "UPDATE book set Name = 'Updated name', Author= 'Sigmond Frued' Where ID = 15";
    // $res = $conn->query($sql);
    // if($res)
    //     echo "data updated";
    // else 
    //     echo "error";

    // /*
    //     deleting data
    // */
    // $sql = "DELETE from book where ID = 15";
    // $res = $conn->query($sql);
    // if($res)
    //     echo "data deleted";
    // else 
    //     echo "error";

