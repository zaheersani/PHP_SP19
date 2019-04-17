
<?php
/**
 * Created by PhpStorm.
 * User: Zaheer Sani
 * Date: 16/04/2019
 * Time: 2:10 PM
 */

include_once ("navigation.html");
require_once("config.php");

echo "Student Details:";
echo "<br>";
$sid = $_GET['id'];

$connection =  mysqli_connect(DBHOST, DBUSER, DBPASSWORD , DBNAME);

if(mysqli_connect_error()) {
    die(mysqli_connect_error());
} else {
    echo "Connected Successfully!<br>";
}

$sql = "SELECT * FROM student WHERE id = $sid";

$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row['Name'] . ", RegNo: " . $row['RegNo'];
    echo "<br></a>";
}

?>