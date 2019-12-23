<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo-shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.js"></script>
    <script src="js/common.js"></script>


</head>

<body>
    <div class="quick-links-block">
        <div class="social-buttons rounded">
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#">@</a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-rss"></i></a>
        </div>

        <div class="links">

            <a href="signUpForm.php"> Sign Up </a>

            <a href="#" onclick="makeLogin()" id="login-menu">
                <?php if (trim($_COOKIE['user']) == '') : ?>
                    Log in
                <?php else : ?>
                    Log out
                <?php endif ?>
            </a>

            <a href="#">RSS Feeds</a>
            <a href="#">Archived News</a>
        </div>
    </div>

    <div class="main-container">
        <header>
            <div>
                <img src="img/Brabant-logo.png" alt="South Brabant">
                <p>HEEZE</p>
            </div>
            <form>
                <input type="button" class="close-btn" value="-">
                <input type="text" placeholder="Search Our Website...">
                <input type="submit" value="SUBMIT">
            </form>
            <div class="user-info">
                <?= $_COOKIE['login'] ?>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="/">home</a></li>
                <li><a href="/catalog.php">shop</a></li>
                <li><a href="/photos.php">gallery</a></li>

            </ul>
            <?php if (trim($_COOKIE['user']) != '') : ?>
                <div class="cart">
                    <?= $_COOKIE['user'] ?>
                    <a href="cart.php">
                        <i class="fa fa-shopping-cart" aria-hidden="true">Move</i></a>
                </div>
            <?php endif ?>

        </nav>


        <script>
            function makeLogin() {
                if (getCookie('user') == '') {
                    let loginWindow = document.querySelector('.login-window')
                    loginWindow.classList.remove('hidden')

                } else {
                    document.cookie = 'user=; expires=-1'
                    document.cookie = 'password=; expires=-1'
                    document.querySelector('#login-menu').innerHTML = "Log in"
                }

            }
        </script>

        <style>
            nav {
                margin: 0 20px;
                padding: 0;
                min-height: 50px;
                background-color: #97455f;
                color: #fff;
                display: flex;
                flex-wrap: nowrap;
                justify-content: space-between;
            }

            nav ul {
                display: block;
                width: 50%;
                margin: 0;
                padding: 0 20px 0 0;
            }

            nav li {
                display: inline-block;
                padding: 0 2px;
            }

            @media (max-width: 492px) {
                nav ul {
                    padding: 0;
                }

                nav li {
                    display: block;
                    text-align: center;
                    border-bottom: 1px solid pink;
                }
            }

            nav li a {
                display: block;
                height: 50px;
                line-height: 50px;
                text-transform: uppercase;
                text-decoration: none;
                color: white;
                padding: 0 15px;
            }

            nav li a:hover {
                background-color: #6a3144;
                text-decoration: none;
                color: #fff;
            }

            nav .cart {
                font-size: 16px;
                margin: 15px 20px 0 0;
            }

            .cart a {
                text-decoration: none;
            }
        </style>