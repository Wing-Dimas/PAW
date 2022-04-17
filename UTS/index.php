<?php 

  session_start();
  if(isset($_SESSION["login"])){
    if($_SESSION["level"]){
      header("Location: admin.php");
    }else{
      header("Location: pemesanan.php");
    }
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

    <title>Login</title>
</head>
<body class="d-flex justify-content-center align-items-center">


    <!-- LOGIN -->
    <div class="page-login">
        <img src="./asset/img/logo_dprox_coffe.png" alt="">
        <form action="./fungsi/login/login.php" method="post">
            <div class="mb-3 d-flex justify-content-center">
              <input type="text" name="username" class="form-control form-login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
            </div>
            <div class="mb-3 text-center d-flex justify-content-center">
              <input type="password" name="password" class="form-control form-login" id="exampleInputPassword1" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- END LOGIN -->

    <script src="./asset/js/jquery.js"></script>
    <script src="./asset/js/popper.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./asset/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./asset/js/script.js"></script>
</body>
</html>

<?php 
  if(isset($_SESSION["flash"])){
    $icon = $_SESSION["flash"]["tipe"];
    $pesan = $_SESSION["flash"]["pesan"];
    $head = $_SESSION["flash"]["head"];

    echo "<script>
    Swal.fire({
      icon: '$icon',
      title: '$head',
      text: '$pesan',
    })
    </script>";

    unset($_SESSION["flash"]);
  }
?>