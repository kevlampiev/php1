<?php
function setStr(string $smth): string
{
    return (isset($smth) && !empty($smth)) ? trim(htmlspecialchars($smth)) : "";
};
