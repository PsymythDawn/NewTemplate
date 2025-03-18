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
    </body>
        <main class="mainSection" style="border: 2px solid red;">
            <div class="mainAdminGreeting">
                <h3 class="fw-bold greetingAdmin">WELCOME BACK, <span class="af1607">SELLER</span></h3>
                <h5 class="fw-bold mb-3 monthStat">Lets check the stat, for the month of <span class="af1607">MARCH</span></h5>
            </div>
            <div style="width: 100%; height: 200px;" class="d-flex justify-content-between displayNone statusCards">
                <div class="divBorder padding10px" style="width: 40%; margin: 0 20px 0 0; background: #faf9f6; padding: 20px; border-radius: 10px;">
                    <h4 class="m-0 fw-bold af1607">Monthly Revenue</h4>
                    <p class="text-center"style="font-size: 50px; padding: 5px 0px; margin: 12px; background: #dddddd; border-radius: 10px; color:252525 ">₱100,000,000.50</p>
                    <p style="font-size: 14px; padding: 0 0 0 30px; margin: 0px; font-weight: bold;">₱70,900,000.99 Revenue Last Month</p>
                    <div style="position: relative; z-index: 1; width: 50%; margin: -16px 0px 0px 54%; display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0f9d58" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up"><path d="m17 11-5-5-5 5"/><path d="m17 18-5-5-5 5"/></svg>
                        <h6 style="padding: 0px 0 1px 0; margin: 6px 0 0 6px;"><b>25%  Higher than last month</b></h6>
                    </div>
                </div>
                <div class="divBorder padding10px" style="width: 25%; margin: 0 20px 0 0; background: #faf9f6; padding: 20px; border-radius: 10px;">
                    <h4 class="m-0 fw-bold af1607">Total Users</h4>
                    <p class="text-center" style="font-size: 50px; padding: 5px 0px; margin: 12px; background: #dddddd; border-radius: 10px;">80K+ Users</p>
                </div>
            
                <div class="divBorder padding10px" style="width: 35%; background: #faf9f6; padding: 20px; border-radius: 10px;">
                    <h4 class="m-0 fw-bold af1607">Monthly Subscriptions</h5>
                    <p class="text-center" style="font-size: 50px; padding: 5px 0px; margin: 12px; background: #dddddd; border-radius: 10px;">₱1,300,000.01</p>
                    <div style="position: relative; z-index: 1; width: 54%; margin: 16px 0px 0px 48%; display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0f9d58" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up"><path d="m17 11-5-5-5 5"/><path d="m17 18-5-5-5 5"/></svg>
                        <h6 style="padding: 0px 0 1px 0; margin: 6px 0 0 6px;"><b>25%  Higher than last month</b></h6>
                    </div>
                </div>
            
            </div>
            
        </main>
    </body>
</html>