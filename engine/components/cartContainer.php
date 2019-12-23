<?php

require("../engine/settings.php");
$user = $_COOKIE['user'];
$sql = "SELECT id, good_id, name, amount, price, amount*price as subtotal, currency, img FROM v_carts
        WHERE user=\"$user\"";

$result = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection));
$cartItems = array();
while ($row = mysqli_fetch_assoc($result)) $cartItems[] = $row;
?>


<div class="cartContainer">
    <? foreach ($cartItems as $item) : ?>
        <div class="cart__item">
            <img src="img/shop/small/<?= $item['img'] ?>" alt="">
            <p class="good__name"><?= $item['name'] ?></p>
            <p class="good__price"><?= $item['price'] . " " . $item['currency'] ?></p>
            <?php $good_id = $item['good_id'];
            echo "<button ";
            echo "onclick= \"addToCart(event, $good_id ,-1)\">-</button>";
            ?>
            <p class="amount" data-good=<?= $item['good_id'] ?>> <?= $item['amount'] ?> </p>
            <?php
            echo "<button ";
            echo "onclick= \"addToCart(event, $good_id ,1)\">+</button>";
            ?>
            <p class="subtotal"> <?= $item['subtotal'] . " " . $item['currency'] ?> </p>
        </div>
    <? endforeach; ?>
    <div class="cart__total">
        Total: 15 items at 135.00 EUR
    </div>
</div>

<style>
    .cart__item {
        margin: 0 15px;
        border: 1px solid #ddd;
        border-bottom: none;
        height: 100px;
        display: flex;
    }

    .cart__item:nth-child(2n) {
        background-color: #f7f7f7;
    }

    .cart__item img {
        width: 90px;
        height: auto;
        /* float: left; */
    }

    .cart__item p {
        margin: auto 15px;
        font-size: 18px;
    }

    .good__name {
        width: 300px;
    }

    .good__price {
        width: 100px;
    }

    .cart__item button {
        height: 25px;
        width: 25px;
        background-color: #ddd;
        border: 1px solid #ddd;
        border-radius: 12px;
        margin: auto 15px;
    }

    .cart__item button:hover {
        background-color: #97455f;
        color: #fff
    }

    .cart__total {
        margin: 0 15px;
        height: 50px;
        border-top: 3px solid #ddd;
        padding: 15px 50px;
        font-size: 16px;
        font-weight: 600;
        text-align: right;
    }
</style>