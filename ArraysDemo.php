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
// Defining and Accessing Array
$arr = array();
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[7] = 5;
if(isset($arr[3]))
    echo "Third Index: " . $arr[3] . "<br>";
// Empty Array(), Using [val1, val2]
//$arr = ["Mon", 1, "Tue", 2];
// Iterating Array Elements
foreach($arr as $item) {
    echo $item . "<br>";
}
// print_r Array elements
echo "<br>";
print_r($arr);
// Extending Array Size, Adding New Elements
$arr[] = 15;
sort($arr);
echo "<br>";
print_r($arr);

// Defining Arrays with Key, Value Pairs
$fc = array("Mon"=>35, "Tue"=>36, "Wed"=>32);
echo "<br>"; print_r($fc);
echo "Forecast on Tuesday: " . $fc["Tue"] . " C";
$fc["Thu"] = 30;
echo "<br>"; print_r($fc); echo "<br>";
// Iterating Dictionary Arrays
foreach ($fc as $key => $value) {
    echo "Forecast on " . $key . ": " . $value . "C" . "<br>";
}
// 2D Arrays
echo "<br>Two Dimensional Arrays<br>";
$twoD = array(
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15)
);
echo "<br>Data at (2,3): " . $twoD[2][3];
?>
<table class="table table-border">
<?php
foreach ($twoD as $arr) {
    echo "<tr>";
    foreach ($arr as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
?>
<table>
<?php
// Defining 2D Array with Dictionary Data
$students = array(
    array("id"=>1, "RegNo"=>"SP12-BCS-073", "Name"=>"Ahmed"),
    array("id"=>12, "RegNo"=>"SP12-BCS-003", "Name"=>"Zafar"),
    array("id"=>5, "RegNo"=>"SP12-BCS-034", "Name"=>"Mustafa")
);

if(isset($students)) {
    sort($students);
    echo "<br>Keys<br>";
    $headers = array_keys($students[0]);
    echo "<br>";
    echo '<br><table class="table table-border">';
    foreach($headers as $header)
        echo "<th>".$header."</th>";
    foreach ($students as $student) {
        echo "<tr>";
        foreach ($student as $key => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<br>No Students Record Found!";
}
// Sorting Arrays

// Some more functions, array_keys, array_values, array_rand
echo "<br>Randomly Picked Student!<br>";
print_r($students[array_rand($students)]);
?>
</div>
</body>
</html>