<h2>Single upload</h2>
<form action="core/upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image">
  <button type="submit">Upload</button>
</form>

<h2>Multi upload</h2>
<form action="core/multiupload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="images[]">
  <input type="file" name="images[]">
  <input type="file" name="images[]">
  <button type="submit">Upload</button>
</form>

<style>
  * {
    font-size: 26px;
  }

  input, button {
    display: block;
    margin-bottom: 10px;
  }
</style>