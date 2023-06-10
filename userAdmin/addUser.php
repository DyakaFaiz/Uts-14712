<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input User</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <nav class="container w-50 mt-3">
        <a href="pageUser.php">Kembali ke List Barang</a>
    </nav>
    <main class="container w-50">
        <h1>Form Entry Barang</h1>
        <form action="insUser.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="l1" class="form-label">ID</label>
                <input type="number" class="form-control" id="l1" name="tid" placeholder="ID" required>
            </div>
            <div class="mb-3">
                <label for="l2" class="form-label">Username</label>
                <input type="text" class="form-control" id="l2" name="tusername" placeholder="Username.." required>
            </div class="mb-3">
            <div class="mb-3">
                <label for="l5" class="form-label">Email</label>
                <input type="text" class="form-control" id="l5" name="temail" placeholder="Email.." required>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">No. Telp</label>
                <input type="text" class="form-control" id="l3" name="tnotelp" placeholder="Nomor telephone.." required>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Password</label>
                <input type="password" class="form-control" id="l3" name="tpassword" placeholder="Password.." required>
            </div>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Role</label>
                <input type="text" class="form-control" id="l3" name="trole" placeholder="Role.." required>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>