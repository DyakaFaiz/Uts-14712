<?php
include "../koneksi.php";
$id = $_GET["id"];

$sql = "DELETE FROM tbl_user WHERE id = '$id'";

if ($conn->query($sql) === TRUE)
    header("location: pageUser.php");
$conn->close();
