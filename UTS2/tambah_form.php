<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah data</h1>
    <form action="tambah.php" method="POST">
        <div>
            <label for="nama">Nama</label> : <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="email">Email</label> : <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="alamat">Alamat</label> : <input type="alamat" name="alamat" id="alamat">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>