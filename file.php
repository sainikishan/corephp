<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>

<body>
    <h2>Upload File</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>

</html>