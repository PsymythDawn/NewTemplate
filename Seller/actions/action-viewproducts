<?php
    include 'conn.php';

    $selectProducts = "SELECT * FROM `products`";
    $resultselectProducts = mysqli_query($conn, $selectProducts);
    if (mysqli_num_rows($resultselectProducts) > 0) {
        $row = mysqli_fetch_assoc($resultselectProducts);
            $id = $row['product_id'];
            //$productIMG = $row['prod_img'];
            $productName = $row['product_name'];
            $productCategory = $row['product_category'];
            $productDescription = $row['product_description'];
            $productPrice = $row['product_price'];
            $productStocks = $row['product_stocks'];
    }
?>