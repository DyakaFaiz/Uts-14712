<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Barang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <main class="container mt-3 w-50">
        <?php
        include "../koneksi.php";
        include "../uploadFoto.php";
        $id = $_POST["tid"];
        $nama = $_POST["tnama"];
        $ket = $_POST["tket"];
        $hrg = $_POST["tharga"];
        $stok = $_POST["tstok"];

        if (upload_foto($_FILES["foto"], "Barang")) {
            $foto = $_FILES["foto"]["name"];
            $sql = "INSERT INTO tbl_barang (id, nama, harga, keterangan, foto, stok) VALUES ('$id', '$nama','$hrg', '$ket', '$foto','$stok')";
            if ($conn->query($sql) === TRUE) {
                $conn->close();
                header("location: pageBarang.php");
            }
        } else {
            // echo "<p>Terjadi error saat mengunggah file.</p>";
            echo "<a href='pageBarang.php'>Kembali ke List Barang</a>";
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>