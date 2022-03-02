<?php
    require "db_connect.php";
?>

<link rel="stylesheet" href="css/site.css">

<table>
    <thead>
        <th>Name</th>
        <th>Author</th>
    </thead>
    <tbody>
<?php
    $sql = "SELECT * from book";
    $res = $conn->query($sql);

    if(!$res)
        echo "no data on the the book table";


    while($row =mysqli_fetch_object($res)){
?>
    <tr>
        <td><?php echo $row->Name?></td>
        <td><?php echo $row->Author?></td>
    </tr>
<?php
    }    
?>
    </tbody>
</table>

