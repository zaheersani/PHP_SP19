<?php
/**
 * Created by PhpStorm.
 * User: Shehla
 * Date: 18-Apr-19
 * Time: 21:23
 */
include_once ("navigation.html");
require_once("config.php");
echo "Student Details:";
echo "<br>";
$sid = $_GET['id'];
//$connection =  mysqli_connect(DBHOST, DBUSER, DBPASSWORD , DBNAME);
//if(mysqli_connect_error()) {
//    die(mysqli_connect_error());
//} else {
//    echo "Connected Successfully!<br>";
//}
$sql = "SELECT * FROM student WHERE id = $sid";
//$result = mysqli_query($connection, $sql);
//while($row = mysqli_fetch_assoc($result)) {

$result = $pdo->query($sql);
while($row = $result->fetch()) {
    echo "Name: " . $row['Name'] . ", RegNo: " . $row['RegNo'];
    echo "<br></a>";
}
?>