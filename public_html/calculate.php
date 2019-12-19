<?php

//print_r($_POST);
$arg1 = (isset($_POST["argument1"]) && !empty($_POST["argument1"])) ? (int) ($_POST["argument1"]) : 0;
$arg2 = (isset($_POST["argument2"]) && !empty($_POST["argument2"])) ? (int) ($_POST["argument2"]) : 0;

$operations = ["operation", "plus", "minus", "divide", "multiply"];
$operation = "";

foreach ($operations as $el) {
    $smth = $_POST[$el];
    $operation .= (isset($smth) && !empty($smth)) ? trim(htmlspecialchars($smth)) : "";
}

switch ($operation) {
    case "+":
        $res = $arg1 + $arg2;
        break;
    case "-":
        $res = $arg1 - $arg2;
        break;
    case "*":
        $res = $arg1 * $arg2;
        break;
    case "/":
        if ($arg2 !== 0) {
            $res = $arg1 / $arg2;
        } else {
            $res = "деление на 0 запрещено...";
        };
        break;
    default:
        $res = "операция $operation не определена...";
}
?>

    <?php
    require("../engine/components/header.php");
    ?>


    <main>

        <div>
            <h2> <?= $arg1 . $operation . $arg2 . "=" . $res ?></h2>
            <a href="calculators.php">Back to calculators</a>
        </div>

    </main>
    <?php
    require("../engine/components/shout.php");
    ?>

    <?php
    require("../engine/components/footer.php");
    ?>