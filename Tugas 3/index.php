<?php 
require "./fungsi/fungsi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Home</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="navigation">
        <ul>
          <li>
            <a href="">
              <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
              <span class="title">Admin</span>
            </a>
          </li>
          <li>
            <a href="">
              <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="">
                <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                <span class="title">Mahasiswa</span>
            </a>
          </li>
          <li>
            <a href="">
                <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                <span class="title">Message</span>
            </a>
        </li>
        <li>
          <a href="">
              <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
              <span class="title">Settings</span>
          </a>
        </li>
        <li>
            <a href="">
                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- MAIN -->
      <div class="main">
          <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <!-- search -->
            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <!-- userImg -->
            <div class="user">
                <img src="./assets/img/user.jpg">
            </div>
          </div>

          
          <div class="container-fluid">
            <div class="details">
              <div class="mahasiswa">
                <div class="cardHeader">
                  <h2>Mahasiswa</h2>
                    <button type="button" class="btn btn-success btn-tambah"  data-toggle="modal" data-target="#formModal">
                      <div class="icon"><ion-icon name="add-outline"></ion-icon></div>
                      <div class="title">Tambah</div>
                    </button>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Semester</th>
                        <th scope="col">IPK</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach(getAllDataMahasiswa() as $mhs): ?>
                      <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $mhs["nama"]; ?></td>
                        <td><?= $mhs["nim"]; ?></td>
                        <td><?= $mhs["fakultas"]; ?></td>
                        <td><?= $mhs["jurusan"]; ?></td>
                        <td><?= $mhs["semester"]; ?></td>
                        <td><?= $mhs["ipk"]; ?></td>
                        <td class="action">
                          <button class="btn btn-warning tampilModalEdit" data-id="<?= $mhs["id"] ?>" data-toggle="modal" data-target="#formModal">
                            <div class="icon"><ion-icon name="create-outline"></ion-icon></div>
                            <div class="title">Edit</div>
                          </button>
                          <a href="./fungsi/delete.php?id=<?= $mhs["id"] ?>" class="btn btn-danger btn-hapus">
                            <div class="icon"><ion-icon name="trash-outline"></ion-icon></div>
                            <div class="title">Hapus</div>
                          </a>
                        </td>
                      </tr>
                      <?php $no++; ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
      </div>
    </div>

    

    <!-- modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Modal title</h5>
          </div>
          <div class="modal-body">
            <form action="./fungsi/tambah.php" method="POST">
              <input type="hidden" id="id" name="id" value="">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan nama">
              </div>
              <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input name="nim" type="text" class="form-control" id="nim" placeholder="Masukan Nim">
              </div>
              <div class="mb-3">
                <label for="fakultas" class="form-label">Fakultas</label>
                <input name="fakultas" type="text" class="form-control" id="fakultas" placeholder="Masukan fakultas">
              </div>
              <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan">
              </div>
              <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input name="semester" type="text" class="form-control" id="semester" placeholder="Masukan semester">
              </div>
              <div class="mb-3">
                <label for="ipk" class="form-label">IPK</label>
                <input name="ipk" type="text" class="form-control" id="ipk" placeholder="Masukan IPK">
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>




    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/sweetalert2.all.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>


<?php 
if(isset($_SESSION["flash"])){
  $pesan = $_SESSION["flash"]["pesan"];
  $tipe = $_SESSION["flash"]["tipe"];
  unset($_SESSION["flash"]);
  echo "<script>
    Swal.fire({
      title: 'Data Mahasiswa',
      text: '$pesan',
      icon: '$tipe'
    });
  </script>";
}
?>