<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "db_uts";

$koneksi = mysqli_connect('localhost', 'root', '', 'db_uts');
$conn = new mysqli($hostname, $username, $password, $db);
if ($conn->connect_error)
    die("Koneksi ke server-database gagal");
