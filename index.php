<?php

include_once('connection/connection.php');

$con = connection();

$sql = "SELECT * FROM STUDENT";
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>main</title>
</head>
<body>
    <a href="add.php" class="btn">Add</a>
    <br>
    <div style="margin-bottom: 50px;"></div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Initial</th>
                <th>Lastname</th>
                <th>Sex</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php do{ ?>
            <tr>        
                <td><?php echo $row["Student_id"] ?></td>
                <td><?php echo $row["Student_fname"] ?></td>
                <td><?php echo $row["Student_init"] ?></td>
                <td><?php echo $row["Student_lname"] ?></td>
                <td><?php echo $row["Student_sex"] ?></td>
                <td ><a class="view" href="profile.php?id=<?php echo $row["Student_id"]; ?>">View</a></td>
                <td ><a class="delete" href="delete.php?id=<?php echo $row["Student_id"]; ?>">Delete</a></td>        
            </tr>
            <?php }while($row = $result->fetch_assoc()); ?>
        </tbody>
    </table>
    
   
</body>
</html>