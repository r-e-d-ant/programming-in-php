
<?php
    if(isset($_POST['submit'])) {
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif'); // set allowed extensions

        if(!empty($_FILES['upload']['name'])) {
            $file_name = $_FILES['upload']['name']; // file name
            $file_size = $_FILES['upload']['size']; // file size
            $file_tmp = $_FILES['upload']['tmp_name']; // file temp. path

            $target_dir = "uploads/${file_name}"; // set directory to set the image in

            // get file ext
            $file_ext = explode('.', $file_name); // cut the file name where there is dot (.) and make an array
            $file_ext = strtolower(end($file_ext)); // get last element in the array which is the extension

            // Validate file ext, and size
            if(in_array($file_ext, $allowed_ext)) {
                if($file_size <= 1000000) {
                    move_uploaded_file($file_tmp, $target_dir); // save the uploaded image to the folder
                    $message = '<p style="color: green;">File uploaded</p>';
                } else {
                    $message = '<p style="color: red;">File is too large </p>';
                }
            } else {
                $message = '<p style="color: red;">Invalid file type</p>';
            }
        } else {
            $message = '<p style="color: red;">Please choose a file</p>';
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null;?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>