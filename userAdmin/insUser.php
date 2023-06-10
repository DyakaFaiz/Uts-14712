<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input User</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <main class="container mt-3 w-50">
        <?php
        include "../koneksi.php";
        include "../uploadFoto.php";
        $id = $_POST["tid"];
        $username = $_POST["tusername"];
        $email = $_POST["temail"];
        $notelp = $_POST["tnotelp"];
        $password = $_POST["tpassword"];
        $role = $_POST["trole"];

        $sql = "INSERT INTO tbl_user (id, username, email, no_telepon, password, role) VALUES ('$id', '$username','$email', '$notelp', '$password','$role')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location: pageUser.php");
        } else {
            // echo "<p>Terjadi error saat mengunggah file.</p>";
            echo "<a href='pageUser.php'>Kembali ke List User</a>";
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>