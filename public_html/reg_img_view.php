<?php

require("../engine/settings.php");
$id = $_POST['id'];

$sql = "UPDATE photos set number_of_views=number_of_views+1 
            WHERE id=$id";

if (mysqli_query($connection, $sql)) {
    echo "All went fine!";
} else {
    echo "Smth went wrong with $id....";
}
