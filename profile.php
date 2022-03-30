<?php
include_once('connection/connection.php');

$con = connection();

$id = $_GET["id"];

$sql = "SELECT * FROM STUDENT WHERE Student_id = '$id'";
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

    $fname = $_POST['fname'];
    $init = $_POST['init'];
    $lname = $_POST['lname'];
    $sex = $_POST['sex'];

    $sql = "UPDATE STUDENT SET Student_fname = '$fname', Student_init = '$init', Student_lname = '$lname', Student_sex = '$sex' WHERE Student_id = '$id'";
    $con->query($sql) or die ($con->error);
    echo header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Profile</title>
</head>
<body>
    <a href="index.php" class="btn">Back</a>
    <br>
    <div style="margin-bottom: 50px;"></div>
    <form action="" method="post">
        <label>Student Id</label>
        <input type="text" name="id" value="<?php echo $row['Student_id']; ?>" readonly>
        <br>
        <label>Firstname</label>
        <input type="text" name="fname" value="<?php echo $row['Student_fname']; ?>">
        <br>
        <label>Initial</label>
        <input type="text" name="init" value="<?php echo $row['Student_init']; ?>">
        <br>
        <label>Lastname</label>
        <input type="text" name="lname" value="<?php echo $row['Student_lname']; ?>">
        <br>
        <label>Sex</label>
        <input type="text" value="<?php echo $row['Student_sex']; ?>" readonly>
        <select name="sex">
            <option value="Male" <?php if($row['Student_sex'] == "Male") echo 'selected="selected"' ?>>Male</option>
            <option value="Female" <?php if($row['Student_sex'] == "Female") echo 'selected="selected"' ?>>Female</option>
        </select>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>