<?php
  // Memulai sesi
  session_start();
  include 'koneksi.php';

  // Cek apakah tombol "Daftar" telah ditekan
  if (isset($_POST["register"])) {
    // Mengambil data dari formulir register
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Membuat query untuk mengecek apakah username atau email sudah digunakan
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      // Jika username atau email sudah digunakan, tampilkan pesan kesalahan
      echo "Username atau email sudah digunakan!";
    } else {
      // Jika username atau email belum digunakan, insert data ke database
      $query = "INSERT INTO user (username, password) VALUES ('$username',  '$password')";
      mysqli_query($conn, $query);

      // Redirect ke halaman login
      header("Location: index.php");
      exit;
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <h2>Register</h2>
  <form method="post" action="register.php">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br>
 
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit" name="register">Daftar</button>
  </form>
</body>
</html>
