<?php
ob_start();
$public_path =  $_SERVER['DOCUMENT_ROOT'];
require('../engine/settings.php');

//Честно своровано с просторов интернета
function img_resize($src, $dest, $width, $height, $rgb = 0xFFFFFF, $quality = 100)
{
    if (!file_exists($src))
        return false;

    $size = getimagesize($src);

    if ($size === false)
        return false;

    $format = strtolower(substr($size['mime'], strpos($size['mime'], '/') + 1));
    $icfunc = 'imagecreatefrom' . $format;

    if (!function_exists($icfunc))
        return false;

    $x_ratio = $width  / $size[0];
    $y_ratio = $height / $size[1];

    if ($height == 0) {
        $y_ratio = $x_ratio;
        $height  = $y_ratio * $size[1];
    } elseif ($width == 0) {
        $x_ratio = $y_ratio;
        $width   = $x_ratio * $size[0];
    }

    $ratio       = min($x_ratio, $y_ratio);
    $use_x_ratio = ($x_ratio == $ratio);

    $new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio);
    $new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio);
    $new_left    = $use_x_ratio  ? 0 : floor(($width - $new_width)   / 2);
    $new_top     = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2);

    // если не нужно увеличивать маленькую картинку до указанного размера
    if ($size[0] < $new_width && $size[1] < $new_height) {
        $width = $new_width = $size[0];
        $height = $new_height = $size[1];
    }

    $isrc  = $icfunc($src);
    $idest = imagecreatetruecolor($width, $height);

    imagefill($idest, 0, 0, $rgb);
    imagecopyresampled($idest, $isrc, $new_left, $new_top, 0, 0, $new_width, $new_height, $size[0], $size[1]);

    $i = strrpos($dest, '.');
    if (!$i) return '';
    $l = strlen($dest) - $i;
    $ext = substr($dest, $i + 1, $l);

    switch ($ext) {
        case 'jpeg':
        case 'jpg':
            imagejpeg($idest, $dest, $quality);
            break;
        case 'gif':
            imagegif($idest, $dest);
            break;
        case 'png':
            imagepng($idest, $dest);
            break;
    }

    imagedestroy($isrc);
    imagedestroy($idest);

    return true;
}

$photoCount = count($_FILES['photo']['name']);

for ($i = 0; $i < $photoCount; $i++) {
    $name = $_FILES['photo']['name'][$i];
    $path = "$public_path/img/gallery/fullsize/$name";
    $smallPictPath = "$public_path/img/gallery/small/$name";
    $numbOfErr = 0; //счетчик ошибок, если не нулевой - не можем перейти на другую страницу
    if (($path[0] == ".") || (!exif_imagetype($_FILES['photo']['tmp_name'][$i]))) {
        echo "file $path isn't a picture <br>";
        $numbOfErr++;
        continue;
    }
    if (move_uploaded_file($_FILES['photo']['tmp_name'][$i], $path)) {
        echo "$name loaded successfully to $path <br>";
        if (img_resize($path, $smallPictPath, 150, 0)) {
            echo "pictogramm $smallPictPath created successfully <br><br>";
            $sql = "INSERT INTO photos (title, descript) VALUES (\"$name\",\"uploaded by users\")";
            if (!mysqli_query($connection, $sql)) $numbOfErr++;
        } else {
            echo "error while creating $smallPictPath <br><br>";
            $numbOfErr++;
        };
    } else {
        echo "can't load $name to $path <br>";
        $numbOfErr++;
    }
}

mysqli_close($connection);
echo "completed. Number or errors=$numbOfErr";
if ($numbOfErr == 0) header("Location: /index.php");

ob_end_flush();
