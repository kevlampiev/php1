<?php
require("../engine/components/header.php");
require("../engine/settings.php");

$id = (isset($_GET["id"]) && !empty($_GET["id"])) ? (int) ($_GET["id"]) : null;

$sql = "SELECT * FROM goods_in_store WHERE id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);


?>


<main>

  <div class="titled-container">
    <div class="title">Product information </div>

    <div>
      <div class="good__card">
        <img src="<?= "img/shop/fullsize/" . $row['img'] ?>" alt="good-image" class="good__image">
        <div class="good__maininfo">
          <div>
            <h3 class="good__title"><?= $row['name'] ?></h3>
            <h4 class="category__title"><?= "Category:" . $row['category'] ?></h4>
            <div class="good__description">
              <?= $row['description'] ?>
            </div>
          </div>
          <div class="good__price">
            <p> <?= $row['price'] ?>
              <?= $row['currency'] ?>
            </p>
            <button class="order__button">Order</button>
          </div>
        </div>
      </div>

    </div>



  </div>



</main>
<?php
                                        require("../engine/components/shout.php");
                                        require("../engine/components/footer.php");
?>


<style>
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


  .good__card {

    margin: 10px;
    padding: 15px;
    display: flex;
    justify-content: center;

  }

  .good__image {
    object-fit: cover;
    opacity: 0.75;
    margin-right: 15px;
    max-height: 300px;

  }


  .good__title {
    color: maroon;
    padding: 0 15px;
    font-size: 18px;
    font-weight: 800;
  }

  .category__title {
    color: orangered;
    padding: 0 15px;
    font-size: 12px;
    font-style: italic;
  }

  .good__description {
    padding: 0 15px;
    font-style: italic;
    color: #999;

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

  .good__maininfo {
    float: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
  }
</style>



<script>

</script>