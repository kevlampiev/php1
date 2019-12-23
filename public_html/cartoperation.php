<?php
include("../engine/settings.php");
include("../engine/common.php");

$user = setStr($_POST['user']);
$good_id = setStr($_POST['goodId']);
$amount = setStr($_POST['amount']);

$sql = "SELECT * FROM cart WHERE user=\"$user\" AND good_id=$good_id";


$result = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection));

if (mysqli_num_rows($result) > 0) {
    $sql = "UPDATE cart SET amount=amount+$amount WHERE user=\"$user\" AND good_id=$good_id";
} else {
    if ($amount < 0) $amount = 1;
    $sql = "INSERT INTO cart (user,good_id,amount) VALUES (\"$user\",$good_id,$amount)";
};
echo $sql;
$result = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection));
echo $result;
