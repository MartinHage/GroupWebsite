<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name';
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    //Explodes the filename at the "." to get the extension
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt))

    //What files to allow
    $allowed = array('jpg', 'jpeg', 'png');

    //if file type is in array
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'img/uploads/'.fileNameNew
                move_uploaded_file($fileTmpName, $fileDestination)
                header("Location: gallery.html?uploadsuccessful")
            } else {
                echo "Your file is to big max size is 1mb"
            }
        }else {
            echo "There was an error uploading your file"
        }
    } else {
        echo "You cannot upload files of this type"
    }
}
?>