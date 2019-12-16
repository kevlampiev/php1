<?php
require("../engine/settings.php");
$sql = "SELECT * FROM goods_in_store";
$result = mysqli_query($connection, $sql);
$goods = array();
while ($row = mysqli_fetch_assoc($result)) $goods[] = $row;

?>



<div class="titled-container">
    <div class="title">SHOP</div>
    <div class="shop__navigation">
        <!-- <button class="gallery__btn" onclick="addPhotos()"> Add more photos</button> -->
    </div>
    <div class="shop__items">
        <? foreach ($goods as $good) : ?>
            <a href="/good-card.php?id=<?= $good['id'] ?>" class="mega-anchor">
                <div class="good">
                    <img src="<?= "img/shop/small/" . $good['img'] ?>" alt="good-image" class="good__image">
                    <h3 class="good__title"><?= $good['name'] ?></h3>
                    <div class="good__description">
                        <?= mb_strimwidth($good['description'], 0, 120, '...') ?>
                    </div>
                    <div class="good__price">
                        <p> <?= $good['price'] ?>
                            <?= $good['currency'] ?>
                        </p>
                        <button class="order__button">Order</button>
                    </div>


                </div>
            </a>
        <? endforeach; ?>

    </div>



</div>

<style>
    .shop__navigation {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: right;
        width: 100%;
    }

    .shop__btn {
        background-color: #97455f;
        color: #fff;
        width: 150px;
        height: 31px;
        margin: 6px 0;
        text-transform: uppercase;
        border-radius: 7px;
        border: none;
    }

    .shop__btn:hover {
        background-color: #ee802f;
        color: #fff;
    }

    .shop__items {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .good {

        width: 380px;
        height: 182px;
        margin: 10px;
        border: 1px solid #ccc;
        padding: 15px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(143, 139, 143, 0.5);
        -moz-box-shadow: 10px 10px 5px 0px rgba(143, 139, 143, 0.5);
        box-shadow: 10px 10px 5px 0px rgba(143, 139, 143, 0.5);
        overflow: hidden;
    }

    .good__image {
        float: left;
        max-height: 148px;
        object-fit: cover;
        opacity: 0.75;
        margin-right: 15px;
        height: 150px;
        width: 150px;
    }

    .good__image:hover {
        outline: 1px solid orange;
        opacity: 1;
    }

    .good__title {
        color: maroon;
        padding: 0 15px;
        font-size: 18px;
        font-weight: 800;
    }

    .good__description {
        padding: 0 15px;
        font-style: italic;
        color: #999;
        height: 90px;
    }

    .good__price {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
    }

    .good__price p {
        color: red;
        font-size: 18px;
        font-style: italic;
        padding-top: 6px;
    }

    .order__button {
        margin-top: 5px;
        padding: 0 15px;
        height: 25px;
        border-radius: 12px;
        text-transform: uppercase;
        background-color: #97455f;
        color: #fff;
    }

    .mega-anchor:hover {
        text-decoration: none;
    }
</style>



<script>

</script>