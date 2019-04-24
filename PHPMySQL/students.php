<?php
/**
 * Created by PhpStorm.
 * User: Shehla
 * Date: 18-Apr-19
 * Time: 21:21
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php
    /**
     * Created by PhpStorm.
     * User: Zaheer Sani
     * Date: 16/04/2019
     * Time: 1:44 PM
     */
    require_once("config.php");

//    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
//    if (mysqli_connect_error()) {
//        die(mysqli_connect_error());
//    }
//    $sql = "SELECT * FROM student";
//    $result = mysqli_query($connection, $sql);

    $sql = "select * from student";
    $result = $pdo->query($sql);
    ?>

</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <table class="table">
        <th>Name</th>
        <th>Actions</th>
        <?php
        while ($row = $result->fetch()) {
//        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <a href="studentdetails.php?id=<?= $row['id'] ?>">
                        <?php
                        echo $row['Name'];
                        ?>
                    </a>
                </td>
                <td>
                    <a href="studentedit.php?id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                </td>
            <!--TODO: Add A Button to Delete Record
                TODO: Create a delete action page where you should display record of student.
                TODO: Ask User: Are you sure you want to delete
                TODO: Yes, will delete record and redirect students.php with success message
                TODO: No, just redirect to students.php
                -->
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>