<?php
include "../koneksi.php";
$id = $_GET["id"];
$sql = "SELECT * FROM tbl_user WHERE id = '$id'";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
    $role = $row['role'];
    $notelp = $row['no_telepon'];
}
?>
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
    <nav class="container w-25 mt-3 text-center">
        <a href="pageUser.php" class="nav-link text-light bg-primary rounded shadow p-2">Kembali ke List User</a>
    </nav>
    <main class="container mt-3 w-50">
        <h1>Form Edit User</h1>
        <form action="updUser.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="l1" class="form-label">ID</label>
                <input type="number" class="form-control" id="l1" name="tid" placeholder="ID" value="<?= $id ?>">
            </div>
            <div class="mb-3">
                <label for="l2" class="form-label">Username</label>
                <input type="text" class="form-control" id="l2" name="tusername" placeholder="Username.." value="<?= $username ?>">
            </div class="mb-3">
            <div class="mb-3">
                <label for="l5" class="form-label">Email</label>
                <input type="text" class="form-control" id="l5" name="temail" placeholder="Email.." value="<?= $email ?>">
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">No. Telp</label>
                <input type="text" class="form-control" id="l3" name="tnotelp" placeholder="Nomor telephone.." value="<?= $notelp ?>">
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Password</label>
                <input type="text" class="form-control" id="l3" name="tpassword" placeholder="Password.." value="<?= $password ?>">
            </div>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Role</label>
                <input type="text" class="form-control" id="l3" name="trole" placeholder="Role.." value="<?= $role ?>">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>