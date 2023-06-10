<?php
function upload_foto($ft, $data)
{
    if ($data == "user") {
        $target_dir = "../imgUser/";
    } else if ($data == "../member") {
        $target_dir = "../imgMember/";
    } else {
        $target_dir = "../img/";
    }
    $target_file = $target_dir . basename($ft["name"]);
    // echo $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<p>Maaf, file yang sama sudah ada.</p>";
        $uploadOk = 0;
    }
    // Check file size
    if ($ft["size"] > 500000) {
        echo "<p>Maaf, ukuran file terlalu besar. Maksimal 500 KB</p>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<p>Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.</p>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0)
        echo "<p>Maaf, file Anda tidak dapat diunggah.</p>";
    // If everything is ok, try to upload file
    else {
        if (move_uploaded_file($ft["tmp_name"], $target_file)) {
            return true;
        } else {
            return false;
        }
    }
}
