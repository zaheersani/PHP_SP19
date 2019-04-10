<?php
print_r ($_REQUEST);

echo "<br>";
echo "UserName: " . $_POST["username"];
echo "<br>";
echo "Password: " . $_POST["pwd"];

$username = "zaheer";

if($_POST["username"] == $username) {
    echo "<br>";
    echo "Welcome " . $username;
}
else{
    echo "<br>";
    echo "Invalid Username or Password";
    header("location: login.php?invalid=1");
}

?>
