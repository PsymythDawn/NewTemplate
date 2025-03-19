<!DOCTYPE html>
<html>
    <head>
        <title>Header</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDNJSDelivr -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- /Bootstrap CDNJSDelivr -->
        <style>
            header {
                position: fixed;
                z-index: 2;
                width: 100%;
                background-color: #faf9f6;
                border-bottom: 3px solid #5454547b;
            }
            .headerDiv {
                display: flex;
                margin: 12px 0px 10px 20px;
            }
            .SHOPTITLEDIV {
                font-family: sans-serif;
                width: 14.5%;
            }
            .SaleLogo {
                height: 50px;
                border-radius: 12px;
                margin: 0px 5px 0px 0;
            }
            #headerSearchbar {
                width: 350px;
                height: 40px;
                margin: 1% 0 0 0px;
                border: 2px solid rgba(175, 21, 7, 0.34);
            }
            .userLink {
                text-decoration: none;
                color: #545454;
                font-size: 18px;
                padding: 8px 0 0 0;
            }
            .userLink:hover {
                text-decoration: none;
                font-weight: bold;
                color: #af1607;
            }
            .sellerName {
                margin: 0;
                font-size: 14px;
                height: 20px;
            }
            
        </style>
    </head>
    <body>
        <header class="d-flex justify-content-between">
            <div class="SHOPTITLEDIV headerDiv">
                <img src="../assets\css/SHOPAPP.png" class="SaleLogo"/>
                <h2 class="mt-2 fw-bold saleText" style="color: #af1607">SALE</h2>
                <h6 class="fw-bold ms-3 text-center mt-2 mb-0 portalText">Seller Portal</h6>
            </div>
            <div class="headerDiv me-3">
                <div>
                    <input type="text" class="form-control me-3 " id="headerSearchbar" placeholder="Search"/>
                </div>
                
                <div class="btn-group pt-1">
                    
                    <img src="https://cdn-icons-png.flaticon.com/512/6596/6596121.png" style="height: 40px;" class="me-1" data-bs-toggle="dropdown" />
                    <a class="fw-bold d-flex dropdown-toggle userLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="sellerName">HellowSeller</p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><img src=""/>Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Responsive Header -->
            <!-- /Script for mobile Sidebar -->
            <a href="dashboard.php" onclick="mobileSideBarFunction()" class="displayNoneAnchor"><img id="burgerIcon" src="https://cdn-icons-png.flaticon.com/128/4254/4254068.png" alt="BurgerSideBar" /></a>
            <script type="text/javascript">
                function mobileSideBarFunction() {
                    const mobileSidebar = document.querySelector('.mobileSidebar');
                    // Toggle visibility of mobileSidebar
                    if (mobileSidebar.style.display === 'none') {
                        mobileSidebar.style.display = 'block';
                        mobileSidebar.style.right = '0';
                        mobileSidebar.style.transition = 'right 0.3s ease-in-out';
                    } else {
                        mobileSidebar.style.display = 'none';
                    }
                    //alert("Hello World");
                }
            </script>
            <!-- /Script for mobile Sidebar -->
            <!-- /Mobile Responsive Header -->

        </header>
    </body>
</html>
