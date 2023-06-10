<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

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

        $sql = "UPDATE tbl_user SET username='$username', email='$email', no_telepon='$notelp', password = '$password', role = '$role' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:pageUser.php");
        } else {
            $conn->close();
            // echo "New records failed";
        }
        ?>
    </main>
</body>

</html>