<?php
include("../engine/settings.php");
function setStr(string $smth): string
{
    return (isset($smth) && !empty($smth)) ? trim(htmlspecialchars($smth)) : "";
};

$user = setStr($_POST['user']);
$password = setStr($_POST['password']);

$sql = "SELECT name FROM users WHERE login=\"$user\" AND password=\"$password\" ";

$result = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection));
$nOR = mysqli_num_rows($result);
$res = [];
// $res['sql'] = $sql;

if ($nOR > 0) {
    $res["result"] = "success";
} else {
    $res["result"] = "login or password are incorrect";
};
echo json_encode($res);
