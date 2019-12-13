<div class="titled-container">
    <div class="title">gallery</div>
    <div class="gallery__navigation">
        <!-- <button class="gallery__btn" onclick="addPhotos()"> Add more photos</button> -->
    </div>
    <div class="gallery__itemCnr">

        <?php
        require("../engine/photorenderer.php");

        require("imageview.php");
        require("addPhotosForm.php");
        ?>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script defer>
            let displayWnd = document.querySelector('.fs-img-window')

            /**
             * Увеличение количества просмотров в базе данных
             */
            function incNumViews(id) {
                console.log(id);
                $.ajax({
                    type: "POST",
                    url: "reg_img_view.php",
                    data: "id=" + id,
                    success: (answer) => {
                        console.log(answer)
                    }
                });
            }

            /**
             * Открытие окна просмотра
             */
            function displayImg(element) {
                let path = element.src;
                path = path.replace(new RegExp('/small/', 'g'), '/fullsize/');

                let img = displayWnd.querySelector('img')
                img.src = path;

                let id = element.dataset.id

                displayWnd.querySelector('.img-description').innerHTML = element.dataset.description
                //console.log(`img.dataset.id=${id}`);

                displayWnd.classList.remove('invisible')
                displayWnd.classList.remove('disappearance')
                displayWnd.classList.add('appearance')

                incNumViews(id);
            }

            function closeImg() {
                setTimeout(() => {
                    displayWnd.classList.add('invisible')

                }, 900);
                displayWnd.classList.remove('appearance')
                displayWnd.classList.add('disappearance')
            }

            let addPhForm = document.querySelector('.add-photo-form')

            function addPhotos() {
                addPhForm.classList.remove('invisible')
            }

            function closeAddPhotoForm() {
                addPhForm.classList.add('invisible')
            }
        </script>

    </div>



</div>