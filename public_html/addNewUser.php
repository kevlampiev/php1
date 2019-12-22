<?php
include("../engine/settings.php");
include("../engine/common.php");

$login = setStr($_POST['login']);
$password = setStr($_POST['password']);
$name = setStr($_POST['name']);
$phone = setStr($_POST['phone']);
$email = setStr($_POST['email']);

$sql = "INSERT INTO users(login, password, name, phone, email) VALUES (\"$login\",\"$password\",\"$name\",\"$phone\",\"$email\")";

$result = mysqli_query($connection, $sql) or die("Error" . mysqli_error($connection));

if ($result) {
    setcookie('user', $login, time() + 3600 * 24 * 7);
    setcookie('password', $password, time() + 3600 * 24 * 7);
    header("Location: index.php");
} else {
    echo $sql;
}
