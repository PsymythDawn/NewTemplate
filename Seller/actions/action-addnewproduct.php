<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prodImg = $_POST['productImg'];
    $prodName = $_POST['productName'];
    $prodCateg = $_POST['productCategory'];
    $prodDesc = $_POST['productdescription'];
    $prodPrice = $_POST['productprice'];
    $prodStock = $_POST['productstocks'];
    $dateAdded = date("Y-m-d",strtotime($date));
    
    $insert = "INSERT INTO `products` (`product_img`, `product_name`, `product_category`, `product_description`, `product_price`, `product_stocks`, `dateAdded`) VALUES('$prodImg', '$prodName', '$prodCateg', '$prodDesc', '$prodPrice', '$prodStock', '$dateAdded')";
    
    if ($conn->query($insert) === TRUE) {
        echo $message = "New record created successfully";
        header("location: ../products-addnewproducts.php?e=$message");
    } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
}

?>