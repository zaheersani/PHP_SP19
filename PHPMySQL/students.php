<?php
/**
 * Created by PhpStorm.
 * User: Zaheer Sani
 * Date: 16/04/2019
 * Time: 1:44 PM
 */

$host = "localhost";
$database = "universitydb";
$user = "root";
$pwd = "";

$connection =  mysqli_connect($host, $user, $pwd, $database);

if(mysqli_connect_error()) {
    die(mysqli_connect_error());
} else {
    echo "Connected Successfully!<br>";
}

$sql = "SELECT * FROM student";

$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($result)) {
    ?>
    <a href="studentdetails.php?id=<?=$row['id']?>" >
    <?php
    echo $row['Name'];
    echo "<br></a>";
}

print_r($result);


?>