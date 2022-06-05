<?php 
require "function.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data</title>
</head>
<body>
    <h1>Tampilan data</h1>
    <a href="tambah_form.php">Tambah</a>
    <table class="table">
        <thead>
            <th>No</th>
            <th>id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>action</th>
        </thead>
        <tbody>
            <?php 
            $no=1; 
            foreach(getData() as $data): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data["id_wing"]; ?></td>
                <td><?= $data["nama_wing"]; ?></td>
                <td><?= $data["email_wing"]; ?></td>
                <td><?= $data["alamat_wing"]; ?></td>
                <td>
                    <a href="edit_form.php?id=<?= $data["id_wing"] ?>">Edit</a> | 
                    <a href="delete.php?id=<?= $data["id_wing"] ?>">Hapus</a>

                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>