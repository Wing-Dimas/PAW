<?php 
  session_start();
  require "./fungsi/fungsi.php";

  if(isset($_SESSION["login"])){
    if(!$_SESSION["login"]){
      header("Location: index.php");
    }else{
      if($_SESSION["level"] == "waitter"){
          header("Location: pemesanan.php");
      }
  }
  }else{
    header("Location: index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Admin</title>
</head>
<body>

    <!-- ADMIN NAVBAR -->
    <div class="admin-navbar text-center">
        <img src="./asset/img/logo_dprox_coffe.png" alt="" width="125">
        <div class="nav flex-column nav-pills mt-1" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link text-start active" id="page-dashboard-tab" data-bs-toggle="pill" data-bs-target="#page-dashboard" type="button" role="tab" aria-controls="page-dashboard" aria-selected="true">
                <ion-icon name="apps"></ion-icon>
               <span>Dashboard</span> 
            </button>
            <button class="nav-link text-start" id="page-admin-tab" data-bs-toggle="pill" data-bs-target="#page-admin" type="button" role="tab" aria-controls="page-admin" aria-selected="false">
                <ion-icon name="people"></ion-icon>
                <span>Admin</span>
            </button>
            <button class="nav-link text-start" id="page-order-tab" data-bs-toggle="pill" data-bs-target="#page-order" type="button" role="tab" aria-controls="page-order" aria-selected="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
                <span>Order</span>
            </button>
            <button class="nav-link text-start" id="page-menu-tab" data-bs-toggle="pill" data-bs-target="#page-menu" type="button" role="tab" aria-controls="page-menu" aria-selected="false">
                <ion-icon name="albums"></ion-icon>
                <span>Menu</span>
            </button>
        </div>
    </div>
    <!-- END ADMIN NAVBAR -->

    <!-- ADMIN HEADER -->
    <div class="admin-header d-flex justify-content-end">
        <div class="left d-flex align-items-center me-3">
            <ion-icon name="person-circle"></ion-icon>
            <span class="ms-3">Silver Link</span>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="./fungsi/login/logout.php" class="dropdown-item" type="button">Logout</a></li>
            </ul>
          </div>
    </div>
    <!-- END ADMIN HEADER -->

    <!-- ADMIN CONTENT -->
    <div class="admin-content tab-content" id="v-pills-tabContent">
        <!-- DASHBOARD -->
        <div class="tab-pane fade show active" id="page-dashboard" role="tabpanel" aria-labelledby="page-dashboard-tab">
            <div class="container-fluid">
                <div class="row dashboard-items justify-content-between">
                    <div class="col col-4 dashboard-item dashboard-order d-flex justify-content-between">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
                        </div>
                        <div class="icon-deskripsi text-end">
                            <h5>Order</h5>
                            <h6>19</h6>
                        </div>
                    </div>
                    <div class="col col-4 dashboard-item dashboard-income d-flex justify-content-between">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <div class="icon-deskripsi text-end">
                            <h5>Income</h5>
                            <h6>Rp 125.000,00</h6>
                        </div>
                    </div>
                    <div class="col col-4 dashboard-item dashboard-customer-today d-flex justify-content-between">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                        </div>
                        <div class="icon-deskripsi text-end">
                            <h5>Customer Today</h5>
                            <h6>8</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END DASHBOARD -->

        <!-- ADMIN -->
        <div class="tab-pane fade" id="page-admin" role="tabpanel" aria-labelledby="page-admin-tab">
            <button class="btn btn-success btn-tambah-admin" data-bs-toggle="modal" data-bs-target="#form-modal-admin">Tambah</button>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col" style="width: 300px;">Username</th>
                    <th scope="col" style="width: 300px;">Password</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col" style="width: 200px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach(getDataAdmin() as $data): ?>
                  <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $data["username"]; ?></td>
                    <td><?= $data["password"]; ?></td>
                    <td><?= $data["jabatan"]; ?></td>
                    <td>
                      <div class="action d-flex justify-content-between">
                          <button class="btn btn-warning d-flex justify-content-between btn-edit tampilModalEditAdmin me-2" data-id="<?= $data["id_admin"] ?>" data-bs-toggle="modal" data-bs-target="#form-modal-admin">
                              <div class="icon"><ion-icon name="create-outline"></ion-icon></div>
                              <div class="title">Edit</div>
                            </button>
                            <a href="./fungsi/model/admin/delete.php?id=<?= $data["id_admin"] ?>" class="btn btn-danger d-flex justify-content-between btn-hapus">
                              <div class="icon"><ion-icon name="trash-outline"></ion-icon></div>
                              <div class="title">Hapus</div>
                            </a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
        </div>
        <!-- END ADMIN -->

        <!-- ORDER -->
        <div class="tab-pane fade" id="page-order" role="tabpanel" aria-labelledby="page-order-tab">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-waitting-tab" data-bs-toggle="pill" data-bs-target="#pills-waitting" type="button" role="tab" aria-controls="pills-waitting" aria-selected="true">Waitting</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-accepted-tab" data-bs-toggle="pill" data-bs-target="#pills-accepted" type="button" role="tab" aria-controls="pills-accepted" aria-selected="false">Accepted</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-done-tab" data-bs-toggle="pill" data-bs-target="#pills-done" type="button" role="tab" aria-controls="pills-done" aria-selected="false">Done</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-waitting" role="tabpanel" aria-labelledby="pills-waitting-tab">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <span>Deni</span>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-0">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Mocha</span>
                                        <span class="qty">1x</span>
                                    </li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="pills-accepted" role="tabpanel" aria-labelledby="pills-accepted-tab">...</div>
                <div class="tab-pane fade" id="pills-done" role="tabpanel" aria-labelledby="pills-done-tab">...</div>
              </div>
        </div>
        <!-- END ORDER -->

        <!-- MENU -->
        <div class="tab-pane fade" id="page-menu" role="tabpanel" aria-labelledby="page-menu-tab">
            <button class="btn btn-success btn-tambah-menu" data-bs-toggle="modal" data-bs-target="#form-modal-menu">Tambah</button>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategory</th>
                    <th scope="col">Stok</th>
                    <th scope="col">harga</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">gambar</th>
                    <th scope="col" style="width: 200px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach(getDataMenu() as $data): ?>
                  <tr>
                    <th scope="row"><?= $data["Kode_menu"]; ?></th>
                    <td><?= $data["nama_menu"]; ?></td>
                    <td><?= $data["kategory"]; ?></td>
                    <td><?= $data["stok_menu"]; ?></td>
                    <td><?= $data["harga_menu"]; ?></td>
                    <td><?= $data["deskripsi"]; ?></td>
                    <td><?= $data["gambar"]; ?></td>
                    <td>
                      <div class="action d-flex justify-content-between">
                          <button class="btn btn-warning d-flex justify-content-between btn-edit tampilModalEditMenu me-2" data-id="<?= $data["Kode_menu"] ?>" data-bs-toggle="modal" data-bs-target="#form-modal-menu">
                              <div class="icon"><ion-icon name="create-outline"></ion-icon></div>
                              <div class="title">Edit</div>
                            </button>
                            <a href="./fungsi/model/admin/delete.php?id=<?= $data["Kode_menu"] ?>" class="btn btn-danger d-flex justify-content-between btn-hapus">
                              <div class="icon"><ion-icon name="trash-outline"></ion-icon></div>
                              <div class="title">Hapus</div>
                            </a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
        </div>
        <!-- END MENU -->

    </div>
    <!-- END ADMIN CONTENT -->



    <!-- MODAL ADMIN -->
    <div class="modal fade" id="form-modal-admin" tabindex="-1" aria-labelledby="admin-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="admin-modal">Tambah Admin</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="./fungsi/model/admin/tambah.php" method="POST">
                <input id="id_admin" name="id_admin" type="hidden">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <select name="jabatan" id="jabatan" class="form-select" aria-label="Default select example">
                  <option selected value="admin">Admin</option>
                  <option value="waitter">Waitter</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END MODAL ADMIN -->

    <!-- MODAL MENU -->
    <div class="modal fade" id="form-modal-menu" tabindex="-1" aria-labelledby="menu-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="menu-modal">Tambah Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="./fungsi/model/menu/tambah.php" method="POST">
                <div class="mb-3">
                  <label for="kode_menu" class="form-label">Kode Menu</label>
                  <input type="text" name="kode_menu" class="form-control" id="kode_menu">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                  <label for="kategory" class="form-label">Kategory</label>
                  <input type="text" name="kategory" class="form-control" id="kategory">
                </div>
                <div class="mb-3">
                  <label for="stok" class="form-label">Stok</label>
                  <input type="text" name="stok" class="form-control" id="stok">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="text" name="harga" class="form-control" id="harga">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea cols="50" rows="3" name="deskripsi" class="form-control" id="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                  <label for="gambar" class="form-label">Gambar</label>
                  <input type="text" name="gambar" class="form-control" id="gambar">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- END MODAL MENU -->

    <script src="./asset/js/jquery.js"></script>
    <script src="./asset/js/popper.min.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./asset/js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./asset/js/script.js"></script>
</body>
</html>


<?php 
  if(isset($_SESSION["flash"])){
    $icon = $_SESSION["flash"]["tipe"];
    $pesan = $_SESSION["flash"]["pesan"];
    $table = $_SESSION["flash"]["table"];

    echo "<script>
    Swal.fire({
      icon: '$icon',
      title: 'Data $table',
      text: '$pesan',
    })
    </script>";

    unset($_SESSION["flash"]);
  }

?>