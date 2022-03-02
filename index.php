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