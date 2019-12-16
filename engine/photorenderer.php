<?php

include("settings.php");

function addPhoto($photoFile, $id, $descript)
{
    return "<div class=\"gallery__item\" >
            <img src=\"img/gallery/small/$photoFile\" alt=\"$photoFile\"  onclick=\"displayImg(this)\" data-id=\"$id\"
            data-description=\"$descript\">
          </div>\n";
}

$sql = "SELECT id,title,descript,number_of_views FROM photos ORDER BY number_of_views DESC";
$res = mysqli_query($connection, $sql);

$resultStr = "";

while ($data = mysqli_fetch_assoc($res)) {
    $resultStr .= addPhoto($data['title'], $data['id'], $data['descript']);
}

mysqli_close($connection);

// $photos=scandir('img/small');
// foreach ($photos as $photo) {
//     if ($photo[0] == ".") continue;
//     if (($photo[0] != ".") && (exif_imagetype("img/small/$photo"))) {
//         $resultStr .= addPhoto($photo);
//     } else {
//         continue;
//     };
// }

echo $resultStr;
