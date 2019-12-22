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

            <a href="new_user.php"> Sign Up </a>

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
        </header>

        <nav>
            <ul>
                <li><a href="/">home</a></li>
                <li><a href="/catalog.php">shop</a></li>
                <li><a href="/photos.php">gallery</a></li>

            </ul>
        </nav>


        <script>
            function getCookie(name) {
                var matches = document.cookie.match(new RegExp(
                    '(?:^|\s)' + name.replace(/([.$?*+\\\/{}|()\[\]^])/g, '\\$1') + '=(.*?)(?:;|$)'
                ))
                return matches ? decodeURIComponent(matches[1]) : ''
            }

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