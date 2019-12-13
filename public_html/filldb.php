
<?php
require("../engine/components/header.php");
require("../engine/settings.php");
$picturePath = $_SERVER['DOCUMENT_ROOT'] . "/img/fullsize";

$photos = scandir($picturePath);

$query = mysqli_query($connection, "DELETE FROM photos");

foreach ($photos as $photo) {
    $sql = "INSERT INTO photos(title) VALUES ('$photo');";
    if ($photo[0] == ".") continue;
    if (mysqli_query($connection, $sql)) {
        echo "Файл $photo добавлен успешно <br>";
    } else {
        echo "Ошибка вставки файла $photo <br>";
    }
}

mysqli_close($connection);

require("../engine/components/footer.php");
?>

