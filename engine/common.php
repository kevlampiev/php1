<?php
function setStr(string $smth): string
{
    return (isset($smth) && !empty($smth)) ? trim(htmlspecialchars($smth)) : "";
};

function setInt($smth): int
{
    // echo $smth;
    // echo (isset($smth) && !empty($smth));
    return (isset($smth) && !empty($smth)) ? ((int) $smth) : 0;
};
