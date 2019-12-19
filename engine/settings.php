<?php
$connection = mysqli_connect("localhost", "user_anonimous", "", "gallery");
if (mysqli_connect_errno()) {
    die("connection failed " . mysqli_connect_error());
};
