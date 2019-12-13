<div class="add-photo-form invisible">
    <form action="photoloader.php" method="POST" enctype="multipart/form-data">
        <label for="photo[]">Select files to load</label>
        <br>
        <input type="file" name="photo[]" multiple accept="image/*">
        <input type="submit" value="load">
        <input type="reset" value="cancel" onclick="closeAddPhotoForm()">
    </form>
</div>

<style>
    .add-photo-form {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: transform 1s erase;
        max-height: 60hw;
        z-index: 10;
        background-color: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        box-shadow: 38px 11px 19px 0px rgba(50, 50, 50, 0.99);

    }

    .add-photo-form form {
        padding: 10px;
        border: 1px solid #ccc;

    }

    .add-photo-form form label {
        width: 100%;
        text-align: left;

    }
</style>

<script>


</script>