<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Select file to upload: <br>
        <input type="file" name="upload_file" id="">
        <br>
        <input type="submit" value="Upload File" name="upload_btn">
    </form>

    <?php
        if(isset($_POST['upload_btn'])) {
            // echo "<pre>";
            //     var_dump($_FILES['upload_file']);
            // echo "</pre>";

            $filename = $_FILES['upload_file']['name'];
            $type     = $_FILES['upload_file']['type'];
            $size     = $_FILES['upload_file']['size'];
            $tmp_name = $_FILES['upload_file']['tmp_name'];

            $destination = "uploads/$filename";

            if(move_uploaded_file($tmp_name, $destination)) {
                echo "<script> alert('File has been uploaded'); </script>";
            } else {
                echo "<script> alert('Failed to upload selected file.'); </script>";
            }
        }

    ?>
</body>
</html>