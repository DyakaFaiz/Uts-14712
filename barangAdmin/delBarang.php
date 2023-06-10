<?php
include "../koneksi.php";
$id = $_GET["id"];

$sql = "SELECT foto FROM tbl_barang WHERE id = '$id'";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
    $foto = $row["foto"];
}
if ($foto != "")
    unlink("img/" . $foto);
$sql = "DELETE FROM tbl_barang WHERE id = '$id'";

if ($conn->query($sql) === TRUE)
    header("location: pageBarang.php");
$conn->close();
