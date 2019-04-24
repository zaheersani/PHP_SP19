<?php
/**
 * Created by PhpStorm.
 * User: Shehla
 * Date: 18-Apr-19
 * Time: 21:23
 */
?>
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
    require_once("config.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['name']) && isset($_POST['regno'])) {
            $name = $_POST['name'];
            $regno = $_POST['regno'];

            $s = new Student();
            $s->InsertStudent($name, $regno);
        }
    }
    ?>

</head>
<body>
<div class="container col-md-5">
    <p>
        New Record has been entered into the database!
    </p>
</div>
</body>
</html>