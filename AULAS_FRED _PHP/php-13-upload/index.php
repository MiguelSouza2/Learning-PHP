<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
        <input type="file" name="archive[]" multiple="multiple" />
        <input name="submit" type="submit" value="submit">
    </form>
</body>
</html>