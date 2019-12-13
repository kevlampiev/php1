<div class="fs-img-window invisible">
    <img class="fullsize-photo" src="https://yandex.ru/images/search?rpt=simage&noreask=1&source=qa&text=JavaScript&stype=image&lr=237&pos=1&img_url=https%3A%2F%2Fwww.seoclerk.com%2Fpics%2Fwant57473-1FVSAA1514479153.png">
    <div class="img-description"> Ollallalllalal </div>
    <div class="window-bottom">
        <button onclick="closeImg()"> close</button>
    </div>
</div>

<style>
    .fs-img-window {
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        max-height: 60hw;
        z-index: 10;
        background-color: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        box-shadow: 38px 11px 19px 0px rgba(50, 50, 50, 0.99);

    }

    .fullsize-photo {
        width: 100%;
    }

    .img-description {
        border: 1px solid #ccc;
        margin: 5px;
        padding: 5px;
        font-style: italic;
    }

    .window-bottom {
        display: flex;
        justify-content: center;
        margin: 15px;

    }

    .window-bottom button {
        width: 78px;
        height: 31px;
        margin: 6px 0;
        text-transform: uppercase;
        border-radius: 7px;
        border: none;
        background-color: #97455f;
        color: #fff;
    }

    .appearance {
        animation-duration: 1.0s;
        animation-fill-mode: both;
        animation-name: appear;

    }

    @keyframes appear {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .disappearance {
        animation-duration: 1.0s;
        animation-name: disappear;
    }

    @keyframes disappear {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>

<script>

</script>