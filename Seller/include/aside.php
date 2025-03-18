<?php
    $currentUrl = $_SERVER['REQUEST_URI'];

    $urlArray = explode('/', $currentUrl);

    $urlEnd = end($urlArray);

    $active = "subLinkFontActive";


    // if ($urlEnd === "dashboard.php") {
    // } else if($urlEnd === "products-allproducts.php") {
    //     $active = "subLinkFontActive";
    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aside</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDNJSDelivr -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- /Bootstrap CDNJSDelivr -->
        <style>
            aside {
                position: fixed; /* Change from absolute to fixed */
                z-index: 1; 
                width: 16%;
                height: 100vh; /* Ensure it takes full viewport height */
                top: 0;
                left: 0;
            }
            .asideNav {
                position: relative;
                width: 100%;
                background-color: #faf9f6;
                padding: 20px 20px 20px 0px;
                margin: 107px 0 0 0;
                height: 100%;
                border-radius: 0 10px 0 0;
                border: 3px solid #5454547b;
            }
            .Listnav {
                font-size: 22px;
                padding: 10px 0;
            }
            .anchorNav {
                text-decoration: none;
                color: #545454;
                padding-top: 5px;
                font-weight: bold;
            }
            .anchorNav:hover {
                text-decoration: none;
                font-size: 24px;    
                color: #af1607;
                font-weight: bold;
            }
            .subLinkFont {
                font-size: 18px;
                color: #545454;
                text-decoration: none;
                font-weight: bold;
            }
            .subLinkFont:hover {
                font-size: 19px;
                text-decoration: none;
                color: #af1607;
                font-weight: bold;
            }
            .subLinkFontActive {
                font-size: 19px;
                text-decoration: none;
                color: #af1607;
                font-weight: bold;
            }
        </style>
        <!-- Script for Toggling Submenu of Navlinks -->
        <script>
            /*function toggleSubmenu(event) {
                event.preventDefault();
                const submenu = event.currentTarget.nextElementSibling;
                submenu.style.display = submenu.style.display === "none" ? "block" : "none";
            }*/
        </script>
        <!-- /Script for Toggling Submenu of Navlinks -->
    </head>
    </body>
        <aside>
            <div class="asideNav">
                <?php
                    //echo $urlEnd;
                ?>
                <ul style="list-style: none">
                    <li class="Listnav">
                        <a href="dashboard.php" class="anchorNav <?php if($urlEnd === 'dashboard.php') echo $active;?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg> Dashboard</a>
                    </li>

                    <li class="Listnav">
                        <a href="#" class="anchorNav <?php if($urlEnd === 'products-allproducts.php' || $urlEnd === 'products-addnewproducts.php' || $urlEnd === 'products-addnewpromotion.php') echo $active; ?>" onclick="toggleSubmenu(event)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round"><circle cx="12" cy="8" r="5"/><path d="M20 21a8 8 0 0 0-16 0"/></svg> Products</a>

                        <ul class="submenu" style="list-style-type: none; padding-left: 20px;">
                            <li class="mt-3"><a href="products-allproducts.php" class="subLinkFont <?php if($urlEnd === 'products-allproducts.php') echo $active; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle"><circle cx="12" cy="12" r="10"/></svg> All Products</a></li>

                            <li class="mt-3"><a href="products-addnewproducts.php" class="subLinkFont <?php if($urlEnd === 'products-addnewproducts.php') echo $active; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle"><circle cx="12" cy="12" r="10"/></svg> Add New Products</a></li>

                            <li class="mt-3"><a href="products-addnewpromotion.php" class="subLinkFont <?php if($urlEnd === 'products-addnewpromotion.php') echo $active; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle"><circle cx="12" cy="12" r="10"/></svg> Add New Promotion</a></li>

                            <li class="mt-3"><a href="products-onsale.php" class="subLinkFont"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle"><circle cx="12" cy="12" r="10"/></svg>  On Sale</a></li>
                                
                        </ul>
                    </li>

                    <li class="Listnav">
                        <a href="#" class="anchorNav"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined"><path d="M12 16v5"/><path d="M16 14v7"/><path d="M20 10v11"/><path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"/><path d="M4 18v3"/><path d="M8 14v7"/></svg>  Analytics</a>
                    </li>

                    <li class="Listnav" style="height: 0px; background: gray; padding: 2px; margin: 15px 50px 15px 0;">
                        <hr/>
                    </li>

                    <li class="Listnav">
                        <a href="#" class="anchorNav"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg> log out</a>
                    </li>
                </ul>
            </div>
        </aside>
    </body>
</html>