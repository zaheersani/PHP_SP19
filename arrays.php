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
<h3>Arrays in PHP</h3>
<div class="container">
<?php
// $arr = ["Mon", 1, "Tue", 2];
// print_r($arr);
// echo $arr[0];
// echo "<br>";
//$arr = array();
$arr[12] = "Wed";
$arr[14] = "Thu";
$arr[10] = "tenth";
$arr[9] = "tenth 2";
print_r($arr);
echo "<br>";
sort($arr);
foreach ($arr as $key => $value) {
    echo "key: " . $key . ", value: " . $value . "<br>";
}
echo "<br>";
$arr = array("id" => 1, "regno" => "SP12-BCS-098", "name" => "Ahmed Hassan");
print_r($arr);
echo "<br>";
echo $arr["regno"];
echo "<br>";
$students = array(
    array("id" => 11, "regno" => "SP12-BCS-098", "name" => "Ahmed Hassan"),
    array("id" => 2, "regno" => "SP12-BCS-001", "name" => "Zafar"),
    array("id" => 33, "regno" => "SP12-BCS-050", "name" => "Mujahid"),
);
if(isset($students)) {
    print_r($students);
    echo "<br>";
    echo $students[1]["regno"] . "<br>";
    //sort($students);
    foreach ($students as $key => $value) {
        //echo "key: " . $key . ", value: " . print_r($value) . "<br>";
        foreach ($value as $key => $value) {
            echo "key: " . $key . ", value: " . $value . "<br>";
        }
    }
    echo "<br>";
    print_r(array_keys($students[0]));
    echo "<br>";
    print_r(array_values($students[0]));
    echo "<br>Random Student<br>";
    print_r($students[array_rand($students)]);
}
?>
</div>
</body>
</html>