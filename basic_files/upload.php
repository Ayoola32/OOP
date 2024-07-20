<?php
if (isset($_POST['submit'])) {
    
    echo "<pre>";
    print_r($_FILES['file_upload']);
    echo "</pre>";


    $fileUploadErrors = [
        UPLOAD_ERR_OK => "There is no error, the file uploaded with success.",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive in php.ini.",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.",
        UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",
        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder.",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
    ];

    $the_error = $_FILES['file_upload']['error'];
    $the_message =  $fileUploadErrors[$the_error];


    $temp_name = $_FILES['file_upload']['tmp_name'];
    $the_file = $_FILES['file_upload']['name'];

    if(move_uploaded_file($temp_name, "uploads/$the_file")){
        $the_message = "File Uploaded Successfully";
    };


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h5>
        <?php
        if (!empty($fileUploadErrors)) {
            echo $the_message;
        } 
        ?>
    </h5>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <input type="file" name="file_upload">
        <br>
        <input type="submit" name="submit">
    </form>


</body>
</html>