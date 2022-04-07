<?php 
include_once('connection/connection.php');
$con = connection();

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $init = $_POST['init'];
    $lname = $_POST['lname'];
    $sex = $_POST['sex'];

    $sql = "INSERT INTO student VALUES('$id', '$fname','$init','$lname','$sex')";
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
    <title>Add</title>
</head>
<body>
<a href="index.php" class="btn">Back</a>
    <form action="" method="post">
        <div class="container">

            <label>Student Id</label>
            <input type="text" name="id" >
            <label>Firstname</label>
            <input type="text" name="fname" >
            <label>Initial</label>
            <input type="text" name="init" >
            <label>Lastname</label>
            <input type="text" name="lname" >
            <label>Sex</label>
            <select name="sex">
                <option value="Male" name="male">Male</option>
                <option value="Female" name="female">Female</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Submit">
         </div>
    </form>
    

</body>
</html>