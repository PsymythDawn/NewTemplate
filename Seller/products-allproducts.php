<!DOCTYPE html>
<?php
    include 'include/header.php';
    include 'include/aside.php';
?>
<html>
    <head>
        <title>Dashboard - Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDNJSDelivr -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- /Bootstrap CDNJSDelivr -->
        <!-- W3 schools progress bars css-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- /W3 schools progress bars css-->
        <!-- Inter - Google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <!-- /Inter - Google font -->
        <!-- CSS Assets -->
        <link rel="stylesheet" type="text/css" href="assets/dashboard.css">
        <link rel="stylesheet" type="text/css" href="assets/mobileResponsive.css"><!-- for 0px min width to 720px max widths -->
        <link rel="stylesheet" type="text/css" href="assets/webResponsive.css"><!-- for 1280px min width to % max widths -->
        <link rel="stylesheet" type="text/css" href="assets/products.css">
        <!-- /CSS Assets -->
        
        <!-- Script for Tooltip -->
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
        <!-- /Script for Tooltip -->
    </head>
    <body>
        <main class="mainSection">
            <div class="d-flex justify-content-between mb-3">
                <h2 class="fw-bold">All Products</h2>
                <button class="btn btn-danger" style="width:15%; border-radius: 20px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add Products</button>
            </div>
            <div class="contentDiv">
                <div class="categoryNavContainer mt-2 mb-3">
                    
                    <ul class="d-flex"> 
                        <li>
                            <a href="#" style="border-bottom: 2px solid #af1607; color: #af1607">ALL(+99)</a> 
                        </li>
                        <li>
                            <a href="#">Category#1(0)</a> 
                        </li>
                        <li>
                            <a href="#">Category#2(0)</a> 
                        </li>
                    </ul>
                </div>

                <?php
                    include 'actions/action-viewproducts.php';
                ?>

                <div class="productContainers">

                    <div class="productCardsRow d-flex justify-content-between">

                        <!-- Product1 -->
                        <div class="productCard">
                            <img class="productImg" src="https://i.ebayimg.com/images/g/hI0AAOSwQi1cythG/s-l1200.jpg" alt="product image">                         
                            <div class="productDetails">
                                <h4 class="fw-bold"> <?php echo $productName;?> </h4>
                                <h5 class="fw-bold"> ₱<?php echo $productPrice;?> </h5>
                                <h5 class="fw-bold"> <?php echo $productStocks;?> </h5>
                                <div>
                                    <div class="d-flex mb-2">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>Purchase</button>
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>+Restock</button>
                                    </div>
                                </div>
                                <p class="text-muted"></p>
                            </div>
                        </div>

                        <!-- Product2 -->
                        <div class="productCard">
                            <img class="productImg" src="https://i.ebayimg.com/images/g/hI0AAOSwQi1cythG/s-l1200.jpg" alt="product image">
                            <div class="productDetails">
                                <h4 class="fw-bold">Product #2</h4>
                                <h5 class="fw-bold">productPrice</h5>
                                <h5 class="fw-bold">Stonks</h5>
                                <div>
                                    <div class="d-flex mb-2">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>Purchase</button>
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>+Restock</button>
                                    </div>
                                </div>
                                <p class="text-muted"></p>
                            </div>
                        </div>

                        <!-- Product3 -->
                        <div class="productCard">
                            <img class="productImg" src="https://i.ebayimg.com/images/g/hI0AAOSwQi1cythG/s-l1200.jpg" alt="product image">
                            <div class="productDetails">
                                <h4 class="fw-bold">Product #3</h4>
                                <h5 class="fw-bold">Price</h5>
                                <h5 class="fw-bold">Stonks</h5>
                                <div>
                                    <div class="d-flex mb-2">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>Purchase</button>
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>+Restock</button>
                                    </div>
                                </div>
                                <p class="text-muted"></p>
                            </div>
                        </div>

                        <!-- Product4 -->
                        <div class="productCard">
                            <img class="productImg" src="https://i.ebayimg.com/images/g/hI0AAOSwQi1cythG/s-l1200.jpg" alt="product image">
                            <div class="productDetails">
                                <h4 class="fw-bold">Product #4</h4>
                                <h5 class="fw-bold">Price</h5>
                                <h5 class="fw-bold">Stonks</h5>
                                <div>
                                    <div class="d-flex mb-2">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>Purchase</button>
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>+Restock</button>
                                    </div>
                                </div>
                                
                                <p class="text-muted"></p>
                            </div>
                        </div>

                        <!-- Product5 -->
                        <div class="productCard">
                            <img class="productImg" src="https://i.ebayimg.com/images/g/hI0AAOSwQi1cythG/s-l1200.jpg" alt="product image">
                            <div class="productDetails">
                                <h4 class="fw-bold">Product #5</h4>
                                <h5 class="fw-bold">Price</h5>
                                <h5 class="fw-bold">Stonks</h5>
                                <div>
                                    <div class="d-flex mb-2">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>Purchase</button>
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>+Restock</button>
                                    </div>
                                </div>
                                <p class="text-muted"></p>
                            </div>
                        </div>

                        <!-- Product6 -->
                        <div class="productCard m-0">
                            <img class="productImg" src="https://i.ebayimg.com/images/g/hI0AAOSwQi1cythG/s-l1200.jpg" alt="product image">
                            <div class="productDetails">
                                <h4 class="fw-bold">Product #6</h4>
                                <h5 class="fw-bold">Price</h5>
                                <h5 class="fw-bold">Stonks</h5>
                                <div>
                                    <div class="d-flex mb-2">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>Purchase</button>
                                    </div>
                                    <div class="d-flex">
                                        <input type="text" style="width: 60%; margin: 0 5px 0 0"/>
                                        <button>+Restock</button>
                                    </div>
                                </div>
                                <p class="text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div> 
            

                <!-- Modal for adding Products -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
        </main>
    </body>
</html>