<?php
/**
 * Created by PhpStorm.
 * User: Shehla
 * Date: 18-Apr-19
 * Time: 21:22
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php
    require_once("config.php");
    $sid = $name = $regno = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!isset($_GET['id'])) {
            echo "id is not set";
            return;
        } else if (empty($_GET['id'])) {
            echo "id is empty";
            return;
        } else {
            $sid = $_GET['id'];
//            $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
//            if (mysqli_connect_error()) {
//                die(mysqli_connect_error());
//            }
            $sql = "SELECT * FROM student WHERE id = $sid";
//            $result = mysqli_query($connection, $sql);
//            $row = mysqli_fetch_assoc($result);

            try {

                $result = $pdo->query($sql);
                $row = $result->fetch();

                $name = $row['Name'];
                $regno = $row['RegNo'];
            }
            catch (PDOException $e) {
                die($e->getMessage());
            }


//            if (mysqli_error($connection)) {
//                die("Something went wrong! Check your Database");
//            }
//            mysqli_close($connection);
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['name']) && isset($_POST['regno'])) {
            $name = $_POST['name'];
            $regno = $_POST['regno'];
            $sid = $_POST['id'];
//            $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
//            if (mysqli_connect_error()) {
//                die(mysqli_connect_error());
//            }
            //echo $name . " is ready to update! with id: " . $sid;
            $sql = "UPDATE student SET Name = '$name', RegNo = '$regno' WHERE id = $sid";

//            mysqli_query($connection, $sql);
//            if(mysqli_error($connection)) {
//                die("Something went wrong! Check your Database");
//            }
//            echo "Student record updated successfully!";
//            mysqli_close($connection);

            try {

                $count = $pdo->exec($sql);
                if($count>0)
                    echo "<p>Updated " . $count . " rows</p>";
                else
                    echo "No rows updated";

            }
            catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }
    ?>
</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$sid?>">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" value="<?=$name?>">
        </div>
        <div class="form-group">
            <label for="regno">Registration Number</label>
            <input type="text" name="regno" class="form-control" id="regno" placeholder="Registration No." value="<?=$regno?>">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>
