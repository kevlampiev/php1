<div class="login-window hidden">
    <form>
        <label for="login">Login: </label>
        <input type="text" name="login">
        <label for="password">Pasword</label>
        <input type="password" name="password">
        <p class="error-notif hidden">Incorrect login or password...</p>
        <button onclick="closeLW(event)">Cancel</button>
        <button onclick="register(event)">Login</button>

    </form>

</div>

<script>
    function closeLW(event) {
        let loginWindow = document.querySelector('.login-window')
        loginWindow.classList.add('hidden')
        event.preventDefault()
    }

    function cookieExp() {
        let date = new Date(Date.now() + 24 * 3600 * 7 * 1000)
        return '; expires=' + date.toUTCString()
    }

    function register(event) {
        let user = document.querySelector('input[name="login"]').value;
        let password = document.querySelector('input[name="password"]').value;
        event.preventDefault()

        $.ajax({
            type: "POST",
            url: "auth.php",
            data: "user=" + user + "&password=" + password,
            success: (answer) => {
                let a = JSON.parse(answer);
                // alert(answer);
                if (a['result'] == "success") {
                    document.querySelector('#login-menu').innerHTML = "Log out"
                    document.cookie = "user=" + user + cookieExp()
                    document.cookie = "password=" + password + cookieExp()
                    closeLW(event)
                } else {
                    document.querySelector('.error-notif').classList.remove('hidden')

                }
            }
        });
    }
</script>

<style>
    .login-window {
        background-color: rgb(243, 243, 230);
        opacity: 0.9;
        padding: 10px;
        border: 1px solid #ddd;
        width: 400px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 38px 11px 19px 0px rgba(50, 50, 50, 0.99);

    }

    .login-window form {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .login-window label {
        width: 100%;
        text-align: left;
    }

    .login-window input {
        width: 100%;
        padding-left: 15px;
        height: 25px;
        border: 1px solid #ddd;

        border-radius: 12px;
        margin-bottom: 15px;
    }

    .login-window button {
        float: right;
        background-color: #97455f;
        color: #fff;
        height: 34px;
        width: 82px;

        padding-left: 5px;
    }

    .error-notif {
        color: red;
    }

    .hidden {
        visibility: hidden;
    }
</style>