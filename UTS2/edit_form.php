
<?php 
require "function.php";
$data = getSingle($_GET["id"])[0];
?>
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
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data["id_wing"] ?>">
        <div>
            <label for="nama">Nama</label> : <input type="text" name="nama" id="nama" value="<?= $data["nama_wing"] ?>">
        </div>
        <div>
            <label for="email">Email</label> : <input type="email" name="email" id="email" value="<?= $data["email_wing"] ?>">
        </div>
        <div>
            <label for="alamat">Alamat</label> : <input type="alamat" name="alamat" id="alamat" value="<?= $data["alamat_wing"] ?>">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>