<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Photo-shop</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="css/main.css"> -->

</head>

<body>

  <div class="newUser-container">

    <div class="newUser-window">
      <form action="auth.php" method="post">

        <label for="login">Login: </label>
        <input type="text" name="login">

        <label for="password">Pasword</label>
        <input type="password" name="password">

        <label for="password2">Reenter pasword</label>
        <input type="password" name="password2">

        <label for="name">Full name</label>
        <input type="text" name="name">

        <label for="phone">Phone number:</label>
        <input type="tel" name="phone">

        <label for="email">e-mail:</label>
        <input type="email" name="email">


        <input type="submit" value="Sing up">
        <input type="reset" value="Reset">


      </form>

    </div>

  </div>
</body>

</html>

<style>
  .newUser-container {
    width: 1000px;
    height: 100vh;
    margin: 0 auto;
    background: url('img/castle.jpg');
    background-size: cover;

  }

  .newUser-window {
    background-color: rgb(243, 243, 230);
    padding: 10px;
    border: 1px solid #ddd;
    width: 600px;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    box-shadow: 38px 11px 19px 0px rgba(50, 50, 50, 0.99);
  }

  .newUser-window form {
    padding: 10px;
    border: 1px solid #ddd;
  }

  .newUser-window label {
    width: 100%;
    text-align: left;
  }

  .newUser-window input {
    width: 100%;
    padding-left: 15px;
    height: 25px;
    border: 1px solid #ddd;

    border-radius: 12px;
    margin-bottom: 15px;
  }

  input[type="submit"],
  input[type="reset"] {
    background-color: #97455f;
    color: #fff;
    height: 34px;
    width: 82px;

    padding-left: 5px;
  }
</style>