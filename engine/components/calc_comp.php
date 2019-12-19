<?php
$calcPath = $_SERVER['DOCUMENT_ROOT'];
$calcPath = str_replace("public_html", "engine", $calcPath);
$calcPath = $calcPath . "/calculate.php";

?>

<form class="calculator" method="POST" action="calculate.php">
    <h3>Calculator variant #1</h3>
    <label for="argument1">Expression</label>
    <input type="number" name="argument1" step="0.01" value=0>
    <select name="operation" id="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="argument2" step="0.01" value=0>

    <input type="submit" value="calculate">

</form>

<form class="calculator" method="POST" action="calculate.php">
    <h3>Calculator variant #2</h3>
    <div>
        <label for="argument1">Argument 1::</label>
        <input type="number" name="argument1" step="0.01" value=0>
        <label for="argument2">Argument 2:</label>
        <input type="number" name="argument2" step="0.01" value=0>
    </div>
    <div>
        <input type="submit" value="+" name="plus">
        <input type="submit" value="-" name="minus">
        <input type="submit" value="*" name="multiply">
        <input type="submit" value="/" name="divide">
    </div>

</form>

<style>
    .calculator {
        width: 50hw;
        padding: 10px;
        margin: 25px;
        border: 1px solid maroon;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(143, 139, 143, 0.5);
        -moz-box-shadow: 10px 10px 5px 0px rgba(143, 139, 143, 0.5);
        box-shadow: 10px 10px 5px 0px rgba(143, 139, 143, 0.5);

    }

    .calculator h3 {
        width: 100%;
        font-size: 16px;
        text-align: center;
        background:
            linear-gradient(#ddd 50%, #fff 0);
        background-size: 100% 5px;
        margin-bottom: 25px;
    }

    .calculator input,
    select {
        height: 31px;
        margin: 6px 0;
        border-radius: 7px;
        font-size: 16px;
        text-align: center;
        border: 1px solid #ccc;
    }

    .calculator label {
        text-transform: uppercase;
        margin: 10px 15px;
        font-size: 16px;
        color: #777;
    }

    .calculator input[type="submit"] {
        font-size: 14px;
        width: 100px;
        text-transform: uppercase;
        background-color: #ddd;
        color: #777;
        border-radius: 7px;
        border: none;
        margin-left: 15px;
    }

    .calculator input[type="submit"]:hover {
        background-color: #6a3144;
        text-decoration: none;
        color: #fff;
    }
</style>