<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
      <!-- NAVBAR -->
      <ul class="nav nav-side nav-pills mb-3 flex-column" id="pills-tab" role="tablist">
          <li><img src="./asset/img/logo_dprox_coffe.png" alt="" width="65"></li>
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#page-home" type="button" role="tab" aria-controls="page-home" aria-selected="true">
              <ion-icon name="apps"></ion-icon>
            </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-drink-tab" data-bs-toggle="pill" data-bs-target="#page-drink" type="button" role="tab" aria-controls="page-drink" aria-selected="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                  <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                  <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                  <line x1="6" y1="1" x2="6" y2="4"></line>
                  <line x1="10" y1="1" x2="10" y2="4"></line>
                  <line x1="14" y1="1" x2="14" y2="4"></line>
                </svg>
            </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-food-tab" data-bs-toggle="pill" data-bs-target="#page-food" type="button" role="tab" aria-controls="page-food" aria-selected="false">
              <ion-icon name="pizza-outline"></ion-icon>
            </button>
        </li>
        <li class="nav-item logout d-flex justify-content-center">
            <a class="btn">
                <ion-icon name="log-out-outline"></ion-icon>
            </a>
        </li>
    </ul>
    <!-- END NAVBAR -->

    <!-- HEADER -->
    <div class="header d-flex justify-content-between">
        <div class="title">
            <h1>Hello Guys</h1>
            <p>How Are You today</p>
        </div>
        <div class="search">
            <ion-icon name="search-outline"></ion-icon>
            <input type="text" placeholder="Seacrh something">
        </div>
    </div>
    <!-- END HEADER -->

    <!-- MAIN -->
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active tab-home" id="page-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <!-- HERO -->
            <div class="hero d-flex justify-content-between">
                <div class="imgBox">
                    <img src="./asset/img/caffe latte.png" alt="">
                </div>
                <div class="deskripsi">
                    <h1>Caffe Latte</h1>
                    <div class="info-price d-flex justify-content-between">
                        <div class="price">
                            <p>Price</p>
                            <h2>Rp 8.000</h2>
                        </div>
                        <div class="btn-order">
                            <button class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                    <p class="text">
                        Caffe Latte is a coffee drink of Italian origin made with espresso and steamed milk. Variants include the chocolate-flavored mocha or replacing the coffee with another drink base such as masala chai (spiced Indian tea), mate, matcha, turmeric or rooibos; other types of milk, such as soy milk or almond milk, are also used.
                    </p>
                    <div class="d-flex">
                        <div class="badge">Hot Offers</div>
                        <div class="badge">Drink</div>
                    </div>
                </div>
            </div>
            <!-- END HERO -->

            <h3 class="my-3">Drinks</h3>

            <!-- DRINKS -->
            <div class="container-fluid section-drink">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="./asset/img/espresso.png" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Espresso</h5>
                              <div class="info d-flex justify-content-between">
                                <div class="left">
                                    <h6>Price</h6>
                                    <h5>Rp 20.000</h5>
                                    <div class="badge">
                                        Drink
                                    </div>
                                </div>
                                <div class="right d-flex flex-column justify-content-between pt-2">
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-detail-menu">Details</button>
                                    <button type="button" class="btn btn-primary">Order Now</button>
                                </div>
                            </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="./asset/img/frappe.png" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Frappe</h5>
                              <div class="info d-flex justify-content-between">
                                <div class="left">
                                    <h6>Price</h6>
                                    <h5>Rp 12.000</h5>
                                    <div class="badge">
                                        Drink
                                    </div>
                                </div>
                                <div class="right d-flex flex-column justify-content-between pt-2">
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-detail-menu">Details</button>
                                    <button type="button" class="btn btn-primary">Order Now</button>
                                </div>
                            </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="./asset/img/mocha.png" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Mocha</h5>
                              <div class="info d-flex justify-content-between">
                                <div class="left">
                                    <h6>Price</h6>
                                    <h5>Rp 10.000</h5>
                                    <div class="badge">
                                        Drink
                                    </div>
                                </div>
                                <div class="right d-flex flex-column justify-content-between pt-2">
                                    <button type="button" class="btn btn-outline-primary">Details</button>
                                    <button type="button" class="btn btn-primary">Order Now</button>
                                </div>
                            </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DRINKS -->        
            
        </div>
        <div class="tab-pane fade" id="page-drink" role="tabpanel" aria-labelledby="nav-profile-tab">
            <h1>Comming Soon</h1>
        </div>
        <div class="tab-pane fade" id="page-food" role="tabpanel" aria-labelledby="nav-contact-tab">
            <h1>Comming Soon</h1>
        </div>
    </div>

    <!-- END MAIN -->
      
    <!-- CART -->
    <div class="my-cart">
        <h2 class="text-center">My Cart</h2>

        <ul class="items">
            <li class="item d-flex">
                <div class="imgBox">
                    <img src="./asset/img/mocha.png" alt="" width="50">
                 </div>
                <div class="right">
                    <h5>Mocha</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Rp 10.000</h6>
                        <div class="value d-flex justify-content-between">
                            <button class="btn">-</button>
                            <span class="qty">1</span>
                            <button class="btn">+</button>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item d-flex">
                <div class="imgBox">
                    <img src="./asset/img/mocha.png" alt="" width="50">
                 </div>
                <div class="right">
                    <h5>Mocha</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Rp 10.000</h6>
                        <div class="value d-flex justify-content-between">
                            <button class="btn">-</button>
                            <span class="qty">1</span>
                            <button class="btn">+</button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="total d-flex justify-content-between bold">
            <p class="fw-bold">Total</p>
            <p class="total-value fw-bold">Rp 28.000</p>
        </div>

        <button type="button" class="btn btn-primary">Checkout</button>
        
    </div>

    <!-- END CART -->

    <!-- MODAL -->

    <div class="modal fade" id="modal-detail-menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
    <!-- END MODAL -->

    
    <script src="./asset/js/jquery.js"></script>
    <script src="./asset/js/popper.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./asset/js/bootstrap.min.js"></script>

  </body>
</html>