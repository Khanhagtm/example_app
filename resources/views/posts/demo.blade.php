<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add user avatar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update an image set to your avatar.") }}
        </p>
    </header>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </form>
</section>
