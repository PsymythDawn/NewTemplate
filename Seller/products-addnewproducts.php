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
                <h2 class="fw-bold">Add New Products</h2>
            </div>
            <div class="contentDiv">
                
                <!-- Alert Container -->
                <div id="alert-container" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none; position: absolute; width: 96%;">
                    <h2 class="text-center m-0 fw-bold" style="font-size: 22px;" id="alert-text"></h2>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <script>
                    function getParameterByName(name) {
                        const url = window.location.href;
                        name = name.replace(/[\[\]]/g, '\\$&');
                        const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
                        const results = regex.exec(url);
                        if (!results) return null;
                        if (!results[2]) return '';
                        return decodeURIComponent(results[2].replace(/\+/g, ' '));
                    }

                    const errorMessage = getParameterByName('e');

                    if (errorMessage) {
                        const alertContainer = document.getElementById('alert-container');
                        document.getElementById('alert-text').textContent = errorMessage;
                        alertContainer.style.display = 'block';
                        alertContainer.classList.add('slide-down');

                        if (errorMessage.includes("Successfull") || errorMessage.includes("Successfully") || errorMessage.includes("Success")) {
                            alertContainer.classList.remove('alert-danger');
                            alertContainer.classList.add('alert-success');
                        }

                        setTimeout(() => {
                            if (alertContainer) {
                                alertContainer.classList.add('fade-out');
                                setTimeout(() => {
                                    alertContainer.style.display = 'none';
                                }, 500);
                            }
                        }, 6000);
                    }
                </script>
                <style>
                    @keyframes slideDown {
                        from {
                            transform: translateY(-100%);
                        }
                        to {
                            transform: translateY(0);
                        }
                    }

                    .slide-down {
                        animation: slideDown 0.5s ease-out;
                    }

                    .fade-out {
                        opacity: 0;
                        transition: opacity 0.5s ease-out;
                    }
                </style>

                <h2 class="mx-5 my-3 fw-bold text-center" style="color: #545454">Product Information</h2>
                <hr style="height: 5px; background: #545454"/>

                <form action="actions/action-addnewproduct.php" method="POST">
                    <div class="formSection">
                        <div class="d-flex justify-content-between">
                            <h4 class="formLabels"><span class="formRequired">*</span> Product Image/s</h4>
                            <div style="width: 30%;" class="formMarginRight">
                                <label for="addProductImage" id="imgDropArea" required>
                                    <input type="file" accept="image/*" id="addProductImage" name="productImg" hidden required>
                                    <div id="imgView" class="previewImg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#817d7e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud-upload"><path d="M12 13v8"/><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"/><path d="m8 17 4-4 4 4"/></svg>
                                        <p class="mt-1 fw-bold" style="color:#817d7e">Upload Product Image</p>
                                    </div>
                                </label>
                            </div>
                        </div>    


                        <script>
                            document.getElementById('addProductImage').addEventListener('change', function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        const previewImg = document.getElementById('imgView');
                                        previewImg.innerHTML = `<img src="${e.target.result}" alt="Product Image" style="height: 150px; width: auto;">`;
                                    };
                                    reader.readAsDataURL(file);
                                }
                            });
                        </script>
                    </div>

                    <div class="formSection d-flex justify-content-between">
                        <h4 class="formLabels"><span class="formRequired">*</span> Product Name</h4>
                        <input type="text" class="inputtextForm formMarginRight" placeholder="Enter Product Name" name="productName" required>
                    </div>

                    <div class="formSection d-flex justify-content-between">
                        <h4 class="formLabels"><span class="formRequired">*</span> Set Product Category</h4>
                        <div style="width: 30%;" class="formMarginRight"> 
                            <select name="productCategory" class="selectForm">
                                <option value="1">Uncategorized</option>
                                <option value="2">Make up and Fragrances</option>
                                <option value="3">Clothing</option>
                                <option value="4">Home Appliances</option>
                                <option value="5">Electronics</option>
                            </select>
                        </div>
                    </div>

                    <div class="formSection d-flex justify-content-between">
                        <h4 class="formLabels"><span class="formRequired">*</span> Product Description</h4>
                        <textarea class="descriptionInputForm formMarginRight" placeholder="Enter Product Description" name="productdescription" required></textarea>
                    </div>

                    <div class="formSection d-flex justify-content-between">
                        <h4 class="formLabels"><span class="formRequired">*</span> Product Price (₱/Php)</h4>
                        <input type="text" class="inputtextForm formMarginRight" placeholder="Enter Product Price" name="productprice" required>
                    </div>

                    <div class="formSection d-flex justify-content-between">
                        <h4 class="formLabels"><span class="formRequired">*</span> Product Stocks</h4>
                        <input type="text" class="inputtextForm formMarginRight" placeholder="Enter Product Stocks" name="productstocks" required>
                    </div>

                    <div style="justify-content: flex-end; display: flex;" class="formSection">
                        <button class="btn btn-danger" type="submit" style="width: 15%; height: 50px; margin: 5% 20% 0 0;">Add Product</button>
                    </div>  
                </form>

            </div>
        </main>
    </body>
</html>