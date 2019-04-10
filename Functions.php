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
<div class="container">
    <h3>Functions in PHP</h3>
    <?php
    $val1 = 16;
    $val2 = 16;
    echo "Sum of " . $val1 . " and " . $val2 . " is " . Sum($val1, $val2);
    function printMe(&$a) {
        $a = 20;
        return "<br>You have passed " . $a . " as value";
    }
    function Sum($a, $b) {
        $c = $a + $b;
        return $c;
    }
    echo "<br>I passed " . $val1 . " in function";
    echo printMe($val1);
    echo "<br>I passed " . $val1 . " in function";
    ?>
</div>
</body>
</html>