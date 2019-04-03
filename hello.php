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
</head>
<body>
<h3>Welcome</h3>
<br>

<?php
$v1 = 23;
echo "Hello World " . $v1;
$v1 = "Aagain!";
?>

<br>

<?php
echo "Hello World " . $v1;
?>

<br>
<div class="container-fluid">
    <table class="table table-dark">
        <?php
        $x = 2;
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>";
            echo $x . " x " . $i . " = " . $x * $i;
            echo "</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>