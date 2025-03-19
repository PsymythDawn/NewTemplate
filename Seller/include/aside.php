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
                width: 36vh;
                height: 100vh; /* Ensure it takes full viewport height */
                top: 0;
                left: 0;
            }
            .asideNav {
                position: relative;
                width: 213px;
                background-color: #faf9f6;
                padding: 10px 10px 10px 0px;
                margin: 95px 0 0 0;
                height: 100%;
                border-radius: 0 10px 0 0;
                border: 3px solid #5454547b;
            }
            .Listnav {
                font-size: 16px;
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
                font-size: 15px;    
                color: #af1607;
                font-weight: bold;
            }
            .subLinkFont {
                font-size: 14px;
                color: #545454;
                text-decoration: none;
                font-weight: bold;
            }
            .subLinkFont:hover {
                font-size: 13.5px;
                text-decoration: none;
                color: #af1607;
                font-weight: bold;
            }
            .subLinkFontActive {
                font-size: 14px;
                text-decoration: none;
                color: #af1607;
                font-weight: bold;
            }
            .padY10 {
                padding: 5px 0;
            }
            .submenu {
                list-style-type: none;
                padding: 5px 0px 0 14px;
            }
        </style>
        <!-- Script for Toggling Submenu of Navlinks -->
        <script>
            function toggleSubmenu(event) {
                event.preventDefault();
                const submenu = event.currentTarget.nextElementSibling;
                submenu.style.display = submenu.style.display === "none" ? "block" : "none";
            }
        </script>
        <!-- /Script for Toggling Submenu of Navlinks -->
    </head>
    </body>
        <aside>
            <div class="asideNav">
                <?php
                    //echo $urlEnd;
                ?>
                <ul style="list-style: none; padding: 0 0 0 15px;" >
                    <li class="Listnav">
                        <a href="dashboard.php" class="anchorNav <?php if($urlEnd === 'dashboard.php') echo $active;?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg> Dashboard</a>
                    </li>

                    <li class="Listnav">
                        <a href="#" class="anchorNav <?php if($urlEnd === 'products-allproducts.php' || $urlEnd === 'products-addnewproducts.php' || $urlEnd === 'products-addnewpromotion.php') echo $active; ?>" onclick="toggleSubmenu(event)"><svg class="svgResponsive" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-open"><path d="M12 22v-9"/><path d="M15.17 2.21a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.655 1.655 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z"/><path d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13"/><path d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.636 1.636 0 0 0 1.63 0z"/></svg> Products ></a>

                        <ul class="submenu">
                            <li class="padY10"><a href="products-allproducts.php" class="subLinkFont <?php if($urlEnd === 'products-allproducts.php') echo $active; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-search"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/><path d="m7.5 4.27 9 5.15"/><polyline points="3.29 7 12 12 20.71 7"/><line x1="12" x2="12" y1="22" y2="12"/><circle cx="18.5" cy="15.5" r="2.5"/><path d="M20.27 17.27 22 19"/></svg> All Products</a></li>

                            <li class="padY10"><a href="products-addnewproducts.php" class="subLinkFont <?php if($urlEnd === 'products-addnewproducts.php') echo $active; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-plus"><path d="M16 16h6"/><path d="M19 13v6"/><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/><path d="m7.5 4.27 9 5.15"/><polyline points="3.29 7 12 12 20.71 7"/><line x1="12" x2="12" y1="22" y2="12"/></svg> Add New Products</a></li>

                            <li class="padY10"><a href="products-addnewpromotion.php" class="subLinkFont <?php if($urlEnd === 'products-addnewpromotion.php') echo $active; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket-plus"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><path d="M9 12h6"/><path d="M12 9v6"/></svg> Add New Promotion</a></li>

                            <li class="padY10"><a href="products-onsale.php" class="subLinkFont"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-percent"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m15 9-6 6"/><path d="M9 9h.01"/><path d="M15 15h.01"/></svg> On Sale</a></li>
                                
                        </ul>
                    </li>

                    <li class="Listnav">
                        <a href="#" class="anchorNav"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell"><path d="M10.268 21a2 2 0 0 0 3.464 0"/><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"/></svg> Notifications</a>
                    </li>
                    
                    <li class="Listnav">
                        <a href="#" class="anchorNav"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined"><path d="M12 16v5"/><path d="M16 14v7"/><path d="M20 10v11"/><path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"/><path d="M4 18v3"/><path d="M8 14v7"/></svg>  Analytics</a>
                    </li>

                    <li class="Listnav" style="height: 0px; background: gray; padding: 2px; margin: 12px 9px 12px 0;">
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