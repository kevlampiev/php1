<?php

//Топорно, конечно

require("../engine/settings.php");

/**
 * 
 */
function setStr(string $smth): string
{
    return (isset($smth) && !empty($smth)) ? trim(htmlspecialchars($smth)) : "";
};

$user = setStr($_POST['user']);
$email = setStr($_POST['email']);
$message = setStr($_POST['message']);

$dataValid = ($user != "" && $email != "" && $message != "");

$sql = "INSERT INTO feedbacks(user_name,email,message) VALUES (\"$user\",\"$email\",\"$message\")";

require("../engine/components/header.php");
?>


<main>

    <div class="box-shadowed">

        <h2>Feedback status</h2>
        <p>
            <?php
            if ($dataValid && mysqli_query($connection, $sql)) {
                echo "Thank you for you message. Your message has been delivered successfully ";
            } else {
                if ($dataValid) {
                    echo "<span>Smth went wrong ....<span>";
                } else {
                    echo "<span>Message data isn't correct. Pls fill all the inputs ....<span>";
                };
            };

            ?>
        </p>

        <button onclick="location.href = '/'">Back</button>
    </div>
</main>


<?php
require("../engine/components/shout.php");
require("../engine/components/footer.php");
?>

<style>
    .box-shadowed {
        background-color: rgba(255, 255, 200, 0.5);
        font-size: 20px;
        width: 100%;
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

    .box-shadowed h2 {
        width: 100%;
        font-size: 25px;
        text-align: center;
        background:
            linear-gradient(#ddd 50%, #fff 0);
        background-size: 100% 5px;
        margin-bottom: 25px;
    }

    .box-shadowed p {
        width: 100%;
        color: #777;
        text-align: center;
    }

    .box-shadowed span {
        color: red;
        width: 100px;
    }
</style>