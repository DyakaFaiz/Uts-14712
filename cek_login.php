<?php
session_start();
include 'koneksi.php';
$username = $_POST['tuser'];
$password = $_POST['tpass'];

$sql = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
$cari = mysqli_num_rows($sql);
$data = mysqli_fetch_assoc($sql);

if ($cari > 0) {
    if ($data['role'] == 'admin' && $data['password'] == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'admin';
        header('location:dashboardAdmin.php');
    } else if ($data['role'] == 'user' && $data['password'] == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'user';
        header('location:dashboardUser.php');
    } else {
        if ($username == "" || $password == "") {
            echo "<h1>Username/password salah</h1>";
            header('location:index.php');
        }
    }
} else {
    echo "data tidak ditemukan";
}
